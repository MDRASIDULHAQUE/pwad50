<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="myfile" />
         <br>
         <br>
         <input type="submit" value="UPLOADS"/>
      </form>
      
   </body>
</html>


<?php
   if(isset($_FILES['myfile'])){
      $errors= array();
      $file_name = $_FILES['myfile']['name'];
      $file_size =$_FILES['myfile']['size'];
      $file_tmp =$_FILES['myfile']['tmp_name'];
      $file_type=$_FILES['myfile']['type'];


      $file_ext=explode('.',$file_name);

      $file_ext=strtolower(end($file_ext));
     
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 4093600){
         $errors[]='File size must be excately 400 kb';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"myfile/".$file_name);
         echo "Your File is Uploaded Successfully.";
      }else{
         print_r($errors);
      }
   }
?>