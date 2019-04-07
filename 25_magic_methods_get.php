<?php
class Human
{                             
    private $name;
    private $age;

    function __construct($name="", $age=1)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __get($propertyName)
    {   
        if ($propertyName == "age") {
            if ($this->age > 30) {
                return $this->age - 10;
            } else {
                return $this->$propertyName;
            }
        } else {
            return $this->$propertyName;
        }
    }                                      
}

$human = new Human("John", 60);   // Instantiate the object with the human class and assign initial values to the properties with the constructor.
echo "Name：" . $human->name . "<br>";   // When the private property is accessed, the __get() method will be called automatically,so we can get the property value indirectly.
echo "Age：" . $human->age . "<br>";    // The __get() method is called automatically，and it returns different values according to the object itself.

?>