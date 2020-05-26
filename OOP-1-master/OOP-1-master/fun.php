<?php
// старый способ
function div1($a, $b)
{
    return $a / $b;
}

// новый способо
function div2(int $a, int $b): float
{
    return $a / $b;
}