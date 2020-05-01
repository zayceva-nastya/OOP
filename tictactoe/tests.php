<?php

include 'autoload.php';

function test($str1, $str2, $text ='')
{
    if ($str1 == $str2) {
        echo "Тест $text пройден\n";
    } else {
        echo "Тест $text не пройден\n $str1 == $str2\n";
    }
}

$area = new Area();

test(
    "<table><tr><td></td><td></td></tr><tr><td></td><td></td></tr></table>",
    $area->setMap([[Null,Null],[Null,Null]])->html(),
    "Area"
);

test(
    "<table><tr><td>❌</td><td></td></tr><tr><td></td><td>⭕️</td></tr></table>",
    $area->setMap([[1,Null],[Null,0]])->html(),
    "Area"
);

test(
    "<table><tr><td>❌</td><td></td><td></td></tr><tr><td></td><td>❌</td><td>⭕️</td></tr><tr><td></td><td>⭕️</td><td>❌</td></tr></table>",
    $area->setMap([[1,Null,Null],[Null,1,0],[Null,0,1]])->html(),
    "Area"
);