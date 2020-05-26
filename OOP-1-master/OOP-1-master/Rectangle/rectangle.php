<?php

class Rectangle
{
    private $a;
    private $b; // поля

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function perimetr()
    {
        return ($this->a + $this->b) * 2;
    }

    public function area()
    {
        return $this->a * $this->b;
    }
}