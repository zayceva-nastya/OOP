<?php
// class OL
// {
//     protected $text;

//     public function __construct()
//     {
//         $this->text = '';
//         return $this;
//     }
//     public function text(array $text): self
//     {
//         $str = "";
//         foreach ($text as $value) {
//             $str .= "<li>$value</li>";
//         }
//         $this->text = $str;
//         return $this;
//     }
//     public function html()
//     {
//         return "<ol>$this->text</ol>";
//     }
// }

class OL extends Li
{
    protected $type = "1";
    protected $avalibleType = ["1", "I", "i"];
    protected $tagName = "ol";
}