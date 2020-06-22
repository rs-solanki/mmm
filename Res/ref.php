<?php

$select = "SELECT * FROM `registration` WHERE E_mail = '$user';";
$run = mysqli_query($con,$select);
$row = mysqli_num_rows($run);
$result = mysqli_fetch_array($run);
$ref = $result['Invite_email'];


$select1 = "SELECT * FROM `registration` WHERE E_mail = '$ref';";
$run1 = mysqli_query($con,$select1);
$row1= mysqli_num_rows($run1);
$result1 = mysqli_fetch_array($run1);
$namee = $result1['User_name'];
$emaill = $result1['E_mail'];

$qeury = "SELECT * FROM `ph` WHERE record_type='Main' AND Participant = '$user_name';";
$table = mysqli_query($con, $qeury);
$rows= mysqli_num_rows($table);
$php = mysqli_fetch_array($table);
$amount = $php['Amount'];
$type = $php['Type_c'];


if($ref == $emaill){

$ph_id = sprintf('%05d',rand(1,9999999999));
$marvo_id = sprintf('%05d',rand(1,9999999999));
$bonus = "Reffer Bonus 10%";
$ph_date= date('d-m-Y');

$q = "INSERT INTO `ph` VALUES ('','$ph_id','$marvo_id','','','','','$namee','','','0','','0','','','','None','','','$bonus','','','$ph_date','$type','$amount','Bonus', '')";

$run = mysqli_query($con,$q);





}
else{

// echo "<script>alert('Dont');</script>";
}

?>