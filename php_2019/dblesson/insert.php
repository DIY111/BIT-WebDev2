<?php
 
include 'connection.php';

$name = $_POST['name'];
$age = $_POST['age'];

if(isset($_POST['sid']) && !empty($_POST['sid'])){

    $sid = $_POST['sid'];
    $sql = "UPDATE students SET name = '$name', age = $age WHERE sid = $sid";
}else {

    $sql = "INSERT INTO students (name, age)"
. "VALUES ( '$name', $age )";

}

if(mysqli_query($conn,$sql)){
    echo "Data inserted to the Table successfully";
}else {
    echo "Error in inserting data". $conn->error;
}


mysqli_close($conn);

header('location: details.php');
