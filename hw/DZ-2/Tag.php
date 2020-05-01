<?php

abstract class Tag
{
    protected $style;
    protected $class;
    protected $id;

    public function setStyle(string $text)
    {
        $this->style = $text;
        return $this;
    }

    public function setClass(string $text)
    {
        $this->class = $text;
        return $this;
    }

    public function setId(string $text)
    {
        $this->id = $text;
        return $this;
    }

    abstract public function html();

}
