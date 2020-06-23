<?php

namespace HWArr;

class Arr
{
    protected $array;

    public function __construct(array $array = [])
    {
        $this->setArray($array);
    }


    public function setArray(array $array)
    {
        $this->array = $array;
        return $array;
    }

    public function minArray()
    {
        return min($this->array);
    }


    public function maxArray()
    {
        return max($this->array);
    }
    // public function  value_max()
    // {
    //     $buf = $this->array[0];

    //     for ($i = 1; $i <= count($this->array); $i++) {
    //         if ($this->array[$i] > $buf) {
    //             $buf = $this->array[$i];
    //         }
    //     }

    //     return $buf;
    // }
    public function sumArray()
    {
        return array_sum($this->array);
    }
    public function srArray()
    {
        return array_sum($this->array) / count($this->array);
    }
}
