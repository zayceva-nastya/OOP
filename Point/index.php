<?php
include 'src/autoload.php';

use Point\Point;
use Point\Line;
use Point\Rectangle;
use Point\Triangle;

$startPoint = new Point();
$endPoint = new Point();

// $startPoint
//     ->setX(2)
//     ->setY(3);

// $endPoint
//     ->setX(5)
//     ->setY(1);
$startPoint
    ->setX(3)
    ->setY(3);

$endPoint
    ->setX(1)
    ->setY(1);


$line = new Line();

$line
    ->setStartPoint($startPoint)
    ->setEndPoint($endPoint);


// echo $line->getLength() . "<br>";

$rect = new Rectangle();

$rect
    ->setStartPoint($startPoint)
    ->setEndPoint($endPoint);

echo $rect->getArea() . "<br>";
echo $rect->getPerimeter() . "<br>";

$tr = new Triangle(
    new Point(3, 3),
    new Point(1, 1)
);

echo $tr->getPerimeter() . "<br>";
echo $tr->getArea();
