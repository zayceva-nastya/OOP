<?php
class Hr extends Tag

{
    private $color;
    private $size;
    protected $width;

    public function setColor(string $color)

    {
        $this->color = " color='$color'";
        return $this;
    }

    public function setSize(int $size)
    {
        $this->size = " size='$size'";
        return $this;
    }


    public function setWidth(int $width)
    {
        $this->width = " width='$width'";
        return $this;
    }

    public function html()

    {
        return "<hr$this->color$this->size$this->width>";
    }
}