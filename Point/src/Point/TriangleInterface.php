<?php

namespace Point;

interface TriangleInterface
{
    public function setStartPoint(Point $startPoint):Triangle;
    public function setEndPoint(Point $endPoint):Triangle;
    public function getArea(): float;
    public function getPerimeter(): float;
}
