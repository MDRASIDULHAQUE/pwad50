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
       $value1 ="Hello";
       
       $value2 =&$value1; //Hello
      // echo $value2;
       $value2 ="Good bye";//Good bye
       echo $value1;

    ?>
</body>
</html>