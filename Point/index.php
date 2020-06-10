<?php
include 'src/autoload.php';

use Point\Point;
use Point\Line;
use Point\Rectangle;
use Point\Triangle;
use Point\Triangle2;

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

// echo $rect->getArea() . "<br>";
// echo $rect->getPerimeter() . "<br>";

// $tr = new Triangle(
//     new Point(3, 3),
//     new Point(1, 1)
// );

// echo $tr->getPerimeter() . "<br>";
// echo $tr->getArea();

$tr2 = new Triangle2();

$pointA = new Point(8,2);
$pointB =new Point(5,3);
$pointC = new Point(3,5);

$tr2
->setPointA($pointA)
->setPointB($pointB)
->setPointC($pointC);

echo $tr2->getPerimeter();
