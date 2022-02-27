<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="" name="myfile" id="">
    <input type="submit" value="UPLOADS">
</form>


<?php
       if(isset($_FILES['myfile'])){


        $errors=array();
        $file_name=$_FILES['myfile']['name'];
        $file_size=$_FILES['myfile']['size'];
        $file_tmp=$_FILES['myfile']['tmp_name'];
        $file_type=$_FILES['myfile']['type'];
        


        $file_ext=explode('.',$file_name);
        $file_ext=strtolower($file_ext);

        $extensions=array('pnp','jpg');


        if(isset($file_ext,$extensions)===false){
            $errors[]="File pnp or jpg";
        }
        if($file_size>40936000){
            $errors[]="file size 400 kb";
        }
        if(empty($errors)==true){
            move_uploaded_file($file_tmp,"myfile/".$file_name);
            echo "Successfull";
        }else{
            print_r($errors);
        }

       }
?>
</body>
</html>