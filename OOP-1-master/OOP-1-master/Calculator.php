<?php

// чертеж
class Calculator
{
    private $a; // поля
    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function sum()
    {
        return $this->a + $this->b;
    }
    public function mul()
    {
        return $this->a * $this->b;
    }

    public function dif()
    {
        return $this->a - $this->b;
    }
    public function div()
    {
        return $this->a / $this->b;
    }
}