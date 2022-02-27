<?php
$dir ="../22.1.2022";
$directorySize=0;

if(is_dir($dir)){
    if($dh = opendir($dir)){
        while (($file =readdir($dh))!== false){
            //var_dump($file);
            //echo "<br>";
            echo "filename:$file" . "<br>";

            if(is_file($dir."/".$file))
            $directorySize += filesize($dir."/".$file);
        }
    
        closedir($dh);
    }
}
echo "Total Directory Size:$directorySize";
?>