<?php
$cities = array("Dhaka"=>"lalbag Kella","Comilla"=>"Lalmai Pahar","Chottogram"=>"Foyez Lake",
"Bogra"=>"Mohastan Garh");


echo array_search("Lalmai Pahar",$cities);
echo "<pre>";
$result= array_search("Lalmai Pahar",$cities);
echo "We found Lalmai Pahar in the District $result";
?>