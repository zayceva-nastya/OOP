<?php

namespace Point;

class CheckCube extends Cube
{
    public function setEdge1($edge1)
    {
        parent::setEdge1($edge1);
        $this->check();
        return $this;
    }
    public function setEdge2($edge2)
    {
        parent::setEdge2($edge2);
        $this->check();
        return $this;
    }
    public function setEdge3($edge3)
    {
        parent::setEdge3($edge3);
        $this->check();
        return $this;
    }

    protected function check()
    {
        // print_r($this->edge1);
        // print_r($this->edge2);
        // print_r($this->edge3);

        if ($this->edge1 === $this->edge2 && $this->edge1 === $this->edge3 && $this->edge1 != 0) {
            echo "It is cube";
        }
    }
}
