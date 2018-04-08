<?php 
    // __call, __get, __set, __toString
class Test{

    function __call($m, $a){
        echo "The method " . $m . " was called. <br> The arguments were as follows<br>";
        print_r($a);
    }
    
    function Hello(){
        echo "Hello Universe";
    
    }
}

    $test = new Test();

    // calling a method that does not exist
    $test->HelloBro();

?>