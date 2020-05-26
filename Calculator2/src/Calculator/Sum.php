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
    public function sum(int $a):object
    {
        $this->num = $this->num + $a;
        return $this;
    }

    /**
     * разница
     * @param int $a
     * @param int $b
     * @return int
     */
    public function diff(int $a):object
    {
        $this->num = $this->num - $a;
        return $this;
    }
}
