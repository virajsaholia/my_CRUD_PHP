<?php
error_reporting(0);
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
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['fname'])) 
    {
        $fname = $_REQUEST['fname'];    // removes backslashes
        $fname = mysqli_real_escape_string($conn, $fname);
        $u_password = $_REQUEST['u_password'];
        $u_password = mysqli_real_escape_string($conn, $u_password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE fname='".$_POST['fname']."'AND u_password='".$_POST['u_password']."'";
        $result = mysqli_query($conn, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['fname'] = $fname;
            echo $sql;
            // Redirect to user dashboard page
            //header("Location: mainpg.html");
        }
    }
            ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form</title>
      <link rel="stylesheet" href="lgnstyle.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="content">
         <div class="text">
            Login Form
         </div>
         <form name="f1" onsubmit="return validation()" method="post">
            <div class="field">
               <input type="text" name="fname">
               <span class="fas fa-user"></span>
               <label>Email or Phone</label>
            </div>
            <div class="field">
               <input type="password"name="u_password" >
               <span class="fas fa-lock"></span>
               <label>Password</label>
            </div>
            <div class="forgot-pass">
               <a href="#">Forgot Password?</a>
            </div>
            
            <button type="submit">Sign In</button>
            <div class="sign-up">
               Not a member?
               <a href="#">Create account</a>
            </div>
         </form>
      </div>
      <script src="rscript.js"></script> 

    <script>  
            function validation()  
            {  
                var id=document.f1.fname.value;  
                var ps=document.f1.u_password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>
   </body>
</html>
