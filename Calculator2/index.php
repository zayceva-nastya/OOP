<?php
include 'src/autoload.php';

use Calculator\Calculator;


$calc = new Calculator();

echo $calc->setNum(10)->mull(10)->del(5)->getNum();

echo "<br>";

echo $calc->setNum(90)->sum(90)->diff(100)->getNum();

echo "<br>";

echo $calc->setNum(9)->sqrt()->sum(46)->sqrt()->power(3)->getNum();

echo "<br>";

echo $calc->setNum(60)->sin()->getNum();

echo "<br>";

echo $calc->setNum(60)->cos()->sum(90)->getNum();

echo "<br>";

echo $calc->setNum(-8)->mod()->getNum();

echo "<br>";

echo $calc->setNum(100)->log()->power(6)->sum(90)->getNum();






