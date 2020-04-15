<?php
include 'autoload.php';

$class = new Triangle(
    $_POST['a'],
$_POST['b']);

echo $class->{$_POST['trg']}();