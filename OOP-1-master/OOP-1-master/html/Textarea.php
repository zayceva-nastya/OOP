<?php

class Textarea
{
    protected $rows;
    protected $cols;
    protected $name;

    public function rows(string $rows): self
    {
        $this->rows = " rows='$rows'";
        return $this;
    }

    public function cols(string $cols): self
    {
        $this->cols = " cols='$cols'";
        return $this;
    }

    public function name(string $name): self
    {
        $this->name = " name='$name";
        return $this;
    }

    public function html()
    {
        return "<textarea $this->rows $this->cols $this->name></textarea>";
    }
}