<?php
class U
{
    protected $innerText;
    public function innerText(string $innerText): self
    {
        $this->innerText = $innerText;
        return $this;
    }
    public function HTML()
    {
        return "<u>$this->innerText</u> ";
    }
}
