<?php

include 'connection.php';

// $sql = "insert into students(name, age) values ('Thalha', 23)";

// mysqli_query($conn, $sql);

$sql = "select * from students;";

$result = mysqli_query($conn, $sql);

if(!$result)
    die("Error in SQL". $conn->error);

echo '<table border="1">
<tr>
  <th>ID</th>
  <th>Name</th>
  <th>Age</th>
  <th></th>
</tr>';


while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){


    echo '<tr><td>' . $row["SID"] . '</td><td>' . $row["NAME"]  . '</td><td>' . $row["AGE"] . '</td><td> <a href="studentinfo.php?sid='. $row['SID'] .'">Edit</a>
    <a href="deletestu.php?sid='. $row['SID'] .'">Edit</a>
    </td></tr>';

    
    //echo $row["SID"] . " " . $row["NAME"] . " " . $row["AGE"]. "<br>";

}

echo '</table>';

$conn->close();


echo "Success. Connected to Database!";



?>