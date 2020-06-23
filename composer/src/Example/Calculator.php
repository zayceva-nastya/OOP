<?php

namespace App\Example;

class Calculator
{
    protected $a;
    protected $b;

    public function setA($a)
    {
        $this->a = $a;
        return $this;
    }
    public function setB($b)
    {
        $this->b = $b;
        return $this;
    }
    public function sum()
    {
        return $this->a + $this->b;
    }
}
