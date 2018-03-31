<?php
// Interface is a way to specifiy what methods a class must explicitly implement
interface TwoDimensionalOperations
{
    // All methods declared in an interface must be public
    public function calculateArea();
}

class Circle implements TwoDimensionalOperations // inheritance using the extends keyword
{    
     public function calculateArea(){
         // implemenation of the calculation here
     }
}

?>