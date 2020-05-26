<?php

namespace Calculator;

trait Sin
{
    public function sin():object
    {
        $this->num = sin(deg2rad($this->num));
        return $this;
    }
    public function cos():object
    {
        $this->num = cos($this->num);
        return $this;
    }
    public function mod():object
    {
        $this->num = abs($this->num);
        return $this;
    }
    public function log():object
    {
        $this->num = log10($this->num);
        return $this;
    }
   
}
