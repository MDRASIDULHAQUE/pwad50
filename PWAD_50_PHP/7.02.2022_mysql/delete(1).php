<?php
$id= $_GET['stuid'];

include('pwad_crud.php');
$sql = "DELETE FROM students WHERE id='$id'";
$db->query($sql);
if($db->affected_rows>0){
    header("Location:students.php");
}

?>