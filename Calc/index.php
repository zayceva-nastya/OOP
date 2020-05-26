<?php
include 'src/autoload.php';

use Calculator\Calculator;


$calc = new Calculator();

echo $calc->mull(3,2)."\n";
echo $calc->sum(3,2)."\n";
echo $calc->del(3,2)."\n";
echo $calc->diff(3,2)."\n";
// ->sum(7,7);
// ->diff(25,19);
// ->del(100,10);

