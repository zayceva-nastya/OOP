<?php
class I extends PairTag
{
    public function html()
    {
        return "<i>$this->innerText</i> ";
    }
}
