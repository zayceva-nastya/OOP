<?php

function sum1(...$paramas)
{
    $s = 0;
    foreach ($paramas as $value) {
        $s += $value;
    }
    return $s;
}

function sum2(int ...$paramas)
{
    $s = 0;
    foreach ($paramas as $value) {
        $s += $value;
    }
    return $s;
}