<?php

$servername = "localhost";
$username = 'althaf';
$password = "1234";
$dbname = "mydb";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

//$conn = new mysqli("localhost", "althaf", "1234", "mydb" );
// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// =====
$query = "INSERT INTO persons(`FirstName`, `LastName`, `Age`) VALUES ('Nimal', 'Perera', 33)";
mysqli_query($conn, $query);

$query = "INSERT INTO persons(`FirstName`, `LastName`, `Age`) VALUES ('Sunil', 'Perera', 30)";
mysqli_query($conn, $query);

$query = "INSERT INTO persons(`FirstName`, `LastName`, `Age`) VALUES ('Sunil', 'Rathnayaka', 52)";
mysqli_query($conn, $query);



$conn->close();

echo "Success!";


?>