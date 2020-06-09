<?php

namespace Point;

class Triangle implements TriangleInterface

{
    protected $startPoint;
    protected $endPoint;

    public function __construct(Point $startPoint = null, Point $endPoint = null)
    {
        if ($startPoint !== null) {
            $this->setStartPoint($startPoint);
        }

        if ($endPoint !== null) {
            $this->setEndPoint($endPoint);
        }
    }

    public function setStartPoint(Point $startPoint): Triangle
    {
        $this->startPoint = $startPoint;
        return $this;
    }

    public function setEndPoint(Point $endPoint): Triangle
    {
        $this->endPoint = $endPoint;
        return $this;
    }

    private function a(): float
    {
        return $this->startPoint->getX() - $this->endPoint->getX();
    }
    private function b(): float
    {
        return $this->startPoint->getY() - $this->endPoint->getY();
    }
    private function c(): float
    {
        return sqrt($this->a() ** 2 + $this->b() ** 2);
    }

    public function getArea(): float
    {
        return 0.5 * ($this->a() * $this->b());
    }

    public function getPerimeter(): float
    {
        return $this->a() + $this->b() + $this->c();
    }
}
