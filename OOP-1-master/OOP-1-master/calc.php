<?php
include("Calculator.php");

//создаем экземпляр класса
$calc = new Calculator( // объект класса калькулятор
    $_POST['a'],
    $_POST['b']
);

echo $calc->{$_POST['op']}(); // {$_POST['op']} ловим какое значение выбрал пользователь