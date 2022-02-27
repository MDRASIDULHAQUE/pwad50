<?php
$cities = [
           "Dhaka"=>array("Population"=>10000,"Education"=>8000),
           "Barisal"=>array("Population"=>20000,"Education"=>5000),
           "Rajsahi"=>array("Population"=>10000,"Education"=>6000),
           "Sylhet"=>array("Population"=>30000,"Education"=>7000),



];
echo "Population " . $cities['Rajsahi']["Population"];

echo " <br>  Population " . $cities['Rajsahi']["Education"];
?>