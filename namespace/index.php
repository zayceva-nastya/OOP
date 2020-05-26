<?php
include 'src/autoload.php';

use App\Class1;
use App\Model\Class1 as ModelClass;

$obj1 = new Class1();

echo $obj1->hello();

$obj2 = new App\Class1();

echo $obj2->hello();

$obj3 = new ModelClass();
echo $obj3->hello();

