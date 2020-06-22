<?php
include('Inc/conn.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>User Task</title>
</head>
<body>
	<h2 align="center">User Task</h2>
	<a href="index.php">Home</a>
<div style="padding: 20px; box-sizing: border-box;">	
<table style="border-collapse: collapse; width: 100%;" border="1">
<tr>	
<th>id</th>	
<th>Date</th>
<th>User Name</th>
<th>Link</th>	
<th>Task Code</th>	
<th>Status</th>
<th>View</th>		
</tr>

<?php
$q = "SELECT * FROM `user_task`";
$run = mysqli_query($con,$q);
$row = mysqli_num_rows($run);
while ( $result = mysqli_fetch_array($run)) {

?>
<tr>

<td><?php echo$result['id'];?></td>	
<td><?php echo$result['date_time'];?></td>	
<td><?php echo$result['user_name'];?></td>
<td><?php echo$result['link'];?></td>	
<td><?php echo$result['Task_code'];?></td>	
<td><?php echo$result['Status'];?></td>	
<td><a href="user task op.php?user_name=<?php echo$result['user_name'];?>&code=<?php echo$result['Task_code'];?>">View</a></td>	

</tr>
<?php } ?>
</table>
<div style="margin: 20px 0px;"> Total Items : <?php echo $row;?></div>

</div>

</body>
</html>