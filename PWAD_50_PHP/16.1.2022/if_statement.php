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
     echo $_SERVER['REQUEST_METHOD'];
     if($_SERVER['REQUEST_METHOD']=='POST')
     {
        $num=450;
        if($_POST['rar'] == $num)
        {
            echo "Congratulation";
        }
        else{
            echo "Try again...";
        }
     }
    ?> 

    <form method="post">
        <input type="number" name="rar"><br>
        <button type="submit">login</button>
    </form>
</body>
</html>