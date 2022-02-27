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
    include('pwad_crud.php');
      $id =$_GET['stuid'];
       if(isset($_POST["submit"])){
        // print_r($_POST);
        // include('pwad_crud.php');
        extract($_POST);
        // echo $email;
        $sql = "update students set NAME='$name', EMAIL='$email',PHOEN= '$phone', GENDER='$gender' WHERE
        id=".$id;
        
        // $sql ="INSERT INTO students VALUES(NULL,'$name','$email','$phone','$gender')";
        
        $db ->query($sql);
        // echo $db->affected_rows;
        if ($db-> affected_rows==1){
            header ('location:students.php');
        }
        else{
            echo "not insert";
        }
    }
    ?>
    <?PHP
       
    //    


       $sql="SELECT * FROM students WHERE id='$id'";
       $data= $db->query($sql);
       $row = $data->fetch_assoc();

?>


    <form action="" method="post">
        Name <br>
        <input type="text" name="name" id="" value="<?php echo $row['NAME']; ?>"><br>
        Email: <br>
        <input type="text" name="email" id="" value="<?php echo $row['EMAIL']; ?>"> <br>
        Phone: <br>
        <input type="text" name="phone" id="" value="<?php echo $row['PHOEN']; ?>"> <br>
  
        Gender: <br>
        Male <input type="radio" name="gender" value="Male" id="" <?php if($row['GENDER'] =='male')
        echo "checked" ; ?> ><br>
        female <input type="radio" name="gender" value="Female" id="" <?php if($row['GENDER']=='female')
        echo "checked" ; ?>  ><br>
        <input type="submit" name="submit" id="" value="UPDATE">
    </form>
</body>
</html>