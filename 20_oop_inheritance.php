<?php
class Shape
{
    public $center = array('x' => 0, 'y' => 0);

    public function Hello(){
        echo "Hello from Shape";
    }
}

class Circle extends Shape // inheritance using the extends keyword
{
    public $radius;

    // this method overrides the functionality of the Shape(parent) class
    public function Hello(){
        echo "Hello from Cirle";
    }
}

$c = new Circle();
//print_r($c->center);

$c->Hello();

?>