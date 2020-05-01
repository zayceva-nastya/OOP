<?php
class Img extends Tag
{
    public function src(string $src)
    {
        $this->src = "src='$src'";
        return $this;
    }
    public function alt(string $alt)
    {
        $this->alt = " alt='$alt'";
        return $this;
    }
    public function setHeight(int $height)
    {
        $this->height = " height='$height'";
        return $this;
    }
    public function setWidth(int $width)
    {
        $this->width = " width='$width'";
        return $this;
    }
    public function html()
    {
        return "<img  $this->src$this->alt$this->width$this->height>";
    }
}
