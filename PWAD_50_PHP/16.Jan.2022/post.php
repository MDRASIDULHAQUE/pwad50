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
    //print_r($_POST);
   // echo $_POST['fullname'];
   // echo $_GET['fullname'];
    echo $_REQUEST['fullname'];
    //<?php echo $_SERVER['PHP_SELF']; ?>
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        
    <input type="text" name="fullname">
    <input type="submit" name="submit" value="Submit">

    </form>
</body>
</html>