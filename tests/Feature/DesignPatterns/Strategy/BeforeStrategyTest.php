<?php

use Ronildo\Testing\DesignPatterns\Strategy\Before\Order;

test('it should be able to pay orders with PIX method', function () {
    $itens = [
        'rice' => 2,
        'meat' => 4,
    ];

    $order = new Order($itens);
    $response = $order->pay('PIX');

    expect($response)->toBe('Order paid successfully');
});

test('it should be able to pay orders with Credit Card method', function () {
    $itens = [
        'rice' => 1,
        'meat' => 2,
    ];

    $order = new Order($itens);
    $response = $order->pay('CREDIT_CARD');

    expect($response)->toBe('Order paid successfully');
});