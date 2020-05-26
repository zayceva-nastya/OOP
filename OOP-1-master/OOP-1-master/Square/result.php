<?php
include("auto.php");

$result  = new Square(
    $_POST['a'],
    $_POST['b']
);
// echo $result->perimetr();
// echo "\n";
// echo $result->area();

echo $result->{$_POST['op']}();