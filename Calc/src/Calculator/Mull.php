<?php

namespace Calculator;

trait Mull
{
    /**
     * умножение
     * @param $a
     * @param $b
     * @return float
     */
    public function mull(int $a, int $b)

    {
        return $a * $b;
    }

    /**
     * деление
     * @param int $a
     * @param int $b
     * @return float
     */
    public function del(int $a, int $b)
    {
        return  $a / $b;
    }
    
}
