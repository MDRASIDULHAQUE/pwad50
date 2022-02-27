<?php
//Add Elements to an array

$cars =array("Toyota","Volvo","Nishan","BMW");

array_unshift($cars,"Ferari","Audi");//unshift

//array_push($cars,"Ferari","Audi");//push

echo "<pre>";

print_r($cars);
?>

<?php
//Drop ELements from an array

$cars =array("Toyota","Volvo","Nishan","BMW");


array_shift($cars); //remove 1st
array_pop($cars);//remove last

echo "<pre>";

print_r($cars);
?>