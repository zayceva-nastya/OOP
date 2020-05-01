<?php

class B extends PairTag
{
    public function html()
    {
        return "<b class='$this->class' id='$this->id'>$this->innerText</b> ";
    }
}
