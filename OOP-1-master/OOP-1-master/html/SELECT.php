<?php
class SELECT
{
    protected $text;

    public function __construct()
    {
        $this->text = '';
        return $this;
    }
    public function text(array $text): self
    {
        $str = "";
        foreach ($text as $value) {
            $str .= "<option>$value</option>";
        }
        $this->text = $str;
        return $this;
    }
    public function html()
    {
        return "<select>$this->text</select>";
    }
}