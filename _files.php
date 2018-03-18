<?php

$servername = "localhost";
$username = 'shiham';
$password = "1234";
$dbname = "test_db";


// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

echo "Success. Connected to database";

// $lines = file("data.txt");

// $i = 1;

// foreach($lines as $line){
//     echo $i,". ", $line, "<br>";
//     // $i++;
//     // $i = $i + 1;
//     $i += 1;
// }
 

// if(!file_exists("data.txt")){
//     echo "File is not there";
//     exit;
// }  
    
// echo "File is there";
 
 


// $f = fopen('data.txt','r');
 
// while($line = fscanf($f, "%s\t%s\t%d")){
//     print_r($line);
// }
 
// fclose($f);
 


?>