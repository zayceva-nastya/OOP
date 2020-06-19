<?php

namespace Point;

 class Cube
{
    protected $edge1;
    protected $edge2;
    protected $edge3;

    public function __construct(int $edge1 = 0, int  $edge2 = 0, int  $edge3 = 0)
    {
        $this->setEdge1($edge1);
        $this->setEdge2($edge2);
        $this->setEdge3($edge3);
    }

    public function setEdge1($edge1)
    {
        $this->edge1 = $edge1;
        return $this;
    }
    public function setEdge2($edge2)
    {
        $this->edge2 = $edge2;
        return $this;
    }
    public function setEdge3($edge3)
    {
        $this->edge3 = $edge3;
        return $this;
    }
}
