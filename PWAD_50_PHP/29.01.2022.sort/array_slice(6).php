<?php
$cities=array('dhaka','rajsahi','comilla','syleht','chottogram','dinajpur');

$subset=array_splice($cities,-2,1,array('barisal','rongpur'));

echo "<pre>";

//print_r($subset);
print_r($cities);

?>