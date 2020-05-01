<?php
include 'autoload.php';
function test($str1, $str2, $text = '')
{
    if ($str1 === $str2) {
        echo "Test $text yes";
    } else {
        echo "Test $text No";
    }
}

$img = new Img();

test(
    "<img  src='1.jpg'>",
    $img->src('1.jpg')->html(),
    "Img"
);

test(
    "<img  src='2.jpg' width='100' height='100'>",
    $img->src('2.jpg')->setWidth(100)->setHeight(100)->html(),
    "Img"
);

$br = new Br();

test(
    "<br>",
    $br->html(),
    "br"
);

