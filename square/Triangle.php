<?php
class Triangle
{
    private $a;
    private $b;
   
   

public function __construct($a,$b)//методы
{
        $this->a = $a;
        $this->b = $b;
   
        
    }
public function perimetr(){
    $this->c = sqrt( $this->a**2 +  $this->b**2 );
   
    return $this->a +$this->b+$this->c;
}

public function area(){
    return 0.5*( $this->a * $this->b);
}

}