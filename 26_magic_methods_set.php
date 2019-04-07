<?php
class Human
{                             
    private $name;
    private $age;

    public function __construct($name="",  $age=25)
    {
        $this->name = $name;
        $this->age  = $age;
    }

    public function __set($property, $value) {
        if ($property=="age")
        {
            if ($value > 150 || $value < 0) {
                return;
            }
        }
        $this->$property = $value;
    }

    public function say(){
        echo "My name is ".$this->name.",I'm ".$this->age." years old";
    }                                      
}

$human=new Human("John", 25); //Note that the initial value will be changed by the code below.
$human->name = "Lili";     //The "name" property is assigned successfully. If there is no __set() method, then the program will throw an exception.
$human->age = 16; //The "age" property is assigned successfully.
$human->age = 160; //160 is an invalid value, so it fails to be assigned.
$human->say();  //print：My name is Lili, I'm 16 years old.

?>