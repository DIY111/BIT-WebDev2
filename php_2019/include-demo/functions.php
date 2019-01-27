<?php

$students = array(
    'Shiham',
    'Hafsa',
    'Asma'
);

function Greet($name){
    echo 'Hello ' . $name;

}

function ShowStudents(){

    global $students;



    echo '<ul>';
    foreach ($students as $key => $value) {
        echo '<li>'. $value . '</li>';
        
    }
    echo '</ul>';

}

?>