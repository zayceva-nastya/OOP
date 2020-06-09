<?php

namespace Point;

interface PointInterface
{
    public function setX(int $x):Point;

    public function setY(int $y):Point;

    public function getX():int;

    public function getY():int;

}
