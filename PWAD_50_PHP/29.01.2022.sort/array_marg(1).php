<?php
$face =array('A','O','C','D','H');
$numbers=array('2','5','3','8','7','4');

$cards=array_merge($face,$numbers);

echo "<pre>";
shuffle($cards);
print_r($cards);


?>