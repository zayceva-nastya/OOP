<?php
class Br extends Tag
{
    public function html()
    {
        return "<br$this->style$this->id$this->class>";
    }
}
