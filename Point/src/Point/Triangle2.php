<?php

namespace Point;

class Triangle2
{
    protected $pointA;
    protected $pointB;
    protected $pointC;

    public function setPointA(Point $pointA)
    {
        $this->pointA = $pointA;
        return $this;
    }
    public function setPointB(Point $pointB)
    {
        $this->pointB = $pointB;
        return $this;
    }
    public function setPointC(Point $pointC)
    {
        $this->pointC =$pointC;
        return $this;
    }
    public function getPerimeter()
    {
        $AB = $this->pointA->getX() - $this->pointB->getX();
        $BC = $this->pointB->getX() - $this->pointC->getX();
        $CA = $this->pointC->getY() - $this->pointA->getY();
        
        return $AB + $BC + $CA;
    }
}