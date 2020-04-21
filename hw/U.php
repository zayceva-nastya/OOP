<?php
class U extends Tag
{
    public function html()
    {
        return "<u>$this->innerText</u> ";
    }
}
