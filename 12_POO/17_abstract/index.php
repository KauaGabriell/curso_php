<?php
abstract class Payment
{
    abstract public function process();
}

class PagSeguro extends Payment
{
    private int|float $tax = 0;
    private int|float $value = 0;

    public function setTax() {

    }

    public function setValue() {

    }

    public function process() {

    }
}

interface PaymentInterface{
    public function getValue();
}