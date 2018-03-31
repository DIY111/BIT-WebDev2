<?php

// check if the file exists
if(!file_exists("data.txt")){
    echo "File is not there";
    exit;
}  
    
echo "File is there";

// reading a file's content to an array of lines
$lines = file("data.txt");

$i = 1;

foreach($lines as $line){
    echo $i,". ", $line, "<br>";
    // $i++;
    // $i = $i + 1;
    $i += 1;
}
 
 
// Reading a file with fscan
// $f = fopen('data.txt','r');
 
// while($line = fscanf($f, "%s\t%s\t%d")){
//     print_r($line);
// }
 
// fclose($f);
 


?>