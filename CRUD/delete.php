<?php
if(!isset($_GET['uid']) || !ctype_digit($_GET['uid'])){
header("location:selectAll.php");
exit();
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oeb";

 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  
  die("Connection failed: " . $conn->connect_error);
}
else {
}

$sql = "DELETE FROM user WHERE uid ='".$_GET['uid']."'";

if(mysqli_query($conn,$sql)){
echo "deleted table successfully";
}else{
echo "error in deleting record".mysqli_connect_error($conn);
}
header("location:selectAll.php");
mysqli_close($conn);
?>
