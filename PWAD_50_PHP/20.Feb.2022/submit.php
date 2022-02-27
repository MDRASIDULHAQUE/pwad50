


<?php $db= new mysqli('localhost','root','','pwad50.phpcrud');


// echo "<pre>";
// print_r($_POST);
extract($_POST);


$sql= "INSERT INTO students VALUES(NULL,'$name','$email','$phone','$gender','$round')";

$db->query($sql);


if($db->affected_rows>0){
    echo "Successfully Saved";
}
?>

<!-- echo "<table border='1;>";
echo"<tr>";
echo "<th>NAME</th>";
echo "<th>EMAIL</th>";
echo "<th>PHONE</th>";
echo "<th>GENDER</th>";
echo "<tr>";

while($row = $data->fetch_object()){
    echo "<td>".$row['NAME']."</td>";
    echo "<td>".$row['EMAIL']."</td>";
    echo "<td>".$row['PHOEN']."</td>";
    echo "<td>".$row['GENDER']."</td>";
    
    
} -->