<?php
class Person{
    public $name = null;
    public $sex = "m";
    private static $objectCount = 0;

    public function __construct($name, $sex){
        $this->name = $name;
        $this->sex = $sex;
        self::$objectCount++;
        //echo "constructor values ".  self::$objectCount . "<br>";

    }

    function print_object_count(){
        //echo "Number of objects instantiated : " . self::$objectCount;
    }   
} // end of Class definition

$p1 = new Person("Nimal", "m"); 

$p2 = new Person("Kamal", "m"); 

$p3 = new Person("Sunil", "m");

$p4 = new Person("Vimal", "m");

// print the object count
Person::print_object_count();

//assign values to a static variable
Person::$objectCount = 6;

echo Person::$objectCount;






?>