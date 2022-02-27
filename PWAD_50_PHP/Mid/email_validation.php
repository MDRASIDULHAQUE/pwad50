
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .valid{
            background-color: palegreen;
        }
        :valid {
            color: red;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <p>
            <input type="text" name="email" placeholder="Enter email">
        </p>
        <p>
            <input type="pass" name="pass" placeholder="Enter password">
        </p>
        <input type="submit" name="submit" value="Submit">
    </form>



    <?php
       

       if(isset($_POST['email']) ==true && empty($_POST['email']) ==false){
           $email = $_POST['email'];
           if(filter_var($email, FILTER_VALIDATE_EMAIL) == true){
               echo "<h2 class = 'valid'>Your email address : $email is a valid address</h2>";
           }else{
               echo "<h2 class='invalid'> You have put an invalid address</h2>";
           }
       }

?>
</body>
</html>
