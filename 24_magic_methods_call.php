<?php
class Human
{                             
    function say()
    {
           echo "Hello, world!<br>";
    }     

    function __call($funName, $arguments)
    {
          echo "The function you called：" . $funName . "(parameter：" ;  // Print the method's name that is not existed.
          print_r($arguments); // Print the parameter list of the method that is not existed.
          echo ")does not exist!！<br>\n";                   
    }                                         
}
$person = new Human();           
$person->run("teacher"); // If the method which is not existed is called within the object, then the __call() method will be called automatically.
$person->eat("John", "apple");             
$person->say();

?>