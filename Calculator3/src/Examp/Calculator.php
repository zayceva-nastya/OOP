<?php
namespace App\Examp;

class Calculator implements CalculatorInterface
{

    public function sum(float $a,float $b):float
    {
        return $a+$b;
    }
}