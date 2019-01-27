<?php


$mark = 55;
if($mark > 70)
    echo "Excellent\n";
elseif ($mark > 50){
    echo "good\n";

    if($mark > 60){
        echo "(***)";
    }

}
elseif ($mark > 30)
    echo "pass\n";
else
    echo "fail\n";


// $age = 25;

// if($age < 20){
//     echo "Hello Students";    
// }
// elseif($age < 30){
//     echo "Hello Friends";
// }
// else{
//     echo "Hello OLD people";

// }



?>