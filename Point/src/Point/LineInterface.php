<?php

namespace Point;

interface LineInterface
{
    public function setStartPoint(Point $startPoint):Line;
   
    public function setEndPoint(Point $endPoint):Line;

    public function getLength(): float;


}
