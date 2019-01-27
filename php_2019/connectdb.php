<?php

$username = 'root';
$password = '';
$server = 'localhost';
$db = 'hallam';


$conn = new mysqli($server,$username,$password,$db);

if($conn->connect_error){
    die("Database connection failed:" . $conn->connect_error);
}

$sql = "select * from users where firstname = 'Shiham'";

$result = mysqli_query($conn, $sql);

if(!$result){
    die('Error executing SQL' . $conn->error);
}

while($row = mysqli_fetch_array($result)){
    echo $row['firstname'] . " " . $row['lastname'] . "<br>";
}


$conn->close();

?>