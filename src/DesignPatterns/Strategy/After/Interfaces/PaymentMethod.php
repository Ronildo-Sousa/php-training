<?php
namespace Ronildo\Testing\DesignPatterns\Strategy\After\Interfaces;

interface PaymentMethod
{
    public function pay(array $itens): string;
}