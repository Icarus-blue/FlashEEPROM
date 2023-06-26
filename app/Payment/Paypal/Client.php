<?php

namespace App\Payment\Paypal;

class Client
{
    private const SANDBOX_URL = 'https://api-m.sandbox.paypal.com/';
    private const PRODUCTION_URL = 'https://api-m.paypal.com/';
    
    private $sandbox;
    private $clientId;
    private $clientSecret;
    private $token;
    private $tokenUpdated = false;
    
    public function __construct(string $clientId, string $clientSecret, bool $sandbox = false)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->sandbox = $sandbox;
    }
    
    private function createUrl(string $url): string
    {
        $domain = $this->sandbox ? self::SANDBOX_URL : self::PRODUCTION_URL;
        return $domain . $url;
    }
    
    public function getToken()
    {
        if ($this->token && time() < $this->token['expires']) {
            return $this->token;
        }
        
        $curl = curl_init();

        $authorization = base64_encode($this->clientId . ':' . $this->clientSecret);
        curl_setopt_array($curl, [
            CURLOPT_URL => $this->createUrl('v1/oauth2/token'),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => 'grant_type=client_credentials',
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Basic ' . $authorization,
                'Accept: application/json'
            ],
        ]);

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
        
        if (!$response || !isset($response->access_token)) {
            throw new \Exception('Invalid response');
        }
        
        $this->token = [
            'token' => $response->access_token,
            'expires' => time() + $response->expires_in - 30
        ];
        
        $this->tokenUpdated = true;
        
        return $this->token;
    }
    
    public function setToken(array $token)
    {
        $this->tokenUpdated = false;
        $this->token = $token;
    }
    
    public function hasTokenBeenUpdated(): bool
    {
        return $this->tokenUpdated;
    }
    
    private function makeRequest(string $url, array $data, ?string $id = null)
    {
        if (!$id) {
            $id = bin2hex(random_bytes(16));
        }
        
        $curl = curl_init();
        
        curl_setopt_array($curl, [
            CURLOPT_URL => $this->createUrl($url),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => empty($data) ? '{}' : json_encode($data),
            CURLOPT_HTTPHEADER => [
                'Accept: application/json',
                'Content-Type: application/json',
                'Authorization: Bearer ' . $this->getToken()['token'],
                'PayPal-Request-Id: ' . $id
            ],
        ]);
        
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
        
        if (!$response) {
            throw new \Exception('Invalid response');
        }
        
        return $response;
    }
    
    private function makeCreateRequest(string $url, array $data, ?string $id = null): string
    {
        $item = $this->makeRequest($url, $data, $id);
        if (!$item->id) {
            throw new \Exception('Item was not created');
        }
        
        return $item->id;
    }
    
    public function createProduct(array $data, ?string $id = null): string
    {
        return $this->makeCreateRequest('v1/catalogs/products', $data, $id);
    }
    
    public function createPlan(array $data, ?string $id = null): string
    {
        return $this->makeCreateRequest('v1/billing/plans', $data, $id);
    }
    
    public function createSubscription(array $data, ?string $id = null): string
    {
        return $this->makeCreateRequest('v1/billing/subscriptions', $data, $id);
    }
    
    public function createWebhook(array $data, ?string $id = null): string
    {
        return $this->makeCreateRequest('v1/notifications/webhooks', $data, $id);
    }
    
    public function createOrder(array $data, ?string $id = null): object
    {
        return $this->makeRequest('v2/checkout/orders', $data, $id);
    }
    
    public function capturePayment(string $order_id): object
    {
        return $this->makeRequest('v2/checkout/orders/' . $order_id . '/capture', []);
    }
}
