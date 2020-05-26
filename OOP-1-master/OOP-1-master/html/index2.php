<?php
error_reporting(E_ALL ^ E_DEPRECATED);

include 'autoload.php';

$b = new B();

echo $b
    ->setInnerText('Hello World')
    ->html();

echo "<br>";

$i = new I();

echo $i
    ->setInnerText('Hello World')
    ->html();

echo "<br>";

$u = new U();

echo $u
    ->setInnerText('Hello World')
    ->html();

echo "<br>";

$ul = new UL();

echo $ul
    ->setId('sp2')
    ->setInnerData([1, 2, 3])
    ->setType("circle")
    ->html();

echo "<br>";

$ol = new OL();

echo $ol
    ->setId('sp2')
    ->setInnerData(["a", "b", "c"])
    ->setType("asd")
    ->html();

echo "<br>";

// $form = new Form();

// echo $form
//     ->setAction("index2.php")
//     ->setMethod("POST")
//     ->html();

echo "<br>";

$select = new SELECT();

echo $select
    ->text([
        'Один', 'Два', 'Три'
    ])
    ->HTML();

echo "<br>";

$input = new Input();

echo $input
    ->setType('radio')
    ->HTML();


echo "<br>";

$input = new Input();

echo $input
    ->setValueType(['submit' => 'okey'])
    ->HTML();

echo "<br>";

$textarea = new Textarea();

echo $textarea
    ->rows("10")
    ->cols("20")
    ->html();

echo "<br>";

$form = new Form();

echo $form
    ->action("?")
    ->method("POST")
    ->html();