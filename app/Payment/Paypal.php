<?php

namespace App\Payment;

use App\Models\ConfigModel;

class Paypal extends Payment
{
    private const PRODUCT_REQUEST_ID = '5533a4ea104d4b7a9bd1a4c3a92af6a6';
    private const BILLING_REQUEST_ID = '2df870a7e79b4327b903968c59b53f9d';
    private const HOOK_REQUEST_ID = '5e71afec57664db8a710718212456814';
    
    private $data;
    private $client;
    
    public function __construct(ConfigModel $config)
    {
        parent::__construct($config);
        
        $this->data = $this->config->getMultipleByName([
            'paypal_client_id',
            'paypal_client_secret',
            'paypal_token',
            'paypal_product',
            'paypal_plan',
            'paypal_webhook'
        ]);
    }
    
    private function getClient()
    {
        if (!$this->client) {
            $this->client = new Paypal\Client(
                $this->data['paypal_client_id'],
                $this->data['paypal_client_secret'],
                false
            );
            
            if (!empty($this->data['paypal_token'])) {
                $this->client->setToken(unserialize($this->data['paypal_token']));
            }
        }
        
        return $this->client;
    }
    
    private function getProduct()
    {
        if (!empty($this->data['paypal_product'])) {
            return $this->data['paypal_product'];
        }
        
        $paypal = $this->getClient();
        $product = $paypal->createProduct([
            'name' => 'Flasheeprom Tokens',
            'description' => 'Servicio de tokens para usar el editor de Flasheeprom',
            'type' => 'SERVICE',
            'category' => 'SOFTWARE',
            'image_url' => base_url('estilos/logo/png'),
            'home_url' => base_url()
        ], self::PRODUCT_REQUEST_ID);
        
        $this->config->setByName('paypal_product', $product);
        $this->data['paypal_product'] = $product;
        
        $this->storeToken();
        
        return $product;
    }
    
    public function createOrder(\App\Entities\User $user): object
    {
        $paypal = $this->getClient();
        
        $result = $paypal->createOrder([
            'intent' => 'CAPTURE',
            'purchase_units' => [
                [
                    'amount' => [
                        'currency_code' => 'USD',
                        'value' => '5.60'
                    ],
                    'description' => 'Tokens para usar el editor de Flasheeprom (300 tokens por 30 días)',
                    'custom_id' => $user->userid
                ]
            ]
        ]);
        
        $this->storeToken();
        
        return $result;
    }
    
    public function capturePayment(string $order_id): object
    {
        $paypal = $this->getClient();
        $result = $paypal->capturePayment($order_id);
        
        $this->storeToken();
        return $result;
    }
    
    public function createSubscription(\App\Entities\User $user)
    {
        $paypal = $this->getClient();
        $subscription = $paypal->createSubscription([
            'plan_id' => $this->getPlan(),
            'start_time' => date(DATE_ISO8601, strtotime('+30 days')),
            'custom_id' => $user->userid
        ]);
        
        $this->storeToken();
        
        return $subscription;
    }
    
    private function createHook()
    {
        if (!empty($this->data['paypal_webhook'])) {
            return;
        }
        
        $paypal = $this->getClient();
        $hook = $paypal->createWebhook([
            'url' => base_url('subscription/webhook'),
            'event_types' => [
                [
                    'name' => 'PAYMENT.SALE.COMPLETED'
                ]
            ]
        ], self::HOOK_REQUEST_ID);
        
        $this->config->setByName('paypal_webhook', $hook);
        $this->data['paypal_webhook'] = $hook;
        
        $this->storeToken();
        
        return $hook;
    }
    
    public function getPlan()
    {
        $this->createHook();
        
        if (!empty($this->data['paypal_plan'])) {
            return $this->data['paypal_plan'];
        }
        
        $paypal = $this->getClient();
        $plan = $paypal->createPlan([
            'product_id' => $this->getProduct(),
            'name' => 'Plan Básico',
            'description' => 'Plan de Flasheeprom de 300 tokens válidos por 30 días',
            'billing_cycles' => [
                [
                    'frequency' => [
                        'interval_unit' => 'DAY',
                        'interval_count' => 30
                    ],
                    'tenure_type' => 'REGULAR',
                    'sequence' => 1,
                    'total_cycles' => 0,
                    'pricing_scheme' => [
                        'fixed_price' => [
                            'value' => 5,
                            'currency_code' => 'USD'
                        ]
                    ]
                ]
            ],
            'payment_preferences' => [
                'auto_bill_outstanding' => false,
                'setup_fee' => [
                    'value' => 5,
                    'currency_code' => 'USD'
                ],
                'setup_fee_failure_action' => 'CANCEL',
                'payment_failure_threshold' => 1
            ]
        ], self::BILLING_REQUEST_ID);
        
        $this->config->setByName('paypal_plan', $plan);
        $this->data['paypal_plan'] = $plan;
        
        $this->storeToken();
        
        return $plan;
    }
    
    private function storeToken()
    {
        $paypal = $this->getClient();
        if ($paypal->hasTokenBeenUpdated()) {
            $token = $paypal->getToken();
            $this->config->setByName('paypal_token', serialize($token));
            $paypal->setToken($token);
        }
    }
}
