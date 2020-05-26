<?php
// class B
// {
//     protected $innerText;

//     public function __construct()
//     {
//         $this->innerText = '';
//         return $this;
//     }
//     public function innerText(string $innerText): self
//     {
//         $this->innerText = $innerText;
//         return $this;
//     }
//     public function HTML()
//     {
//         return "<b>$this->innerText</b> ";
//     }
// }


class B extends Tag
{
    public function html()
    {
        return "<b>$this->innerText</b> ";
    }
}