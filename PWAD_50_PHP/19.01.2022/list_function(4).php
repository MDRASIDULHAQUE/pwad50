<?php
// $colors=["Red","Green","Blue","Yellow"];

// list($co1,$co2,$co3,$co4)=$colors;
// echo $co3;

?>


<?php

function myform(){

    $name= array();
    $name[]="Rasid";
    $name[]="24";
    $name[]="Dhaka";
    $name[]="Satrajitpur high school";
    return $name;
}

list ($a,$b,$c,$d)=myform();

echo "Student Name: $a <br>";
echo "Student Age: $b <br>";
echo "Student Address: $c <br>";
echo "Student School name: $d <br>";

?>