<?php

include 'autoload.php';

$b = new B();

echo $b
    ->setInnerText('Hello World')
    ->html();

$i = new I();

echo $i
    ->setInnerText('Hello World')
    ->html();
