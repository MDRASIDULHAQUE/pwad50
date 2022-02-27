<?php
$cities = ["Dhaka","Comilla","Nohakhali","Dhaka","Comilla"];
sort($cities);
echo'<pre>';
print_r($cities);
?>
<?php
$cities = ["Dhaka","Comilla","Nohakhali","Dhaka","Comilla"];
rsort($cities);
echo'<pre>';
print_r($cities);
?>

<?php
$numbers = ["10","200","800","40","50"];
sort($numbers);
echo'<pre>';
print_r($numbers);
?>
<?php
$numbers = ["10","200","800","40","50"];
rsort($numbers);
echo'<pre>';
print_r($numbers);
?>
<?php

$numbers = ["10","200","800","40","50"];
$cities = ["Dhaka","Comilla","Nohakhali","Dhaka","Comilla"];
asort($cities);
echo'<pre>';
print_r($cities);
?>
<?php

$numbers = ["10","200","800","40","50"];
$cities = ["Dhaka","Comilla","Nohakhali","Dhaka","Comilla"];
arsort($cities);
echo'<pre>';
print_r($cities);
?>