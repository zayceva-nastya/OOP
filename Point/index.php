<?php
include 'src/autoload.php';


use Point\Point;
use Point\Line;
use Point\Rectangle;
use Point\Triangle;
use Point\Triangle2;
use Point\Triangle3;
use Point\Square;
use Point\Cube;
use Point\CheckCube;

$startPoint = new Point();
$endPoint = new Point();

// $startPoint
//     ->setX(2)
//     ->setY(3);

// $endPoint
//     ->setX(5)
//     ->setY(1);
// $startPoint
//     ->setX(3)
//     ->setY(3);

// $endPoint
//     ->setX(1)
//     ->setY(1);


// $line = new Line();

// $line
//     ->setStartPoint($startPoint)
//     ->setEndPoint($endPoint);


// echo $line->getLength() . "<br>";

// $rect = new Rectangle();

// $rect
//     ->setStartPoint($startPoint)
//     ->setEndPoint($endPoint);

// echo $rect->getArea() . "<br>";
// echo $rect->getPerimeter() . "<br>";

// $tr = new Triangle(
//     new Point(3, 3),
//     new Point(1, 1)
// );

// echo $tr->getPerimeter() . "<br>";
// echo $tr->getArea();

// $tr2 = new Triangle2();

// $pointA = new Point(1, 2);
// $pointB = new Point(5, 0);
// $pointC = new Point(0, 0);

// $tr2
//     ->setPointA($pointA)
//     ->setPointB($pointB)
//     ->setPointC($pointC);

// echo $tr2->getPerimeter();

// $tr3 = new Triangle3();

// $tr3->setPointA($pointA)
//     ->setPointB($pointB)
//     ->setPointC($pointC);

// echo $tr3->getPerimeter();

// $rect = new Rectangle();

// $rect
//     ->setStartPoint($startPoint)
//     ->setEndPoint($endPoint);

// echo $rect->getArea() . "<br>";
// echo $rect->getPerimeter() . "<br>";

// $square = new Square();

// $square
//     ->setStartPoint($startPoint)
//     ->setEndPoint($endPoint);

//    echo $square->checkSquare();
//    echo $square->getArea();
//    echo $square->getPerimeter()."<br>";


$cube2 = new CheckCube();
$cube2
    ->setEdge1(7)
    ->setEdge2(7)
    ->setEdge3(7);
// echo $cube2->check();
