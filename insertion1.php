<?php
	include 'db_connection.php';
	
      if(isset($_POST['submit']))
     {
	    $name = $_POST['name'];
	    $email = $_POST['email'];
            $phone_no=$_POST['phone_no'];
	    $gender = $_POST['gender'];
	    $check_in_date = $_POST['check_in_date'];
	    $address = $_POST['address'];
            $location = $_POST['location'];
            $room_type= $_POST['room_type'];
            $stay_duration=$_POST['stay_duration'];
            $photo=$_POST['photo'];
	    $sql = "INSERT INTO bookingregistration(`name`, `email`, `phone_no`, `gender`, `check_in_date`, `address`,`location`,`room_type`,`stay_duration`,`photo`) VALUES ('$name','$email','$phone_no','$gender','$check_in_date','$address','$location','$room_type','$stay_duration','$photo')";
	    $result = mysqli_query($con,$sql);
             if($result)
		    {
		     echo "new record added" ;
	             }
	    else
		    {
	            echo mysqli_error($con);
	            }
     }
?>



<html>
	<body>
		<form action = "booking.html" method = "post">
			<table border="1">
			<tr><td>
				 Name :<input type = "text" name = "name" >
			</td></tr>
			<tr><td>
				Email: <input type = "text" name = "email">
			</td></tr>
			<tr><td>
                             Mob no:<input type="number" name="phone_no">
                         </td></tr>
                         <tr><td>Gender:

                                <input type = "radio" value = "Male" name = "gender">Male
				<input type = "radio" value = "Female" name = "gender">Female
                                <input type = "radio" value = "Other" name = "gender">Other


			</td></tr>
                         <tr><td>
                             Check_in_date:<input type="date" name="check_in_date">
                         </td></tr>
                         <tr><td>
                             Address:<input type="textarea"rows="5" cols="50" name="address">
                         </td></tr>
                        <tr><td>
                             Location:<input type="text" name="location">
                         </td></tr>
			<tr><td>Room type:
				<select name = "room_type">
					<option>--select--</option>
					<option value = "SINGLE">SINGLE</option>
					<option value = "DOUBLE">DOUBLE</option>
                                        <option value = "TRIPLE">TRIPLE</option>
				</select>
			</td></tr>
			<tr><td>
				Stay Duration : <input type="number" name="stay_duration"  min="1" max="12"></td></tr>
			</td></tr>
                         <tr><td>
				Photo :<input type="file" name="photo" >
			</td></tr>
			<tr><td>
				<input type = "submit" Value = "Submit" name = "submit">
			</td></tr>
			</table>
		</form>
	</body>
</html>