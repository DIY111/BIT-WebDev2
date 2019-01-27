<?php

class Person
{
    public function GoPublic()
    {
        echo "I am public";
    }

    protected function GoProtected()
    {
        echo "Protected";
    }
}

 

$person = new Person();

echo $person->age();



?>