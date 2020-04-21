<?php
abstract class Li extends Tag 
{
   protected $data;

   public function setInnerData(array $data)
   {
      $this->data = "";

      foreach ($data as $value) {
         $this->data .= "<li>$value</li>";
      }
      
      return $this;

   }
}
