<?php
include 'autoload.php';

$tic = new Tictac(3);
$tic->initMap(3);
print_r($tic->map);
// $tic->putCross(2, 2);

// $tic->putNull(1, 1);
// $tic->putCross(2, 1);
// $tic->putNull(0, 0);
// $tic->putCross(0, 1);
// $tic->putNull(0, 2);
// $tic->putNull(1, 0);
$tic->putCross(2, 2);



$tic->putRand(2);

echo "<pre>";
print_r($tic->map);

$area = new Area();

echo $area
    ->style('border: 1px solid black','height:20px','weight:20px')
    ->show($tic->map)
    ->html();


// $table = new Table();

// echo $table

//     ->style('border:1px solid black', 'padding:10px')

//     ->data($tic->map)

//     ->html();
