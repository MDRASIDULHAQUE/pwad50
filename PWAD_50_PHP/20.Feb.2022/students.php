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
 $db = new mysqli('localhost','root','','pwad50.phpcrud');
  $id=$_GET['rid']; 

$sql = "SELECT * FROM  students WHERE batch_id = '$id'";
$data = $db->query($sql);


while($row = $data->fetch_object()){
    //echo "<p>".$row->NAME."</p>";
     echo "<tr><td>$row->NAME<td> </tr>";
    
}

?>
</body>
</html>