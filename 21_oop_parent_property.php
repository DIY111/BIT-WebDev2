<?php
class Shape
{
    var $x;

    public function getName(){
        $this->x = "I'm a shape";
        return;
    }
}

class Circle extends Shape // inheritance using the extends keyword
{    
    public function getParentName(){
        parent::getName(); //  using the parent class's method
        echo $this->x;
    }
}

$c = new Circle(); 

$c->getParentName(); // prints "I'm a shape"

?>