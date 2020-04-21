<?php

class B extends Tag
{
    public function html()
    {
        return "<b>$this->innerText</b> ";
    }
}
