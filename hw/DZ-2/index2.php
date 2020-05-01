<?php

include 'autoload.php';

$b = new B('papapa');

echo $b
    ->setInnerText('Hello World')
    ->setClass("color")
    ->setId("12345")
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


$select = new Select();

echo $select
    ->setId('id1')
    ->setName('select')
    ->setInnerData([
        "mul" => "*",
        "div" => "/",
        "plus" => "+",
        "minus" => "-"
    ])
    ->html();

$form = new Form();

echo $form
    ->setAction('1.php')
    ->setContent((new Input())->setValue('Admin')->html() .
            (new Input())->setType('password')->setValue('123')->html() .
            (new Input())->setType('submit')->setValue('okey')->html()
    )
    ->html();

echo $form
    ->setAction('1.php')
    ->setContent((new Input())->setValue(12)->html())
    ->addContent((new Select())
        ->setInnerData([
            "mul" => "*",
            "div" => "/",
            "plus" => "+",
            "minus" => "-"
        ])
        ->html())
    ->addContent((new Input())->setValue(12)->html())
    ->addContent((new Input())->setType('submit')->setValue('okey')->html())
    ->html();

$img = new Img();

echo $img
    ->src('97bb2c7d878f04769cc9543bfabaa952.jpg')
    ->html();

$hr = new Hr();

echo $hr
    ->html();

$br = new Br();

echo $br
    ->html();

$h = new H();

echo $h
    ->setLevel(1)
    ->setId('123')
    ->setClass('header')
    ->setStyle('qwerty')
    ->setInnerText('header')
    ->html();
