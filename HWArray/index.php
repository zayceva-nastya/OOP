<?php

include "src\autoload.php";

use HWArr\Arr;
use HWArr\Money;

$arr = new Arr([5, 7, 9, 10, 15, 4, 20, 69, 100, 1]);

echo $arr->minArray() . "<br>";
echo $arr->maxArray() . "<br>";
// echo $arr->value_max() . "<br>";
echo $arr->sumArray() . "<br>";
echo $arr->srArray() . "<br>";

$money = new Money(1000);
echo $money->toUsd(2.39)."<br>";
echo $money->toRub(3.37)."<br>";
echo $money->toEur(2.8);

// echo $money
//     ->setMoney(2400)
//     ->setСourse(1)
//     ->val() . "<br>";

// echo $money->setСourseRub(2)->rub() . "<br>";
// echo $money->setMoney(500)->setСourseUsd(2.39)->Usd();
