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

$u = new U();

echo $u
    ->setInnerText('Hello World')
    ->html();

$ul = new UL();

echo $ul
    ->setId('sp2')
    ->setInnerData([1, 2, 3])
    ->setType("circle")
    ->html();

$ol = new OL();

echo $ol
    ->setId('sp2')
    ->setInnerData(["a", "b", "c"])
    ->setType("asd")
    ->html();
