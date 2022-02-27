<?php
define('HOST','localhost');
define("USR","root");
define('PASS','');
define('DB','pwad50.phpcrud');
$db = @new mysqli (HOST, USR, PASS, DB);


// echo $db->connect_errno;
// echo $db->connect_error;

if($db->connect_errno>0){
    echo $db->connect_error;
}



?>