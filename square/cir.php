<?php
include 'autoload.php';

$class = new Circle ($_POST['a']);

echo $class->{$_POST['cr']}();