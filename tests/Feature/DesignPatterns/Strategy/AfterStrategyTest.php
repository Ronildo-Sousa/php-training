<?php

use Ronildo\Testing\DesignPatterns\Strategy\After\CreditCardMethod;
use Ronildo\Testing\DesignPatterns\Strategy\After\Order;
use Ronildo\Testing\DesignPatterns\Strategy\After\PixMethod;

test('it should be able to pay orders with PIX method', function () {
    $itens = [
        'rice' => 2,
        'meat' => 4,
    ];

    $order = new Order($itens);
    $response = $order->pay(new PixMethod);

    expect($response)->toBe('Order paid successfully');
});

test('it should be able to pay orders with Credit Card method', function () {
    $itens = [
        'rice' => 1,
        'meat' => 2,
    ];

    $order = new Order($itens);
    $response = $order->pay(new CreditCardMethod);

    expect($response)->toBe('Order paid successfully');
});