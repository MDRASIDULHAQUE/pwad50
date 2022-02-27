<?php include'db_config_mysql.php';
?>
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
$sql="SELECT * FROM  employees";
$data =$db->query($sql);


//$row = $data->fetch_all();
//$row = $data->fetch_row();
// $row = $data->fetch_assoc();
//$row = $data->fetch_object();
// echo "<pre>";
// print_r($row);
?>


<table border="2">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        
    </tr>
    <?php
while($row =$data->fetch_array()){?>
    <tr>
    <td><?php echo $row['ID']; ?></td>
    <td><?php echo $row['firstname']; ?></td>
    <td><?php echo $row['lastname']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    </tr>


<?php
}
?>
</table> 
</body>
</html>