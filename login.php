<?php
session_start();
include 'db_connection.php';


	if(isset($_POST['login']))
	{
		$email = $_POST['email'];
	  	$password = $_POST['pswd'];
	  	$sql = "SELECT * From login where email = '$email' and passwrd = '$password'";
	  	$result = mysqli_query($con,$sql);
	  	$row = mysqli_fetch_array($result);
	  	$_SESSION['a'] = $row['login_id'];
	  	$_SESSION['user_email'] = $row['email'];
	  	// echo "The login id is : ".$_SESSION['a'];
		header("location: booking.php");
   	}
?>

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Login Form | CodingLab </title>--->
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="container">
      <form action="login.php" method="post">
        <div class="title">Login</div>
        <div class="input-box underline">
          <input type="text" placeholder="Enter Your Email" required name="email">
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Enter Your Password" required name="pswd">
          <div class="underline"></div>
        </div>
        <div class="input-box button">
          <input type="submit" name="login" value="Login">
        </div>
      </form>
        
         
    </div>
  </body>
</html>

