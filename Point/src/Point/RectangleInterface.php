<?php

namespace Point;

interface RectangleInterface
{
    public function setStartPoint(Point $startPoint):Rectangle;
    public function setEndPoint(Point $endPoint):Rectangle;
    public function width():float;
    public function height():float;
    public function getArea(): float;
    public function getPerimeter(): float;
}
