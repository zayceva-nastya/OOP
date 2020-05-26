<?php
class TextArea extends Tag

{
    private $row = 50;
    private $coll = 50;
    

    public function setName(string $name)

    {
        $this->name = " name='$name'";
        return $this;
    }

    public function setRow(int $row)

    {
        $this->row = " row='$row'";
        return $this;
    }

    public function setColl(int $coll)
    {
        $this->coll = " coll='$coll'";
        return $this;
    }

    public function html()
    {
        return "<textarea$this->name$this->id$this->class$this->style$this->coll$this->row>$this->innerText</textarea>";
    }

}