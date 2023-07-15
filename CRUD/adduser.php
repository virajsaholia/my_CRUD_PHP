<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDb";

 echo "Before query";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (firstname, lastname, email)
VALUES ('".$_GET['txtfname']."', '".$_GET['txtlname']."', '".$_GET['email']."')";

echo $sql;
  
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
header("location:selectAll.php");


$conn->close();
?>