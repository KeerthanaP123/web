<?php
include 'conne.php';
$sql="SELECT * FROM pro";
$result=mysqli_query($con,$sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		?>
<html>
<body>
<table border="1">
<tr><td><?php echo $row['name'];?></td>
<td><?php echo $row['rollno'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['age'];?></td>
	<?php
	}
}
?>
</table>
</body>
</html>
