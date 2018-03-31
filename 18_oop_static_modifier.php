<?php
class Person{
    public $name = null;
    public $sex = "m";
    private static $objectCount = 0;

    function __construct($name, $sex){
        $this->name = $name;
        $this->sex = $sex;
        self::$objectCount++;
    }

    function print_object_count(){
        echo "Number of objects instantiated - " . self::$objectCount;
    }   
} // end of Class definition

$p1 = new Person("Saman", "m");
$p2 = new Person("Kamla", "f");

Person::print_object_count();


?>