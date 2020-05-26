<?php
include("auto.php");

$result  = new Rectangle(
    $_POST['a'],
    $_POST['b']
);;
// echo $result->perimetr();
// echo "\n";
// echo $result->area();

echo $result->{$_POST['op']}();