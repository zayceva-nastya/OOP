<?php

namespace Point;
use Point\Triangle2;

class Triangle3 extends Triangle2
{
    public function setPointC(Point $pointC)
    {
        // parent::setPointC($pointC);
        if ($this->pointA->getX() === $pointC->getX() && $this->pointB->getY() === $pointC->getY()) {
           parent::setPointC($pointC);
        } else {
            echo "noo";
        }

        return $this;
    }
}
