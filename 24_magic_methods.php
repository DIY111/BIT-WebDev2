<?php 
    // __call, __get, __set, __toString

    function __call($m, $a){
        echo "The method " . $m . " was called. <br> The arguments were as follows<br>";
        print_r($a);
    }
    

?>