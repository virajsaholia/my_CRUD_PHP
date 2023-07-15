<?php
error_reporting(0);
require_once("DB_Connection.php");
// echo "Before query";
// echo "<br>First Name : ".$_POST['fname'];
// echo "<br>last Name : ".$_POST['lname'];
// echo "<br>email Name : ".$_POST['umobile'];
// echo "<br>Mobile : ".$_POST['umail'];
// echo "<br>city Name : ".$_POST['ucity'];
// echo "<br>User Type : ".$_POST['utype'];
// echo "<br>Password : ".$_POST['u_password'];



//$sql = "INSERT INTO users (fname, lname, uemail, utype, ucity, umobile) VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['uemail']."','".$_POST['utype']"','".$_POST['ucity']"',".$_POST['umobile'].")";
 $sql = "INSERT INTO users (fname, lname, umail, utype, ucity, umobile, u_password) VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['umail']."','".$_POST['utype']."','".$_POST['ucity']."','".$_POST['umobile']."','".$_POST['u_password']."')";
echo $sql;
if ($conn->query($sql) === TRUE) {
   // echo "<script>window.alert('Your details saved');</script>";

    echo "New record created successfully";
  
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
 header("location:mainpg.html");
  
  $conn->close();
  

?>