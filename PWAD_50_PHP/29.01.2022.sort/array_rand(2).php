<?php
$students =array('Rasid'=>'A','Abdur'=>'B','Sojol'=>'C','Alammin'=>'D','Fehor'=>'F');

$results=array_rand($students,2);
echo "<pre>";

print_r($results);
?>