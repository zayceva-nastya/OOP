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

    public function setEndPoint(Point $endPoint)
    {
        $this->endPoint = $endPoint;
        return $this;
    }

    protected function width()
    {
        if ($this->check()) {
            return abs($this->startPoint->getX() - $this->endPoint->getX());
        } else {
            return 0;
        }
    }
    protected function height()
    {
        if ($this->check()) {
            return abs($this->startPoint->getY() - $this->endPoint->getY());
        } else {
            return 0;
        }
    }

    private function check()
    {
        return (is_object($this->startPoint) && is_object($this->endPoint));
    }

    public function getArea(): float
    {
        if ($this->check()) {
            return $this->width() * $this->height();
        }else{
            return 0;
        }
    }

    public function getPerimeter(): float
    {
        if ($this->check()) {
            return ($this->width() + $this->height()) * 2;
        }else{
            return 0;
        }
    }
}
