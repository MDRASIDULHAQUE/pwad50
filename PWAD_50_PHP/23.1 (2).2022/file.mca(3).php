<?php
$file = "mytext.txt";

ini_set('date.timezone','Asia/Dhaka');
//echo fileatime($file);
$timestamp = fileatime($file);
echo date("h:m:s",$timestamp);

?>
