<?php
class Hr extends Tag
{
    public function html()
    {
        return "<hr style='$this->style'>";
    }
}
