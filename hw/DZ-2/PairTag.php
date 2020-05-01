<?php

abstract class PairTag extends Tag
{

    protected $innerText;

    public function __construct(string $text = '')
    {
        $this->setInnerText($text);
    }

    public function setInnerText(string $text)
    {
        $this->innerText = $text;
        return $this;
    }
}
