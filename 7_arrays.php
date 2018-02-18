
<?php

    $a = array(
            1=> "First Item",
            "item2" => "Second Item",
            5 => "Third item",
            "Forth item"
            );

    //loop through array items with foreach
    // 1. use both the key and the value
    foreach ($a as $key => $value){
        echo $key," - ",$value,"<br>";
    }

    echo "<br> ============================== <br>";

    //2. use only the value
    foreach ($a as $value) {
        echo $value . "<br>";
    }

?>
