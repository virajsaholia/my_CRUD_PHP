<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oeb";

 
// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  
  die("Connection failed: " . $con->connect_error);
}
else {
}

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "UPDATE `user` SET `fname` = '".$_POST['fname']."', `lname` = '".$_POST['lname']."', `umail` ='".$_POST['umail']."' ,`utype` = '".$_POST['utype']."', `ucity` = '".$_POST['ucity']."', `umobile` = '".$_POST['umobile']."', `u_password` = '".$_POST['u_password']."' WHERE `uid` =".$_POST['id'];

echo $sql;  
    mysqli_query($conn,$sql);

header("location: selectAll.php");

$mysqli -> close();
?>