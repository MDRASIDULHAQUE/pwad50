<?php
 
 $days = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");

 for($i=0; $i<count($days); $i++)
 {
         if($days[$i]=="Friday"){
         continue;
         }
    echo "Today is " . $days[$i] . "<br>";
 }

?>