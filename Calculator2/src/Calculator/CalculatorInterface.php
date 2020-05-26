<?php

namespace Calculator;

interface CalculatorInterface
{
    public function mull(int $a):object;

    public function del(int $a):object;

    public function sum(int $a):object;

    public function diff(int $a):object;

    public function sqrt():object;

    public function power(int $a):object;

    public function sin():object;

    public function cos():object;

    public function mod():object;

    public function log():object;

}
