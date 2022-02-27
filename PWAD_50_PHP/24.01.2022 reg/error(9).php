<?php
//fopen("|contacts.txt","r");
ini_set("display_errors","Off");
try{
    $fh=fopen("contacts.php","r");
    if(! $fh){
        throw new Exception("Could not open the file!");

    }

}
catch(Exception $e){
    echo "File:".$e->getFile()."<br>";
    echo "line:".$e->getFile()."<br>";
    echo "massage:".$e->getMessage()."<br>";
}
?>