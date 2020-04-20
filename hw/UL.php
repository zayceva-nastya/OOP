<?php

class UL
{
    protected $text;

    public function text(array $text): self
    {
        $str = "";
        foreach ($text as $key => $value) {
            $str .= "<li>$value</li>\n";
        }
        $this->text = $str;
        return $this;
    }
    public function HTML()
    {
        return "\n<ul>\n$this->text</ul> ";
    }
}
