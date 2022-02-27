


<?php $db= new mysqli('localhost','root','','pwad50.phpcrud');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>      

<?php
      $sql = "SELECT * FROM rounds";
      $data = $db->query($sql);
      ?>


    <form action="">
        <input type="text" name="name" id="name" placeholder="Enter name"><br>
        <input type="text" name="email" id="email" placeholder="Enter email"><br>
        <input type="text" name="phone" id="phone" placeholder="Enter phone"><br>
        Gender:
        Mail <input type="radio" name="gender" value="Male">
        Femail <input type="radio" name="gender" value="Female">
        <br>
        <select name="" id="round">
         <option value="">Select One</option>

         <?php
          while($row=$data->fetch_object()) { ?>
             
              <option value="<?php echo $row->id ?>"> <?php echo $row->batch_name ?></option>
               <?php }
               ?>
     </select><br>
     <input type="button" name="save" value="Save">

     <script>
         $(document).ready(function(){
             $('#save').click(function(){
               var n=  $('#name').val();
               var e=  $('#email').val();
               var p=  $('#phone').val();
               var g=  $("(input[name='gender']:checked").val();
               var b=  $('#round').val();
              
               $.post('submit.php',{name:n,email:e,phone:p,gender:g,round:b},function(data,status){
                        $('#show').text(data);
               });
             });
         });
     </script>
    </form>
</body>
</html>