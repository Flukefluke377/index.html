<?php

function calnum($a,$op,$b){
    if($op=="+")
        $c=$a+$b;
    elseif($op=="-")
        $c=$a-$b;
    elseif($op=="*")
        $c=$a*$b;
    elseif($op=="/")
        $c=$a/$b;
    elseif($op=="**")
        $c=pow($a,$b);
    elseif($op=="%")
        $c=$a%$b;
    elseif($op=="|")
        $c=floor($a/$b);
        
  return $c;
}
    
    class Classnum{
        private $a;
        private $b;

        public function __construct($pa,$pb)
        {
            $this -> a= $pa;
            $this -> b= $pb; 
        }
        public function add(){
            return $this->a + $this->b;
        }
        public function sub(){
            return $this->a - $this->b;
        }
        public function muti(){
            return $this->a * $this->b;
        }
        public function divi(){
            return $this->a / $this->b;
        }
    }

    
?>