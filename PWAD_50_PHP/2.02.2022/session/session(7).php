<?php
 session_start();
 echo "Your session identification number is " . session_id();

 $_SESSION["name"] = "Rasid";
 $_SESSION["phone"] = "01760739434";


 echo "<pre>";

 print_r($_SESSION);
//  echo $name = "Md. Rasidul Haque";
//  unset ($name);
//  echo $name;


$encoded=session_encode();
echo $encoded;

?>

<a href="about.php">About US:</a>