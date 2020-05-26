<?php
include 'autoload.php';

$tic = new Tictac(3);
// $tic->initMap(5);
// print_r($tic->map);
$tic->putCross(2, 2);
// print_r($tic->map);
$tic->putNull(1, 1);
print_r($tic->map);

$table = new Table();

echo $table
    ->style('border: 1px solid black')
    ->data($tic->map)
    ->html();