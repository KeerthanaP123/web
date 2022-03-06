<?php
	$con=mysqli_connect("localhost","root","","exam");
	if($con===false)
	{
		die("ERROR: Could not connect.".mysqli_connect_error());
	}
	echo"Connected Successfully. Host info : ".mysqli_get_host_info($con);
?>