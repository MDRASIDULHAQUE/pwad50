
<?php
$str = "Hello World";
echo str_pad($str,20,"=",STR_PAD_RIGHT);//The str_pad() function pads a string to a new length.
echo "<br>";
echo str_pad($str,20,"=",STR_PAD_LEFT);//The str_pad() function pads a string to a new length.
echo "<br>";
echo str_pad($str,20,"=",STR_PAD_BOTH);//The str_pad() function pads a string to a new length.

?>
<br>
<br>
<?php
$amount =5000.50;
$taka= str_pad($amount,15,'0',STR_PAD_LEFT);
echo $taka;

?>
