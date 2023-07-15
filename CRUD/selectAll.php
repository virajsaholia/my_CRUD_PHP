
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

$sql = "SELECT * FROM `user`";
$result = $conn->query($sql);

?>

<link rel="stylesheet" href="tblstyle.css" >
<h2 align="center">Browse Users</h2>


<form role="search" id="form" name="search" action="search.php">
  <input type="search" id="query" name="text" placeholder="Search..."  aria-label="Search through site content">
  <button>
    <svg viewBox="0 0 1024 1024">
      <path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z"></path></svg>
  </button>
</form>


<table border="1">
<tr>
<td>User ID</td>
<td>First Name</td>
<td>Last Name</td>
<td>Email</td>
<td>Type</td>
<td>City</td>
<td>Mobile</td>
<td>Password</td>
<td colspan="2">operations</td>
</tr>
<?php
while ($row = mysqli_fetch_assoc($result)) {
echo '
<tr>
<td>'.$row['uid'].'</td>
<td>'.$row['fname'].'</td>
<td>'.$row['lname'].'</td>
<td>'.$row['umail'].'</td>
<td>'.$row['utype'].'</td>
<td>'.$row['ucity'].'</td>
<td>'.$row['umobile'].'</td>
<td>'.$row['u_password'].'</td>
<td><a href="edit.php?uid='.$row['uid'].'">Edit</a></td>
<td><a href="delete.php?uid='.$row['uid'].'">Delete</a></td>
</tr>
';
}
?>
</table>

