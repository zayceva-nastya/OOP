<?php

namespace Point;

interface RectangleInterface
{
    public function setStartPoint(Point $startPoint):Rectangle;
    public function setEndPoint(Point $endPoint);
    public function getArea(): float;
    public function getPerimeter(): float;
}
