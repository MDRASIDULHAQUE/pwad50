<?php
$abbrevations= array("DH","KH","NO","CU");
$cities= array("Dhaka","Khulna","NOakhali","Cumilla");
$cityare= array_combine($abbrevations,$cities);

echo "<pre>";
print_r($cityare);
?>