<html>
<head>
<title>12</title>
</head>
<body>
<form action=" " method="POST">
Username:<input type="text" name="uname"><br>
Password:<input type="password" name="pass"><br>
Confirm Password:<input type="password" name="cpass"><br>
<input type="submit" value="register">
<?php
if(empty($_POST['uname'])||
  empty($_POST['pass'])||
  empty($_POST['cpass']))
   {
    die ("please fill put this fields");
   }
if($_POST['pass']!=$_POST['cpass'])
{
die ("Passwords must be same");
}
else
{
die ("sucessfull");
}
?>
</form>
</body>
</html>	