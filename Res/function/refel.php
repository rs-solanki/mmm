<?php
// include('Include/con.php');

$invite_email =$_POST['invite'];
$email =$_POST['email'];

$invite = intval($_GET['invite']);
if(isset($_POST['regi'])){

$select1 = "SELECT * FROM `registration` WHERE E_mail = '$invite_email';";
$run1 = mysqli_query($con,$select1);
$row1= mysqli_num_rows($run1);
$result1 = mysqli_fetch_array($run1);
$namee = $result1['User_name'];
$emaill = $result1['E_mail'];


$qeury = "SELECT * FROM `ph` WHERE record_type='Main' AND Participant_email = '$user_name';";
$table = mysqli_query($con, $qeury);
$rows= mysqli_num_rows($table);
$php = mysqli_fetch_array($table);
$amount = $php['Amount']*10/100;
$type = $php['Type_c'];
// $row_ref = mysqli_num_rows($table);



$ph_id = sprintf('%05d',rand(1,9999999999));
$marvo_id = sprintf('%05d',rand(1,9999999999));
$bonus = "Reffer Bonus 10%";
$ph_date= date('d-m-Y');

$q = "INSERT INTO `ph` VALUES ('','$ph_id','$marvo_id','','','','','$namee','$emaill','','0','','0','','','','None','$type','$amount','$bonus','','','$ph_date','','','Bonus', '')";

$run = mysqli_query($con,$q);



else{

}


}

?>