<?php

 

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];

$conn = new mysqli("localhost", "althaf", "1234", "mydb" );
// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO persons(`FirstName`, `LastName`, `Age`) VALUES ('$firstname', '$lastname', $age)";
mysqli_query($conn, $sql); // this is where the insert happens

$conn->close();

echo "Your sql statement was successfull";

?>