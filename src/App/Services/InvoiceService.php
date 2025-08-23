<?php
declare(strict_types=1);

namespace App\Services;

class InvoiceService
{
    public function __construct(
     protected SalesTaxService $salesTaxService,
     protected PaymentGatewayService $gatewayService,
     protected EmailService $emailService
    )
    {
        
    }

    public function process(array $customer, float $amount): bool
    {
        //calculate sales tax
        $tax = $this->salesTaxService->calculate($amount, $customer);
        //process invoice
        if(!$this->gatewayService->charge($amount, $customer)){
            return false;
        };
        //send receipt
        $this->emailService->send($customer, 'receipt');
        return true;
    }
}