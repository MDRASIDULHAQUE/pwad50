<?php
$names=file("my_text_file.txt");
echo "<pre>";
// print_r($names);


foreach($names as $name){
    
    list($a, $b, $c)= explode("|",$name);
}

echo $b;
?>