<?php

namespace Calculator;

trait Sum
{
    /**
     * сумма
     * @param $a
     * @param $b
     * @return mixed
     */
    public function sum(int $a, int $b)
    {
        return $a + $b;
    }

    /**
     * разница
     * @param int $a
     * @param int $b
     * @return int
     */
    public function diff(int $a, int $b)
    {
        return $a - $b;
    }
}
