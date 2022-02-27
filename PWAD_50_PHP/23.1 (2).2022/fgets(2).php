<?php
$file = "text2.txt";
$fh=fopen($file,"r");
while(!feof($fh)){
    echo fgets($fh) . "<br>";
}

?>