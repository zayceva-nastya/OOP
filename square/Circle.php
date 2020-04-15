<?php
class Circle
{
    private $a;
   

public function __construct($a)//методы
{
        $this->a = $a;
        
    }
public function perimetr(){
    return $this->a * 2*pi();
}

public function area(){
    return $this->a**2 * pi() ;
}

}