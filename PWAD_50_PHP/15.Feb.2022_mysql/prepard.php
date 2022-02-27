<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pwad50_mysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO employees (ID,firstname, lastname, email,phone) VALUES (?, ?, ?,?,?)");
$stmt->bind_param("sssss",$id, $firstname, $lastname, $email,$phone);

// set parameters and execute
$id = "6";
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$phone="01764825425";
$stmt->execute();

$id = "7";
$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$phone="01764825425";
$stmt->execute();


$id = "7";
$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$phone="0176485425";
$stmt->execute();


$id = "8";
$firstname = "Juzclie";
$lastname = "Dooley";
$email = "julie@example.com";
$phone="0176485425";
$stmt->execute();


echo "New records created successfully";

$stmt->close();
$conn->close();
?>