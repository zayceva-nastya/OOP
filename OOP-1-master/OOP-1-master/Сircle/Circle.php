<?php

class Circle
{
    private $a; // поля

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function perimetr()
    {
        return $this->a * (2 * pi());
    }

    public function area()
    {
        return ($this->a ** 2) * pi();
    }
}