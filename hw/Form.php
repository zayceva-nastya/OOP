<?php
abstract class Form
{
    protected $open;
    protected $close;

    public function open($arr)
    {
        return "<form action=" . $arr['action'] . " method=" . $arr['method'] . ">";
    }
    public function close()
    {
        return "</form>";
    }
}
