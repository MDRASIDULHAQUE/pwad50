<?php
 $_COOKIE['day']="Wednesday";

 $_SESSION["username"]= "Rasid";

 setcookie("username",time() + 50);
print_r($_COOKIE);

?>