<?php

class Engineer extends Student
{
    public function work()
    {
        return "I can work";
    }

    public function learn()
    {
        return parent::learn() . " very well, ";
    }
}