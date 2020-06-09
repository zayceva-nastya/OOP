<?php

namespace Point;

class Line implements LineInterface
{
    protected $startPoint;
    protected $endPoint;

    public function setStartPoint(Point $startPoint): Line
    {
        $this->startPoint = $startPoint;
        return $this;
    }


    public function setEndPoint(Point $endPoint): Line
    {
        $this->endPoint = $endPoint;
        return $this;
    }

    public function getLength(): float
    {
        $a = $this->endPoint->getX() - $this->startPoint->getX();
        $b = $this->endPoint->getY() - $this->startPoint->getY();
        return sqrt($a ** 2 + $b ** 2);
    }
}
