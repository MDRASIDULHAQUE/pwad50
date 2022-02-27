<?php

$pswd= "supersecet";
$pswd1= "supersecet1";
//echo strcmp($pswd,$pswd1);
if(strcmp($pswd,$pswd1) !=0){
    echo "Passwords do not match!";
}
else{
    echo "Passwords match!";
}

?>