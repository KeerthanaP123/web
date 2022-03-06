<?php
include 'conne.php';
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$rollno=$_POST['rollno'];
	$address=$_POST['address'];
	$age=$_POST['age'];
	$sql="INSERT INTO pro(name,rollno,address,age)VALUES('$name','$rollno','$address','$age')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		echo("record added sucessfully");
	}
	else
	{
		echo("erreor");
	}
}
?>
<html>
<body>
<form method="POST" action="add.php">
<table border="10">
<tr>
<td>name<input type="text" name="name"></td></tr>
<tr>
<td>rollno<input type="text" name="rollno"></td></tr>
<tr>
<td>address<input type="text" name="address"></td></tr>
<tr>
<td>age<input type="text" name="age"></td></tr>
<tr>
<td><input type="submit" name="submit"  value="register">
<input type="submit" name="reset"  value="reset">
</form>
</body>
</html>