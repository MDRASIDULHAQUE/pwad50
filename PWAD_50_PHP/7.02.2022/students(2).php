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
    <?php include'pwad_crud.php';
    
    $sql="SELECT *FROM students";
    $data = $db->query($sql); 
    ?>

    <table border="1"> 
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
        <?php
         while ($row= mysqli_fetch_assoc($data)){
             ?>
             <tr>
                 <td><?php echo $row['ID']; ?></td>
                 <td><?php echo $row['NAME']; ?></td>
                 <td><?php echo $row['EMAIL']; ?></td>
                 <td><?php echo $row['PHOEN']; ?></td>
                 <td><?php echo $row['GENDER']; ?></td>
                 <td>
                <a class="btn btn-info" href="delete.php?stuid=<?php echo $row['ID']; ?>">Delete</a>
                <a class="btn btn-success" href="edit.php?stuid=<?php echo $row['ID']; ?>">Edit</a>
                 
            </td>
             </tr>
             <?php
         }
        ?>
    </table>
    <br><br>
    <a class="btn btn-info btn-block" href="crud.php"> New Entry</a>

    
</body>
</html>