<?php
session_start();
error_reporting(0);
include('conn.php');


$email =$_POST['email'];
$password =$_POST['password'];
$name = $_POST['firstname'];

$q = "SELECT `E_mail`, `Password`, Status FROM `registration` WHERE `E_mail` = '$email' && `Password` = '$password'";

$data = mysqli_query($con,$q);
$num = mysqli_num_rows($data);
$rec = mysqli_fetch_array($data);
//echo $rec['Status'];exit();
if ($rec['Status'] == "Block")
{
	$_SESSION['username'] = $email;
	header('location:/dash/Soppurt.php');
	//echo '<script>window.open("/Res/Login.php","_self");</script>';
}	
else if($num == 1){
	$_SESSION['username'] = $email;
	header('location:/dash/Dash.php');
}else{
	echo "<script>alert('Password Is Wrong');</script>";
	header('location:/Res/Login.php');
}

?>