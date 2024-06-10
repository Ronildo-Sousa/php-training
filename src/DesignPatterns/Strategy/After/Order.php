<?php
namespace Ronildo\Testing\DesignPatterns\Strategy\After;

use Ronildo\Testing\DesignPatterns\Strategy\After\Interfaces\PaymentMethod;

class Order
{
    public function __construct(
        public array $itens,
    )
    {}
    
    public function pay(PaymentMethod $paymentMethod): string
    {
        // using the Strategy, if we have to add a new payment method
        // we dont need to modify the Order class
        // just add a new class that implements the PaymentMethod interface
        return $paymentMethod->pay($this->itens);
    }
}