<?php

$servername = "localhost";
$username = 'althaf';
$password = "1234";
$dbname = "mydb";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// OR second way to create the connection object
// $conn = mysqli_connect($servername, $username, $password, $dbname);


// checking if there is an error while connecting to the database
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}


// SELECT performing a select query and echo the results
$query ="SELECT * FROM persons"; // persons table contains PID, FirstName and LastName columns

$result = mysqli_query($conn, $query);

if($result){
    while ($row = mysqli_fetch_array($result)){
        echo $row['PID'] . " - " . $row['FirstName'] . " " . $row['LastName']. "<br>";
    }
}
// END SELECT


// closing the connection to the database
$conn->close();

 


?>