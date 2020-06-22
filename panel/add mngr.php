<?php
include('Inc/conn.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Manager</title>
	<style type="text/css">
		table th, td{border:1px solid black;text-align: center;padding: 5px;}
	</style>
</head>
<body>
	<a href="index.php">Back to home</a>
	<h3 align="center">Add Manager</h3>

<table style="border-collapse: collapse; width: 100%;">
<tr>
<th>Name</th>
<th>Email</th>	
<th>Add Manager</th>
<th>Delete Manager</th>
</tr>	

          <?php  
$q = "SELECT * FROM  registration";
$run = mysqli_query($con,$q);


while ($res = mysqli_fetch_array($run)) {

?>
<tr>
<td><?php echo $res['User_name'];?></td>	
<td><?php echo $res['E_mail'];?></td>
<td><a href="add manager.php?email=<?php echo $res['E_mail']; ?>">Add Manager</a></td>
<td><a href="delete manager.php?email=<?php echo $res['E_mail']; ?>">Delete Manager</a></td>
</tr>
<?php } ?>
</table>
</body>
</html>