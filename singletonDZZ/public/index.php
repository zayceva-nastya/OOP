<?php

include '../Vendor/autoload.php';

use App\Pattern\MyClass;
use App\Pattern\Singleton;
use App\AbstractPoint;
use App\Point;



$obj = MyClass::createInstance();

// echo $obj->hello();
$obj->increase();
$obj->increase();

echo $obj->getCounter() . "<br>";

$obj2 = MyClass::createInstance();

echo $obj2->getCounter() . "<br>";

$obj3 = MyClass::createInstance();
$obj3->increase();
$obj3->increase();

echo $obj3->getCounter() . "<br>";

$obj4 = MyClass::createInstance();

echo $obj4->getCounter() . "<br>";

$point = Point::createPoint();

$point->setX(4);
$point->setY(7);

echo "x=" . $point->getX() . "\n";
echo "y=" . $point->getY() . "<br>";

$point2 = Point::createPoint();
echo "x=" . $point2->getX() . "\n";
echo "y=" . $point2->getY() . "<br>";


$point3 = Point::createPoint();
$point3->setX(78);
echo "x=" . $point3->getX() . "\n";
echo "y=" . $point3->getY() . "<br>";
