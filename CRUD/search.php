
<?php
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



$sql = "SELECT * FROM user where uid='".$_GET['text']."'";
$result = mysqli_query($conn,$sql);

?>
<link rel='stylesheet' href='tblstyle.css'>
<h2>Your Users</h2>
<table>
<tr>
<td>uid</td>
<td>fname</td>
<td>umail</td>
<td>umobile</td>
</tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
echo '
<tr>
<td>'.$row['uid'].'</td>
<td>'.$row['fname'].'</td>
<td>'.$row['umail'].'</td>
<td>'.$row['umobile'].'</td>
</tr>
';
}
?>
</table>
