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


$x= "Sunday";
$y= "15 celcius";
     $z= <<<ras
 <p> Today is $x</p>
 <p> and Today's temerature is $y</p>
 <a href="https://www.google.com">Google</a>

ras;
 echo $z;
   ?>
</body>
</html>