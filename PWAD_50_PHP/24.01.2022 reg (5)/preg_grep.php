<?php
 $foods = array("pasta","steak","paotatoes","fish");
 $food= preg_grep("/^pa*/",$foods);
 echo "<pre>";
 print_r($food);

?>