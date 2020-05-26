<?php
include 'autoload.php';

$a = new Ahref();

//<a href='https://www.tut.by' class='btn' id='b1' style='color:red'>Текст</a>
echo $a->clear()
    ->href('https://www.tut.by')
    ->innerText('Текст')
    ->class('btn')
    ->id('b1')
    ->style('color:red')
    ->HTML();

// $a->clear();
// $a->href('https://www.tut.by');
// $a->innerText('Текст');
// $a->class('btn');
// $a->id('b1');
// $a->style('color:red');
// echo $a->HTML();

echo "<br>";

$h = new H(1);

echo $h
    // ->clear()
    // ->level()
    ->innerText('Header')
    ->class('btn')
    ->id('b1')
    ->style('color:red')
    ->HTML();


echo "<br>";

$table = new Table();
echo $table->clear()
    ->style('border: 1px solid black')
    ->data([
        [1, 2, 3],
        [4, 5, 6]
    ])
    ->HTML();

echo "<br>";

$b = new B();
echo $b
    ->innerText('Привет')
    ->HTML();

echo "<br>";

$i = new I();
echo $i
    ->innerText('Привет')
    ->HTML();

echo "<br>";

$u = new U();
echo $u
    ->innerText('Привет')
    ->HTML();

echo "<br>";

$ol = new OL();
echo $ol
    ->text([
        'Один', 'Два'
    ])
    ->HTML();

echo "<br>";

$ul = new UL();
echo $ul
    ->text([
        'Один', 'Два'
    ])
    ->HTML();

echo "<br>";

$select = new SELECT();
echo $select
    ->text([
        'Один', 'Два'
    ])
    ->HTML();