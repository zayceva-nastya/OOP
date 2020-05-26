<?php

namespace Calculator;

trait Sqrt
{
public function sqrt():object
{
    $this->num = sqrt($this->num);
    return $this;
}

public function power(int $a = 2):object
{
    $this->num = $this->num**$a;
    return $this;
}

}