<?php
$cricket=array(array("ms dhoni",40),
               array("kohli",35),
			   array("dravid",37),
			   array("kapil dev",33))
?>
<html>
<body>
<table border="10">
<tr>
<th>Name</th>
<th>Age</th>
</tr>
<tr><td> <?php echo $cricket[0][0]?></td>
<td> <?php  echo $cricket[0][1]?></td></tr>
<tr><td>  <?php echo $cricket[1][0]?></td>
<td>  <?php echo $cricket[1][1]?></td></tr>
<tr><td>  <?php  echo $cricket[2][0]?></td>
<td> <?php echo $cricket[2][1]?></td></tr>
</table>
</body>
</html>