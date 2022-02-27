<?php
$cars = array("volvo", "BMW", "Touota");
$len = count($cars);
for($i=0; $i<$len; $i++)
{
    echo $cars[$i];
    //echo $len;
    echo "<br>";
}
sort($cars);
 $len = count($cars);
 echo'<br>';
 for($i=0; $i<$len; $i++)
 {
     echo $cars[$i];
     //echo $len;
     echo "<br>";
 }

 //----------------------------------int,float,-------------------
$num1 = "45231.34hf";
$show = (float)$num1;
var_dump($show);
//-----------------------------array value key---------
echo
$age =array("Peter"=>"25","Abdur"=>"25");
echo $age['Abdur']

?>