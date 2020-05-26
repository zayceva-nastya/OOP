<?php

namespace Calculator;

interface CalculatorInterface
{
    public function mull(int $a, int $b);

    public function del(int $a, int $b);

    public function sum(int $a, int $b);

    public function diff(int $a, int $b);

}