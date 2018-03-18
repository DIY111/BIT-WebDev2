<?php

//writing data to a file

$f = fopen('mydata.txt', 'w');
fwrite($f, "My name is Shiham\n");
fwrite($f, "My age is 30\n");
fclose($f);


// appending data to a file
$f = fopen("mydata.txt", "a");
fwrite($f, "My name is Rohith");
fclose($f);

//reading a file with `fgets()`
// $f = fopen("mydata.txt", "r");
// while(!feof($f)){
//     $line = fgets($f);
//     echo $line, "<br>";
// }
// fclose($f);

//reading a file with `file()`
//  $lines = file('mydata.txt');

//  foreach($lines as $line_no => $line){
//     echo $line_no, ". ", $line, "<br>";

//  }

//reading a file with `fscanf()`
$f = fopen("mydata.txt", "r");
while( $line = fscanf($f, "%s\t%s\t%s\t%d\n")){
     
    // echo $line[0], "- ", $line[1], "<br>";
    print_r($line);
}
fclose($f);

?>