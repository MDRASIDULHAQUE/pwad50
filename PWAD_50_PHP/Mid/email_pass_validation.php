
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
       
    </style>
</head>
<body>
    <form action="" method="post">
        <p>
            <input type="text" name="email" placeholder="Enter email">
        </p>
        <p>
            <input type="password" name="password" placeholder="Enter password">
        </p>
        <input type="submit" name="submit" value="Submit">
    </form>



    <?php
       

      if($_SERVER['REQUEST_METHOD'] == 'POST'){

         if($_POST['email']== '' && $_POST['password']== '' ){
            echo "Email and password must fill up";
         }else{
            $email=$_POST['email'];
            $password=$_POST['password'];
            $errors = array();
            if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
                $errors[] = "Valid email must be required";
             }
  
             if (strlen($password)<5 || strlen($password)>10){
                 $errors[] = "Password length must be 5 to 10";
             }
           print_r($errors);
         }



         if(empty($errors)){
             echo "<h2 class='valid'> All data are validated</h2>";
         } else{
             foreach($errors as $err){
                 echo "<h3 class='invalid'>$err</h3>";
             }
         }

           
      }




          
    

?>
</body>
</html>
