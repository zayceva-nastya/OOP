<?php

namespace Calculator;

class Calculator implements CalculatorInterface
{
    private $num;

    use Mull, Sum, Sqrt, Sin;

    public function setNum(int $num)
    {
        $this->num = $num;
        return $this;
    }

    public function getNum()
    {
        return $this->num;
    }
}
