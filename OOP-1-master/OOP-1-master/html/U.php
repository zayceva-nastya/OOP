<?php
// class U
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
//         return "<u>$this->innerText</u> ";
//     }
// } 

class U extends Tag
{
    public function html()
    {
        return "<u>$this->innerText</u> ";
    }
}