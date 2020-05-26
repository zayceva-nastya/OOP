<?php
include 'autoload.php';

function test($str1, $str2, $text = '')
{
    if ($str1 === $str2) {
        echo "Тест $text пройден\n";
    } else {
        echo "Тест $text не пройден \n $str1 == $str2\n";
    }
}

$tictac = new Ai();


// test(
//     [[null, null, null], [null, null, null], [null, null, null]],
//     $tictac->getMap(),
//    "Tictac"
// );

// test(
//     [[1, 0, null], [null, 1, 0], [null, null, 1]],
//     $tictac->putCross(0, 0)->putNull(0, 1)->putCross(1, 1)->putNull(1, 2)->putCross(2, 2)->getMap(),
//     "Tictac"
// );


// test(
//     [[0, 0, 0], [null, 1, null], [null, null, 1]],
//     $tictac->initMap(3)->putNull(0, 0)->putCross(1, 1)->putNull(0, 1)->putCross(2, 2)->putNull(0, 2)->getMap(),
//     "Tictac"
// );



// test(
//     0,
//     $tictac->initMap(3)->putNull(0, 0)->putCross(1, 1)->putNull(0, 1)->putCross(2, 2)->putNull(0, 2)->checWin(),
//     "Tictac"
// );


// test(
//     1,
//     $tictac->initMap(3)->putCross(0, 0)->putNull(1, 1)->putCross(0, 1)->putNull(2, 2)->putCross(0, 2)->checWin(),
//     "Tictac"
// );


// test(
//     1,
//     $tictac->initMap(3)->putCross(2, 0)->putNull(1, 1)->putCross(2, 1)->putNull(0, 2)->putCross(2, 2)->checWin(),
//     "Tictac"
// );


// test(
//     1,
//     $tictac->initMap(3)->putCross(0, 0)->putNull(1, 1)->putCross(1, 0)->putNull(0, 2)->putCross(2, 0)->checWin(),
//     "Tictac"
// );


// test(
//     0,
//     $tictac->initMap(3)->putNull(0, 0)->putCross(1, 1)->putNull(1, 0)->putCross(0, 2)->putNull(2, 0)->checWin(),
//     "Tictac"
// );


// test(
//     null,
//     $tictac->initMap(3)->putNull(0, 0)->putCross(1, 1)->putNull(1, 0)->putCross(0, 2)->checWin(),
//    "Tictac"
// );

test(
    1,
    $tictac->setMap([
        [0, 0, 1],
        [1, 1, 0],
        [1, 1, 0]
    ])->checWin(),
    "Tictac"
);

test(
    1,
    $tictac->setMap([
        [1, 0, 1],
        [0, 1, 0],
        [0, 0, 1]
    ])->checWin(),
    "Tictac"
);


test(
    1,
    $tictac->setMap([
        [0, 0, 1],
        [1, 0, 0],
        [1, 1, 1]
    ])->checWin(),
    "Tictac"
);

test(
    1,
    $tictac->setMap([
        [1, 0, 1],
        [1, 0, 0],
        [1, 1, 0]
    ])->checWin(),
    "Tictac"
);


test(
    0,
    $tictac->setMap([
        [0, 0, 0],
        [1, 0, 1],
        [1, 1, 0]
    ])->checWin(),
    "Tictac"
);


test(
    0,
    $tictac->setMap([
        [0, 1, 0],
        [1, 0, 0],
        [1, 1, 0]
    ])->checWin(),
    "Tictac"
);



test(
    0,
    $tictac->setMap([
        [1, 0, 0],
        [1, 0, 1],
        [0, 1, 0]
    ])->checWin(),
    "Tictac"
);


test(
    0,
    $tictac->setMap([
        [0, 1, 0],
        [1, 0, 1],
        [1, 1, 0]
    ])->checWin(),
    "Tictac"
);



test(
    null,
    $tictac->setMap([
        [1, 1, 0],
        [0, 0, 1],
        [1, 0, 0]
    ])->checWin(),
    "Tictac"
);



print_r($tictac->setMap([
    [null, null, null],
    [null, null, null],
    [null, null, null]

])

    ->putRandCross()
    ->putRandNull()
    ->putRandCross()
    ->putRandNull()
    ->putRandCross()
    ->putRandNull()
    ->putRandCross()
    ->putRandNull()
    ->putRandCross()
    ->getMap());


echo $tictac->checWin();