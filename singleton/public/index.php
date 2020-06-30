<?php

include '../Vendor/autoload.php';

use App\Pattern\MyClass;
use App\Pattern\Singleton;

// $my = new MyClass();

$obj = MyClass::createInstance();
echo $obj->hello();
$obj->increase();
$obj->increase();
echo $obj->getCounter();

$obj2 = MyClass::createInstance();

echo $obj2->getCounter();
