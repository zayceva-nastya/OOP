<?php

class OL
{
    protected $text;

    public function __construct()
    {
        $this->clear();
    }
    public function clear(): self
    {
        $this->mounth = '';
        return $this;
    }
    public function style(string $style): self
    {
        $this->style = "style='$style'";
        return $this;
    }
    public function text(array $text): self
    {
        $str = "";
        foreach ($text as $key => $value) {
            $str .= "<li>$value</li>";
        }
        $this->text = $str;
        return $this;
    }

    public function HTML()
    {
        return "\n<ol>\n$this->text</ol> ";
    }
}
