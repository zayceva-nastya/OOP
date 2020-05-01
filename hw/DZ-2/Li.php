<?php

abstract class Li extends PairTag
{
    protected $data;


    public function setInnerData(array $data)
    {
        $this->data = '';

        foreach ($data as $value) {
            $this->data .= "\t<li>$value</li>\n";
        }
        return $this;
    }

    public function setType(string $type)
    {
        if (in_array($type, $this->avalibleType)) {
            $this->type = $type;
        }
        return $this;
    }

    public function html()
    {
        return "\n<$this->tagName type = '$this->type' $this->class $this->style id = '$this->id'>\n$this->data</$this->tagName>\n";
    }
}
