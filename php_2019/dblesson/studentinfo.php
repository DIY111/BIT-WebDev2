<?php

$name = '';
$age = '';
$sid = '';


if(isset($_GET['sid'])){ // check for existence of $sid

  $sid = $_GET['sid'];

  include 'connection.php';
  $sql = "select * from students where sid = $sid";
  $res = mysqli_query($conn, $sql);

if(!$res)
  die("Error in SQL". $conn->error);

while($row = mysqli_fetch_array($res)){
  
  $name = $row['NAME'];
  $age = $row['AGE'];

}

$conn->close();

}


?>

<html>
  <head>
    <title>DB Connect</title>
  </head>

  <body>
    <form action="insert.php" method="post">
      <input type="hidden" name="sid" value="<?php echo $sid; ?>" >
      Name: <input type="text" name="name" value="<?php echo $name; ?>" /><br />
       
      Age: <input type="text" name="age" value="<?php echo $age ?>" /><br />
      <input type="submit" />
    </form>

   
  </body>
</html>
