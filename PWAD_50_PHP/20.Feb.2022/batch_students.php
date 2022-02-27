

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
     <h1>All Rounds</h1>

   
     <select name="" id="round">
         <option value="">Select One</option>

         <?php
          while($row=$data->fetch_object()){ ?>
             
              <option value="><?php echo $row->id?>"><?php echo $row->batch_name ?></option>

              <?php
          }


?>
     </select>
     <br>
     <input type="button" name="save" value="Save">
     
     <div id="show"></div>


     <script>
         $(document).ready(function(){
             $('#round').change(function(){
                var id=($(this).val())
                $.get('students.php',{id:rid},function(data,status){
                    $('#show').html(data);
                });
               
             });
         });
     </script>

      
</body>
</html>