<?php
  session_start();
  include 'db_connection.php';
  
  if(isset($_POST['submit'])){

    $login_id= $_SESSION['a'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_no=$_POST['phone_no'];
    $gender = $_POST['gender'];
    $check_in_date = $_POST['check_in_date'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $room_type= $_POST['room_type'];
    $stay_duration=$_POST['stay_duration'];
          
    $sql = "INSERT INTO bookingregistration VALUES ('$login_id','$name','$email','$phone_no','$gender','$check_in_date','$address','$location','$room_type','$stay_duration')";
    $result = mysqli_query($con,$sql);
    if($result){
      header("Location: display.php");
    }
    else{
      echo mysqli_error($con);
    }
  }
?>

<html>
 <head>
  <title>bookingregistration</title>
 </head>
<body bgcolor="#DE3163">

 <h2 align="center"><b>BOOKING REGISTRATION</b></h2>
 <form action="#" method="post">
  <table  border="2" align="center">
  <td>
  Name</td><td><input type="text" name="name" required></td></tr>
  <tr><td>Email</td><td><input type="email" bgcolor="pink" placeholder="Enter your email" pattern="[^ @]*@[^ @]*" name="email"></td></tr>

  <tr><td><label for="phone_no">Mob No</td><td><input type="phone" name="phone_no" id="phone_no"  required placeholder="123-45-6789"></td></tr>
  
  <tr><td>Gender</td><td><input type="radio"  value="Female" name="gender" >Female
         <input type="radio" name="gender" value="Male">Male
         <input type="radio" name="gender" value="Other">Other</td></tr>
 <tr><td> Check in date:</td><td><input type="date" name="check_in_date" ></td></tr>
  <tr><td>Address:</td>
  <td><textarea name="address" placeholder="address" rows="5" cols="50"></textarea></td></tr>
  <tr><td>Location</td><td><input type="text" placeholder="Enter your  location" name="location"></td></tr>
  <tr><td>Room Type</td>
 <td><select name="room_type" id="room_type">
  <option>Single</option>
  <option>Double</option>
  <option>Triple</option>
 
  </select></td></tr>
 
<tr><td>Stay duration:(Month)</td><td><input type="number" name="stay_duration"  min="1" max="12"></td></tr>
  
<tr><td colspan="2" align="center">  <input type="submit" name="submit" value="submit" >
  <input type="reset" name="reset" value="Reset"></td></tr>
        </body>
        </html>