<?php
include 'src/autoload.php';

use Point\Point;
use Point\Line;
use Point\Rectangle;
use Point\Triangle;
use Point\Triangle2;
use Point\Triangle3;

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

$pointA = new Point(1,2);
$pointB =new Point(5,0);
$pointC = new Point(0,0);

$tr2
->setPointA($pointA)
->setPointB($pointB)
->setPointC($pointC);

echo $tr2->getPerimeter();
$tr3 = new Triangle3();
$tr3->setPointA($pointA)
->setPointB($pointB)
->setPointC($pointC);
echo $tr3->getPerimeter();

