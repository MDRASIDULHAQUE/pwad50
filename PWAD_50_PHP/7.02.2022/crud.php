<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>
    <h1>Student Entry Form</h1>


    <?php
    //print_r($_POST);

    if(isset($_POST["submit"])){
        print_r($_POST);
        include('pwad_crud.php');
        extract($_POST);
        // echo $email;
        $sql ="INSERT INTO students VALUES(NULL,'$name','$email','$phone','$gender')";
        
        $db ->query($sql);
        // echo $db->affected_rows;
        if ($db-> affected_rows==1){
            echo "insert successfull";
        }
        else{
            echo "not insert";
        }
    }
    ?>


    <form action="" method="post">
        Name <br>
        <input type="text" name="name" id=""><br>
        Email: <br>
        <input type="text" name="email" id=""> <br>
        Phone: <br>
        <input type="text" name="phone" id=""> <br>
        Gender: <br>
        Male <input type="radio" name="gender" value="male" id=""><br>
        female <input type="radio" name="gender" value="female" id=""><br>
        <input type="submit" name="submit" id="" value="SAVE">
    </form>
</body>
</html>