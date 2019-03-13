<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "2019webdev2";

//create a connection

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Database connection Failed!" . $conn->connect_error);
}

?>