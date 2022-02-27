<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
                <a href="delete.php?stuid=<?php echo $row['ID']; ?>">Delete</a>
                <a href="update.php?stuid=<?php echo $row['ID']; ?>">Update</a>
                 </td>
             </tr>
             <?php
         }
        ?>
    </table>
    <br><br>
    <a href="students.php"> Show all students</a>
</body>
</html>