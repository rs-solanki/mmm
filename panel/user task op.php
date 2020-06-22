<?php 
include('Inc/conn.php');
include('function/function.php');

$user_email = $_GET['user_name'];// email
 
 $get_user = "SELECT * FROM  registration WHERE E_mail = '$user_email'";
      $run_user = mysqli_query($con,$get_user);
      $row = mysqli_fetch_array($run_user);
      $user_name = $row['User_name'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>User Task</title>
</head>
<body>
<div style="margin:20px auto;">
	<a href="user task.php">Back</a>
	<form method="POST">
	<div style="margin:50px auto; border: 1px solid black; width: 50%;padding: 30px; box-sizing: border-box;">
	<b>User Name:</b> <input type="text" name="" value="<?php echo $user_email;?>">	<br><br>
	<b>Options:</b> <select name="op">
	<option value="Confirm">Accept</option>	
	<option value="Reject">Reject</option>	
	</select>
<div align="center"><input type="submit" name="ok" value="Submit"></div>
	</div>
</form>
<?php 
$op = $_POST['op'];
$code = $_GET['code'];
$ok = $_POST['ok'];
if(isset($ok)){

$q = "UPDATE user_task SET Status = '$op' WHERE Task_code = '$code'";
$run = mysqli_query($con,$q);

if($run){
echo '<script>window.open("user task.php","_self");</script>';
}else{
	echo '<script>window.open("user task op.php","_self");</script>';
}






//Marvo 
$q1 = "SELECT * FROM ph WHERE Participant_email = '$user_email' AND record_type = 'Main' AND (Type = 'Unconfirm' OR Type = 'Confirm')";
$run1 = mysqli_query($con,$q1);
$result = mysqli_fetch_array($run1);
$Amount = $result['Amount'];
$growth12 = $result['Amount']*2.67/100;
$type_c = $result['Type_c'];
$type = $result['Type'];

$q2 = "SELECT * FROM user_task WHERE user_name = '$user_email' AND Status = 'Confirm'";
$run2 = mysqli_query($con,$q2);
$result2 = mysqli_fetch_array($run2);
$rows = mysqli_num_rows($run2);

$marvo_id = sprintf('%05d',rand(1,9999999999));
$ph_id = sprintf('%05d',rand(1,9999999999));
$bonus_2 = "MMM EXTRA";
$ph_date= date('d-m-Y');

if($rows == 7){

$q3 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$user_name','$user_email','','0','','0','','','','None','$type_c','$Amount','$bonus_2','$growth12','','$ph_date','','','Bonus', '')";

 $runn = mysqli_query($con,$q3);

 $q3 = "UPDATE user_task SET Growth = '2.67%' WHERE user_name = '$user_email'";
 $runns = mysqli_query($con,$q3);

}else{

}

if($rows == 14){

$q3 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$user_name','$user_email','','0','','0','','','','None','$type_c','$Amount','$bonus_2','$growth12','','$ph_date','','','Bonus', '')";

 $runn = mysqli_query($con,$q3);

 $q3 = "UPDATE user_task SET Growth = '2.67%' WHERE user_name = '$user_email'";
 $runns = mysqli_query($con,$q3);

}else{

}

if($rows == 21){

$q3 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$user_name','$user_email','','0','','0','','','','None','$type_c','$Amount','$bonus_2','$growth12','','$ph_date','','','Bonus', '')";

 $runn = mysqli_query($con,$q3);

 $q3 = "UPDATE user_task SET Growth = '2.67%' WHERE user_name = '$user_email'";
 $runns = mysqli_query($con,$q3);

}else{

}

if($rows == 28){

$q3 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$user_name','$user_email','','0','','0','','','','None','$type_c','$Amount','$bonus_2','$growth12','','$ph_date','','','Bonus', '')";

 $runn = mysqli_query($con,$q3);

 $q3 = "UPDATE user_task SET Growth = '2.67%' WHERE user_name = '$user_email'";
 $runns = mysqli_query($con,$q3);

  $q4 = "UPDATE user_task SET Status = 'Completed' WHERE user_name = '$user_email'";
 $runns4 = mysqli_query($con,$q4);

}else{

}




}




?>
</div>

</body>
</html>