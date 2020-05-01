<?php
class U extends PairTag
{
    public function html()
    {
        return "<u>$this->innerText</u> ";
    }
}

