<?php
abstract class Shape
{
     public $origin = array('x' => 0, 'y' => 0);
}

class Circle extends Shape // inheritance using the extends keyword
{    
     //Circle implementation
}

$c = new Circle(); 
print_r($c->origin);

$s = new Shape(); // This wil throw an error since abstract classed cannot be instantiated
print_r($s->origin);

?>