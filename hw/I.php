<?php
class I extends Tag
{
    public function html()
    {
        return "<i>$this->innerText</i> ";
    }
}
