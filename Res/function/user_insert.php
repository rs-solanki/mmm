<?php
error_reporting(0);
include('Include/conn.php');

 if(isset($_POST['regi'])){

$name = $_POST['firstname']; 
$email =$_POST['email'];
$mobile =$_POST['phone'];
$country = $_POST['Country'];
$password =$_POST['password'];
$invite_email =$_POST['invite'];
$guider_email =$_POST['parent_email'];


$check_user_name = "SELECT * FROM registration WHERE User_name = '$name'";
$run_check = mysqli_query($con,$check_user_name);
$check_same_user = mysqli_num_rows($run_check);

if($check_same_user == 1){
 echo "<script>alert(' User Name  Already  Exist');</script>";
 echo "<script>window.open('Registration.php','_self');</script>";
 exit();

}

$check_email = "SELECT * FROM registration WHERE E_mail = '$email'";
$run_email = mysqli_query($con,$check_email);
$check_same_email = mysqli_num_rows($run_email);

if($check_same_email == 1){
 echo "<script>alert(' Email  Already  Exist');</script>";
 echo "<script>window.open('Registration.php','_self');</script>";
 exit();

}

$select = "SELECT User_id FROM `registration` order by User_id desc limit 1";
$run = mysqli_query($con,$select);
if (mysqli_num_rows($run))
{
	$res = mysqli_fetch_array($run);
	$id_last = $res['User_id'] + 1;
}
else
	$id_last="1";

$insert = "INSERT INTO registration VALUES ('$id_last',NOW(),'$name','$mobile','$country','$email','$password','Participant','Registrar','$invite_email','Member','','','')";
//print_r($_POST);exit();die();
$query = mysqli_query($con,$insert);

if($query){

	 $_SESSION['username'] = $name;
   	echo "<script>window.open('Registration Successful.php','_self');</script>";
}

else{

echo "<script>window.open('Registration.php','_self');</script>";

}



 }

?>