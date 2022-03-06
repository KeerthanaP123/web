<?php
  include 'db_connection.php';
  
  if(isset($_POST['submit']))
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $phone_no = $_POST['phone_no'];
    $pswd = $_POST['password'];

    $email_check = mysqli_query($con,"SELECT login_id FROM login WHERE email='$email'");
    if(mysqli_num_rows($email_check) >= 1){
        echo "<script>
          alert('This EmailID already registered !! Please login.');
          window.location.href='login.php';
        </script>";
    }
    else{
      $sql = "INSERT INTO `login`(`name`, `email`, `dob`, `phone_no`, `passwrd`) VALUES ('$name','$email','$dob','$phone_no','$pswd')";
      $result = mysqli_query($con,$sql);
      if($result){
        $sql = "SELECT * From login where email = '$email' and passwrd = '$password'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
        $_SESSION['a'] = $row['login_id'];
        
        // echo "The login id is : ".$_SESSION['a'];
        header("location: index.html");
      }
      else{
        echo mysqli_error($con);
      }
    }
  }
?>

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style1.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="registration.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" placeholder="Enter your name" required name="name">
          </div>
          <div class="input-box">
            <span class="details">DOB</span>
            <input type="date"  required name="dob">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" required name="email">
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" required name="phone_no">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" required name="password">
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" required>
          </div>
        </div>
        
        <div class="button">
          <input type="submit" name="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
