<?php
$array1=array('oh','ch','bp','bh','jh','rh');
$array2=array('oh','ch','bi','br','jl','rh');
$array3=array('od','cc','bw','br','oh','rh');


$dif=array_diff($array1,$array2,$array3);
echo "<pre>";
print_r($dif);

?>