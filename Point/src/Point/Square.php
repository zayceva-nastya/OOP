<?php

namespace Point;

class Square extends Rectangle
{

    public function checkSquare()
    {
        $str = '';

        if ($this->height() === $this->width()) {
            $str .= "It is square";
        } else {
            $str .= "It is not square";
        }
        return $str;
    }
}
