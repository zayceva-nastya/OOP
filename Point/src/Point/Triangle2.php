<?php

namespace Point;

class Triangle2
{
    protected $pointA;
    protected $pointB;
    protected $pointC;

    public function setPointA(Point $pointA): Triangle2
    {
        $this->pointA = $pointA;
        return $this;
    }
    public function setPointB(Point $pointB): Triangle2
    {
        $this->pointB = $pointB;
        return $this;
    }
    public function setPointC(Point $pointC)
    {
        $this->pointC = $pointC;
        return $this;
    }
    public function getPerimeter(): float
    {
        if (is_object($this->pointA) && is_object($this->pointB) && is_object($this->pointC)) {
            $AB = abs($this->pointA->getX() - $this->pointB->getX());
            $BC = abs($this->pointB->getX() - $this->pointC->getX());
            $CA = abs($this->pointC->getY() - $this->pointA->getY());
            $perimeter = $AB + $BC + $CA;
        }else{
            $perimeter = -1;
        }

        return $perimeter;
    }
}
