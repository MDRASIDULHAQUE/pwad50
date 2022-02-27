<?php
// $host= 'localhost';
// $user= 'root';
// $pass= '';
// $db= 'pwad50_mysql';
//$db = @new mysqli ($host, $user, $pass, $db);

define('HOST','localhost');
define("USR","root");
define('PASS','');
define('DB','pwad50_mysql');
$db = @new mysqli (HOST, USR, PASS, DB);

// echo $db->connect_errno;
// echo $db->connect_error;

if($db->connect_errno>0){
    echo $db->connect_error;
}

//$db->close();

?>