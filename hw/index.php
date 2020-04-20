<?php
include 'autoload.php';

$b = new B;

echo $b
    ->innerText('Hello World')
    ->HTML();

echo "<br>";

$i = new I;
echo $i
    ->innerText('Hello World')
    ->HTML();

echo "<br>";

$u = new U;
echo $u
    ->innerText('Hello World')
    ->HTML();

echo "<br>";

$ol = new OL;
echo $ol
    ->text([
        "Январь", "Февраль", "Март",
        "Апрель", "Май", "Июнь", "Июль",
        "Август", "Сентябрь"
    ])
    ->HTML();
echo "<br>";

$ul = new UL;
echo $ul
    ->text([
        "Январь", "Февраль", "Март",
        "Апрель", "Май", "Июнь",
        "Июль", "Август", "Сентябрь"
    ])
    ->HTML();
echo "<br>";
$input = new Input();

echo $input->open(['action' => 'ind.php', 'method' => 'POST']);

echo $input->input1(['type' => 'text', 'placeholder' => 'Name', 'name' => 'name']);
echo "<br>";
echo $input->input1(['type' => 'text', 'placeholder' => 'Surname', 'name' => 'surname']);


echo "<br>";

$textarea = new Textarea;

echo $textarea->textareaa(['name' => 're', 'id' => 'e', 'cols' => 100, 'rows' => 10]);

echo "<br>";

$select = new Select;

$select->arselect(['name' => 'select', 'id' => '']);
$select->aroption(['value' => '']);
$select->option(["AAA", "BBB", "CCC","DDD"]);
echo $select->select_();

echo $input->input1(['type' => 'submit', 'value' => 'ok']);

echo $select->close();
