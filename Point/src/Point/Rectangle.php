<?php

namespace Point;

class Rectangle implements RectangleInterface
{
    protected $startPoint;
    protected $endPoint;

    public function setStartPoint(Point $startPoint): Rectangle
    {
        $this->startPoint = $startPoint;
        return $this;
    }

    public function setEndPoint(Point $endPoint): Rectangle
    {
        $this->endPoint = $endPoint;
        return $this;
    }

    public function width():float
    {
        return $this->startPoint->getX() - $this->endPoint->getX();
    }
    public function height():float
    {
        return $this->startPoint->getY() - $this->endPoint->getY();
    }

    public function getArea(): float
    {
        return $this->width() * $this->height();
    }

    public function getPerimeter(): float
    {
        return ($this->width() + $this->height()) * 2;
    }
}
