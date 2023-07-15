
<?php
if(!isset($_GET['uid']) || !ctype_digit($_GET['uid'])){
header("location:index.html");
exit();
}$servername = "localhost";
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
$sql = "SELECT * FROM user WHERE uid =".$_GET['uid'];
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>
<head>
<title>Edit</title>

<link rel='stylesheet' href='tblstyle.css'>
</head>
<body>
<div>
<h2 align="center">Edit Users</h2>

<table>
<form method="POST" action="process_edit_user.php">
		<input type="hidden" name="id" value="<?php echo$_GET['uid']?>"/>
		<tr><td>First ame</td><td><input type="text" name="fname" value="<?php echo $row['fname'];?>"></td></tr>
		<tr><td>Last Name</td><td><input type="text" name="lname" value="<?php echo $row['lname'];?>"></td></tr>
		<tr><td>Mail</td><td><input type="text" name="umail" value="<?php echo $row['umail'];?>"></td></tr>
		<tr><td>Type</td><td><input type="text" name="utype" value="<?php echo $row['utype'];?>"></td></tr>
		<tr><td>City</td><td><input type="text" name="ucity" value="<?php echo $row['ucity'];?>"></td></tr>
		<tr><td>Mobile</td><td><input type="text" name="umobile" value="<?php echo $row['umobile'];?>"></td></tr>
		<tr><td>Password</td><td><input type="password" name="u_password" value="<?php echo $row['u_password'];?>"></td></tr>
		<tr><th colspan="2" rowspan="2"><input type="submit" name="t6" value="Update"></th></tr>
	
</form>
</table>
</div>
</body>
</html>
