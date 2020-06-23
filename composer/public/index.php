<?php
include '../vendor/autoload.php';

use App\Example\Calculator;

$calc = new Calculator();

echo $calc->setA(8)->setB(4)->sum();
