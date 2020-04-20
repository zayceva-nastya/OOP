<?php

use function PHPSTORM_META\type;

class Input extends Form
{

    public function input1($arr)
    {
        return "<input type=" . $arr['type'] . "
         placeholder=" . $arr['placeholder'] . " name=" . $arr['name'] . ">";
    }
}
