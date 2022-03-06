<?php
$con=mysqli_connect("localhost","root","","web");
if($con==false)
{
	die("could not connnect to.".mysqli_error());
}
echo "Connected";
?>