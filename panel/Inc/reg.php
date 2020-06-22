<?php  
$email = $_GET['new_id'];
$q = "SELECT * FROM  registration WHERE E_mail = '$email'";
$run = mysqli_query($con,$q);
$res = mysqli_fetch_array($run);

$name = $res['User_name'];



?>