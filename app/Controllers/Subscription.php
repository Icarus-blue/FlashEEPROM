<?php

namespace App\Controllers;

class Subscription extends BaseController
{
    private $configModel;
    private $hookModel;
    private $paymentModel;
    
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        
        $this->configModel = new \App\Models\ConfigModel();
        $this->hookModel = new \App\Models\PaypalHookModel();
        $this->paymentModel = new \App\Models\PaymentModel();
    }
    
    public function index()
    {
        if (!$this->isUserLoggedIn()) {
            return $this->forbidden();
        }
        
        if ($this->user->canManageAllUsers()) {
            return $this->pageNotFound();
        }
        
        $client_id = $this->configModel->getByName('paypal_client_id');
        $paypal = \App\Payment\Payment::getPayment('paypal', $this->configModel);
        $plan = $paypal->getPlan();
        $payments = $this->paymentModel->getForUser($this->user);
        
        $this->renderDefaultLayout('user-subscription', [
            'client_id' => $client_id,
            'plan' => $plan,
            'payments' => $payments
        ]);
    }
    
    public function order()
    {
        if (!$this->isUserLoggedIn()) {
            return $this->forbidden();
        }
        
        if ($this->user->canManageAllUsers()) {
            return $this->pageNotFound();
        }
        
        $paypal = \App\Payment\Payment::getPayment('paypal', $this->configModel);
        die(json_encode($paypal->createOrder($this->user)));
    }
    
    public function capture(string $order_id)
    {
        if (!$this->isUserLoggedIn()) {
            return $this->forbidden();
        }
        
        if ($this->user->canManageAllUsers()) {
            return $this->pageNotFound();
        }
        
         $id = $order_id;
         if ($this->paymentModel->getByPaypalId($id)) {
             return;
         }
        
        $paypal = \App\Payment\Payment::getPayment('paypal', $this->configModel);
        $result = $paypal->capturePayment($order_id);
        
        if ($result->status != 'COMPLETED') {
            return;
        }
        
        $this->paymentModel->register($this->user, 5.60, $order_id);
        $this->userModel->expandSubscription($this->user, 30, 300);
        die(json_encode($result));
    }
    
    public function pdf(int $paymentid)
    {
        if (!$this->isUserLoggedIn()) {
            return $this->forbidden();
        }
        
        $payment = $this->paymentModel->getById($paymentid);
        if (!$payment) {
            return $this->pageNotFound();
        }
        
        if ($payment->userid != $this->user->userid) {
            return $this->pageNotFound();
        }
        
        $pdf = new \TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        
        $pdf->SetCreator('Flasheeprom');
        $pdf->SetAuthor('Flasheeprom');
        $pdf->SetTitle('Factura #' . $paymentid);
        $pdf->SetSubject('Factura' . $paymentid);
        $pdf->SetKeywords('pdf, flasheeprom, factura');
        
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
        $pdf->SetMargins(PDF_MARGIN_LEFT, 10, PDF_MARGIN_RIGHT);

        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        $pdf->AddPage();
        
        $pdf->writeHTML(view('invoice', [
            'payment' => $payment,
            'user' => $this->user
        ]));
        
        $pdf->Output('factura' . $paymentid . '.pdf', 'I');
        die();
    }
    
    public function webhook()
    {
        
    }
}
