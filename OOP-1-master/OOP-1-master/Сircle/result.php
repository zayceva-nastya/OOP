<?php
include("auto.php");

$result  = new Circle(
    $_POST['a']
);;
// echo $result->perimetr();
// echo "\n";
// echo $result->area();

echo $result->{$_POST['op']}();