<?php
namespace Ronildo\Testing\DesignPatterns\Strategy\After;

use Exception;
use Ronildo\Testing\DesignPatterns\Strategy\After\Interfaces\PaymentMethod;

class CreditCardMethod implements PaymentMethod
{
    public function pay(array $itens): string
    {
        try {
            // do some logic here...
            return 'Order paid successfully';
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}