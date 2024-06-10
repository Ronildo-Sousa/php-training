<?php

namespace Ronildo\Testing\DesignPatterns\Strategy\Before;

use Exception;

class Order
{
    public function __construct(
        public array $itens
    )
    {}

    public function pay(string $paymentMethod): string
    {
        // in this case, for every new payment method we have to modify the Order class
        // with Strategy we can sove this problem

        if ($paymentMethod === 'PIX') {
            // do some logic here...
            return 'Order paid successfully';
        } else if ($paymentMethod === 'CREDIT_CARD') {
            // do some logic here...
            return 'Order paid successfully';
        } else {
            throw new Exception('Payment method not found');
        }
    }
}
