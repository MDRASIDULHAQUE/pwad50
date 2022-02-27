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
 
$cars = array("Toyota","BMW","Tata","Volvo");
//  echo"<table>";
//  echo "<tr><th>SL</th><th>Car</th></tr>";
//  for($i=1;$i<count($cars);$i++){
//      echo "<tr>";
//      echo"<td>$i </td>";
//      echo"<td> $cars[$i]</td>";
//      echo "</tr>";
//  }
//  echo"</table>";
?>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>

    <?php
    $sn=1;
    for($i=0; $i<count($cars); $i++)
    {?>
    <tr>
        <td><?php echo $sn++;?></td>
        <td><?php echo $cars[$i];?></td>
    </tr>
    <?php

    }
    ?>
</table>


</body>
</html>