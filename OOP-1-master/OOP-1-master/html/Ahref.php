<?php
// <a href='https://www.tut.by' class='btn' id='b1' style='color:red'>Текст</a>
class Ahref
{
    protected $innerText;
    protected $href;
    protected $id;
    protected $class;
    protected $style;


    public function __construct()
    {
        $this->clear();
    }


    public function clear(): self
    {
        $this->href =
            $this->class =
            $this->id =
            $this->style =
            $this->innerText = '';
        return $this;
    }

    public function innerText(string $innerText): self
    {
        $this->innerText = $innerText;
        return $this;
    }

    public function href(string $href): self
    {
        $this->href = " href='$href'";
        return $this;
    }

    public function id(string $id): self
    {
        $this->id = " id='$id'";
        return $this;
    }

    public function class(string $class): self
    {
        $this->class = " class='$class'";
        return $this;
    }

    public function style(string $style): self
    {
        $this->style = " style='$style'";
        return $this;
    }

    public function HTML()
    {
        return "<a$this->href$this->class$this->id$this->style>$this->innerText</a>";
    }
}