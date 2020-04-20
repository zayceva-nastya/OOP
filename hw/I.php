<?php
class I
{
    protected $innerText;

    public function __construct()
    {
        $this->innerText = '';
        return $this;
    }
    public function innerText(string $innerText): self
    {
        $this->innerText = $innerText;
        return $this;
    }
    public function HTML()
    {
        return "<i>$this->innerText</i> ";
    }
}
