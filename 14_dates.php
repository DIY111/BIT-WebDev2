<?php

// how to find the difference between 2 dates in PHP
$dob = new DateTime("2013-02-16");
$today = new DateTime("2018-03-25");

$interval = $dob->diff($today);


echo "Years: " . $interval->y . " Months: " . $interval->m . " Days: " . $interval->d;


?>