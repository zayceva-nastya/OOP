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
    public function html()
    {
        return "<img  $this->src  $this->alt style='$this->style'>";
    }
}
