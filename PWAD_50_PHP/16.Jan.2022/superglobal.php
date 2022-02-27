<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
    // echo "<pre>";
   // echo "<pre>";
     //print_r($_SERVER);
    // echo $_SERVER['PHP_SELF'];
    // echo $_SERVER['REQUEST_METHOD'];

    ?> 
    <!-- <a href="superglobal.php?name=YAHOO"> YAHOO</a>
    <a href="superglobal.php?name=GOOGLE"> GOOGLE</a> -->
    
    <?php
      //print_r($_GET);
    ?>
    <?php
     $x = "Today is Sunday";
     echo $GLOBALS['$x'];
     
    ?>

</body>
</html>