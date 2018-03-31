<?php
class Person{
    const office = "UCSC"; // constant definition within the class
    public $name = null;
    public $sex = "m";

    function __construct($name, $sex){
        $this->name = $name;
        $this->sex = $sex;
    }

    function print_office(){
        echo "Office name - " . self::office; // using the constant defined in the class level
    }   
} // end of Class definition

 
Person::print_office();


?>