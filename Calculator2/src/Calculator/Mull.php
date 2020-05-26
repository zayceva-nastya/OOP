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
    public function mull(int $a):object

    {
        $this->num =  $a * $this->num;
         return $this;
    }

    /**
     * деление
     * @param int $a
     * @param int $b
     * @return float
     */
    public function del(int $a):object
    {
      $this->num =  $this->num/$a;
       return $this;
    }
    
}
