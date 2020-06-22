<?php
error_reporting(0);
include('Include/conn.php');
include('Include/user_details.php');
if($user_status=="Block")
  header('location:/dash/Soppurt.php');      
?>
<!DOCTYPE html>
<html>
<head>
	<title>Participant</title>
	<link rel="stylesheet" type="text/css" href="Css/parti.css">
	<script type="text/javascript" src="Js/jquery-3.3.1.min.js"></script>
</head>
<body>
<?php include('Include/header.php'); ?>

<div class="body">
<div class="title_bar">
<a href="javascript:void(0);" style="text-decoration: none;font-size: 20px; color: #000000;margin-left: 20px;border-radius: 20px;
    box-sizing: border-box;padding-left: 8px;background: white;" title="Open Group Bar" class="open_bar"> --> </a>
	<span style="color: white; font-weight: 600; font-size: 13px; margin-left: 30px;">  Participant</span></div>
<!-- <div class="content_area"> -->

<table border="1" style="border-collapse: collapse;" width="100%;">

<tr>
<th>Position</th>
<th>Account Name</th>	
<th>Email</th>
<th>Call Number</th>
<th>Level</th>
<th>Country</th>
<th>Provide Help Amount</th>
<th>Referrer</th>
<th>Status</th>
<th>Date of joining</th>
</tr>	

<!-- Level 1 -->

<?php 
$select = "SELECT * FROM `registration` WHERE Invite_email = '$user';";
$run = mysqli_query($con,$select);
$row = mysqli_num_rows($run);
// $res = mysqli_fetch_array($run);
while ($res = mysqli_fetch_array($run)) {
  $direct_email = $res['E_mail'];

  $select1 = "SELECT * FROM `registration` WHERE Invite_email = '$direct_email';"; // Level 1
  $run1 = mysqli_query($con,$select1);
$row1 = mysqli_num_rows($run1);

$update = "UPDATE registration SET Indir = '1' WHERE Invite_email = '$direct_email' ";
  $run_up = mysqli_query($con,$update);
while ($res1 = mysqli_fetch_array($run1)){
$di_2 = $res1['E_mail'];

// $select2 = "SELECT * FROM `registration` WHERE Invite_email = '$di_2';"; // Level 2
//   $run2 = mysqli_query($con,$select2);
// $row2 = mysqli_num_rows($run2);
// while ($res2 = mysqli_fetch_array($run2)) {
  

?>
<tr>
<td><?php echo $res1['Position']; ?></td>	
<td><?php echo $res1['User_name']; ?></td>	
<td><?php echo $res1['E_mail']; ?></td>	
<td><?php echo $res1['Mobile_number']; ?></td>	
<td><?php echo $res1['Indir']; ?></td>		
<td><?php echo $res1['Country']; ?></td>
<td><?php echo $res1['Ph_amount']; ?> <?php echo $res1['Type_c']; ?></td>	
<td><?php echo $res1['Invite_email']; ?></td>	
<td><?php echo $res1['Status']; ?></td>	
<td><?php echo $res1['Reg_date']; ?></td>	
</tr>

<?php } }  ?>


<!-- Level 2 -->
<?php

$select = "SELECT * FROM `registration` WHERE Invite_email = '$user';";
$run = mysqli_query($con,$select);
$row = mysqli_num_rows($run);
// $res = mysqli_fetch_array($run);
while ($res = mysqli_fetch_array($run)) {
  $direct_email = $res['E_mail'];

  $select1 = "SELECT * FROM `registration` WHERE Invite_email = '$direct_email';"; // Level 1
  $run1 = mysqli_query($con,$select1);
$row1 = mysqli_num_rows($run1);
while ($res1 = mysqli_fetch_array($run1)){
$di_2 = $res1['E_mail'];


$select2 = "SELECT * FROM `registration` WHERE Invite_email = '$di_2';"; // Level 2
  $run2 = mysqli_query($con,$select2);
$row2 = mysqli_num_rows($run2);

$update2 = "UPDATE registration SET Indir = '2' WHERE Invite_email = '$di_2' ";
  $run_up2 = mysqli_query($con,$update2);
while ($res2 = mysqli_fetch_array($run2)) {


?>
<tr>
<td><?php echo $res2['Position']; ?></td>	
<td><?php echo $res2['User_name']; ?></td>	
<td><?php echo $res2['E_mail']; ?></td>	
<td><?php echo $res2['Mobile_number']; ?></td>	
<td><?php echo $res2['Indir']; ?></td>		
<td><?php echo $res2['Country']; ?></td>
<td><?php echo $res2['Ph_amount']; ?> <?php echo $res2['Type_c']; ?></td>	
<td><?php echo $res2['Invite_email']; ?></td>	
<td><?php echo $res2['Status']; ?></td>	
<td><?php echo $res2['Reg_date']; ?></td>	
</tr>


<?php } } } ?>

<!-- Level 3 -->

<?php

$select = "SELECT * FROM `registration` WHERE Invite_email = '$user';";
$run = mysqli_query($con,$select);
$row = mysqli_num_rows($run);
// $res = mysqli_fetch_array($run);
while ($res = mysqli_fetch_array($run)) {
  $direct_email = $res['E_mail'];

  $select1 = "SELECT * FROM `registration` WHERE Invite_email = '$direct_email';"; // Level 1
  $run1 = mysqli_query($con,$select1);
$row1 = mysqli_num_rows($run1);
while ($res1 = mysqli_fetch_array($run1)){
$di_2 = $res1['E_mail'];


$select2 = "SELECT * FROM `registration` WHERE Invite_email = '$di_2';"; // Level 2
  $run2 = mysqli_query($con,$select2);
$row2 = mysqli_num_rows($run2);


while ($res2 = mysqli_fetch_array($run2)) {
$di_3 = $res2['E_mail'];

$select3 = "SELECT * FROM `registration` WHERE Invite_email = '$di_3';"; // Level 2
  $run3 = mysqli_query($con,$select3);
$row3 = mysqli_num_rows($run3);

$update3 = "UPDATE registration SET Indir = '3' WHERE Invite_email = '$di_3' ";
  $run_up3 = mysqli_query($con,$update3);
while ($res3 = mysqli_fetch_array($run3)) {



?>
<tr>
<td><?php echo $res3['Position']; ?></td>	
<td><?php echo $res3['User_name']; ?></td>	
<td><?php echo $res3['E_mail']; ?></td>	
<td><?php echo $res3['Mobile_number']; ?></td>	
<td><?php echo $res3['Indir']; ?></td>		
<td><?php echo $res3['Country']; ?></td>
<td><?php echo $res3['Ph_amount']; ?> <?php echo $res3['Type_c']; ?></td>	
<td><?php echo $res3['Invite_email']; ?></td>	
<td><?php echo $res3['Status']; ?></td>	
<td><?php echo $res3['Reg_date']; ?></td>	
</tr>


<?php } } } } ?>

<!-- Level 4 -->

<?php

$select = "SELECT * FROM `registration` WHERE Invite_email = '$user';";
$run = mysqli_query($con,$select);
$row = mysqli_num_rows($run);
// $res = mysqli_fetch_array($run);
while ($res = mysqli_fetch_array($run)) {
  $direct_email = $res['E_mail'];

  $select1 = "SELECT * FROM `registration` WHERE Invite_email = '$direct_email';"; // Level 1
  $run1 = mysqli_query($con,$select1);
$row1 = mysqli_num_rows($run1);
while ($res1 = mysqli_fetch_array($run1)){
$di_2 = $res1['E_mail'];


$select2 = "SELECT * FROM `registration` WHERE Invite_email = '$di_2';"; // Level 2
  $run2 = mysqli_query($con,$select2);
$row2 = mysqli_num_rows($run2);


while ($res2 = mysqli_fetch_array($run2)) {
$di_3 = $res2['E_mail'];

$select3 = "SELECT * FROM `registration` WHERE Invite_email = '$di_3';"; // Level 2
  $run3 = mysqli_query($con,$select3);
$row3 = mysqli_num_rows($run3);

while ($res3 = mysqli_fetch_array($run3)) {
$di_4 = $res3['E_mail'];

$select4 = "SELECT * FROM `registration` WHERE Invite_email = '$di_4';"; // Level 2
  $run4 = mysqli_query($con,$select4);
$row4 = mysqli_num_rows($run4);

$update4 = "UPDATE registration SET Indir = '4' WHERE Invite_email = '$di_4' ";
  $run_up4 = mysqli_query($con,$update4);
while ($res4 = mysqli_fetch_array($run4)) {



?>
<tr>
<td><?php echo $res4['Position']; ?></td>	
<td><?php echo $res4['User_name']; ?></td>	
<td><?php echo $res4['E_mail']; ?></td>	
<td><?php echo $res4['Mobile_number']; ?></td>	
<td><?php echo $res4['Indir']; ?></td>		
<td><?php echo $res4['Country']; ?></td>
<td><?php echo $res4['Ph_amount']; ?> <?php echo $res4['Type_c']; ?></td>	
<td><?php echo $res4['Invite_email']; ?></td>	
<td><?php echo $res4['Status']; ?></td>	
<td><?php echo $res4['Reg_date']; ?></td>	
</tr>


<?php } } } } } ?>

<!-- Level 5 -->

<?php

$select = "SELECT * FROM `registration` WHERE Invite_email = '$user';";
$run = mysqli_query($con,$select);
$row = mysqli_num_rows($run);
// $res = mysqli_fetch_array($run);
while ($res = mysqli_fetch_array($run)) {
  $direct_email = $res['E_mail'];

  $select1 = "SELECT * FROM `registration` WHERE Invite_email = '$direct_email';"; // Level 1
  $run1 = mysqli_query($con,$select1);
$row1 = mysqli_num_rows($run1);
while ($res1 = mysqli_fetch_array($run1)){
$di_2 = $res1['E_mail'];


$select2 = "SELECT * FROM `registration` WHERE Invite_email = '$di_2';"; // Level 2
  $run2 = mysqli_query($con,$select2);
$row2 = mysqli_num_rows($run2);


while ($res2 = mysqli_fetch_array($run2)) {
$di_3 = $res2['E_mail'];

$select3 = "SELECT * FROM `registration` WHERE Invite_email = '$di_3';"; // Level 2
  $run3 = mysqli_query($con,$select3);
$row3 = mysqli_num_rows($run3);

while ($res3 = mysqli_fetch_array($run3)) {
$di_4 = $res3['E_mail'];

$select4 = "SELECT * FROM `registration` WHERE Invite_email = '$di_4';"; // Level 2
  $run4 = mysqli_query($con,$select4);
$row4 = mysqli_num_rows($run4);


while ($res4 = mysqli_fetch_array($run4)) {
$di_5 = $res4['E_mail'];


$select5 = "SELECT * FROM `registration` WHERE Invite_email = '$di_5';"; // Level 2
  $run5 = mysqli_query($con,$select5);
$row5 = mysqli_num_rows($run5);

$update5 = "UPDATE registration SET Indir = '5' WHERE Invite_email = '$di_5'";
  $run_up5 = mysqli_query($con,$update5);
while ($res5 = mysqli_fetch_array($run5)) {


?>
<tr>
<td><?php echo $res5['Position']; ?></td>	
<td><?php echo $res5['User_name']; ?></td>	
<td><?php echo $res5['E_mail']; ?></td>	
<td><?php echo $res5['Mobile_number']; ?></td>	
<td><?php echo $res5['Indir']; ?></td>		
<td><?php echo $res5['Country']; ?></td>
<td><?php echo $res5['Ph_amount']; ?> <?php echo $res5['Type_c']; ?></td>	
<td><?php echo $res5['Invite_email']; ?></td>	
<td><?php echo $res5['Status']; ?></td>	
<td><?php echo $res5['Reg_date']; ?></td>	
</tr>


<?php } } } } } } ?>

<!-- Level 6 -->
<?php

$select = "SELECT * FROM `registration` WHERE Invite_email = '$user';";
$run = mysqli_query($con,$select);
$row = mysqli_num_rows($run);
// $res = mysqli_fetch_array($run);
while ($res = mysqli_fetch_array($run)) {
  $direct_email = $res['E_mail'];

  $select1 = "SELECT * FROM `registration` WHERE Invite_email = '$direct_email';"; // Level 1
  $run1 = mysqli_query($con,$select1);
$row1 = mysqli_num_rows($run1);
while ($res1 = mysqli_fetch_array($run1)){
$di_2 = $res1['E_mail'];


$select2 = "SELECT * FROM `registration` WHERE Invite_email = '$di_2';"; // Level 2
  $run2 = mysqli_query($con,$select2);
$row2 = mysqli_num_rows($run2);


while ($res2 = mysqli_fetch_array($run2)) {
$di_3 = $res2['E_mail'];

$select3 = "SELECT * FROM `registration` WHERE Invite_email = '$di_3';"; // Level 2
  $run3 = mysqli_query($con,$select3);
$row3 = mysqli_num_rows($run3);

while ($res3 = mysqli_fetch_array($run3)) {
$di_4 = $res3['E_mail'];

$select4 = "SELECT * FROM `registration` WHERE Invite_email = '$di_4';"; // Level 2
  $run4 = mysqli_query($con,$select4);
$row4 = mysqli_num_rows($run4);


while ($res4 = mysqli_fetch_array($run4)) {
$di_5 = $res4['E_mail'];


$select5 = "SELECT * FROM `registration` WHERE Invite_email = '$di_5';"; // Level 2
  $run5 = mysqli_query($con,$select5);
$row5 = mysqli_num_rows($run5);


while ($res5 = mysqli_fetch_array($run5)) {
$di_6 = $res5['E_mail'];


$select6 = "SELECT * FROM `registration` WHERE Invite_email = '$di_6';"; // Level 2
  $run6 = mysqli_query($con,$select6);
$row6 = mysqli_num_rows($run6);

$update6 = "UPDATE registration SET Indir = '6' WHERE Invite_email = '$di_6'";
  $run_up6 = mysqli_query($con,$update6);
while ($res6 = mysqli_fetch_array($run6)) {

?>
<tr>
<td><?php echo $res6['Position']; ?></td> 
<td><?php echo $res6['User_name']; ?></td>  
<td><?php echo $res6['E_mail']; ?></td> 
<td><?php echo $res6['Mobile_number']; ?></td>  
<td><?php echo $res6['Indir']; ?></td>    
<td><?php echo $res6['Country']; ?></td>
<td><?php echo $res6['Ph_amount']; ?> <?php echo $res6['Type_c']; ?></td> 
<td><?php echo $res6['Invite_email']; ?></td> 
<td><?php echo $res6['Status']; ?></td> 
<td><?php echo $res6['Reg_date']; ?></td> 
</tr>

<?php } } } } } } } ?>

<!-- Level 7 -->

<?php

$select = "SELECT * FROM `registration` WHERE Invite_email = '$user';";
$run = mysqli_query($con,$select);
$row = mysqli_num_rows($run);
// $res = mysqli_fetch_array($run);
while ($res = mysqli_fetch_array($run)) {
  $direct_email = $res['E_mail'];

  $select1 = "SELECT * FROM `registration` WHERE Invite_email = '$direct_email';"; // Level 1
  $run1 = mysqli_query($con,$select1);
$row1 = mysqli_num_rows($run1);
while ($res1 = mysqli_fetch_array($run1)){
$di_2 = $res1['E_mail'];


$select2 = "SELECT * FROM `registration` WHERE Invite_email = '$di_2';"; // Level 2
  $run2 = mysqli_query($con,$select2);
$row2 = mysqli_num_rows($run2);


while ($res2 = mysqli_fetch_array($run2)) {
$di_3 = $res2['E_mail'];

$select3 = "SELECT * FROM `registration` WHERE Invite_email = '$di_3';"; // Level 2
  $run3 = mysqli_query($con,$select3);
$row3 = mysqli_num_rows($run3);

while ($res3 = mysqli_fetch_array($run3)) {
$di_4 = $res3['E_mail'];

$select4 = "SELECT * FROM `registration` WHERE Invite_email = '$di_4';"; // Level 2
  $run4 = mysqli_query($con,$select4);
$row4 = mysqli_num_rows($run4);


while ($res4 = mysqli_fetch_array($run4)) {
$di_5 = $res4['E_mail'];


$select5 = "SELECT * FROM `registration` WHERE Invite_email = '$di_5';"; // Level 2
  $run5 = mysqli_query($con,$select5);
$row5 = mysqli_num_rows($run5);


while ($res5 = mysqli_fetch_array($run5)) {
$di_6 = $res5['E_mail'];


$select6 = "SELECT * FROM `registration` WHERE Invite_email = '$di_6';"; // Level 2
  $run6 = mysqli_query($con,$select6);
$row6 = mysqli_num_rows($run6);

while ($res6 = mysqli_fetch_array($run6)) {
  $di_7 = $res6['E_mail'];

  $select7 = "SELECT * FROM `registration` WHERE Invite_email = '$di_7';"; // Level 2
  $run7 = mysqli_query($con,$select7);
$row7 = mysqli_num_rows($run7);


$update7 = "UPDATE registration SET Indir = '7' WHERE Invite_email = '$di_7'";
  $run_up7 = mysqli_query($con,$update7);
while ($res7 = mysqli_fetch_array($run7)) {

?>
<tr>
<td><?php echo $res7['Position']; ?></td> 
<td><?php echo $res7['User_name']; ?></td>  
<td><?php echo $res7['E_mail']; ?></td> 
<td><?php echo $res7['Mobile_number']; ?></td>  
<td><?php echo $res7['Indir']; ?></td>    
<td><?php echo $res7['Country']; ?></td>
<td><?php echo $res7['Ph_amount']; ?> <?php echo $res7['Type_c']; ?></td> 
<td><?php echo $res7['Invite_email']; ?></td> 
<td><?php echo $res7['Status']; ?></td> 
<td><?php echo $res7['Reg_date']; ?></td> 
</tr>

<?php } } } } } } } } ?>

<!-- Level 8 -->

<?php

$select = "SELECT * FROM `registration` WHERE Invite_email = '$user';";
$run = mysqli_query($con,$select);
$row = mysqli_num_rows($run);
// $res = mysqli_fetch_array($run);
while ($res = mysqli_fetch_array($run)) {
  $direct_email = $res['E_mail'];

  $select1 = "SELECT * FROM `registration` WHERE Invite_email = '$direct_email';"; // Level 1
  $run1 = mysqli_query($con,$select1);
$row1 = mysqli_num_rows($run1);
while ($res1 = mysqli_fetch_array($run1)){
$di_2 = $res1['E_mail'];


$select2 = "SELECT * FROM `registration` WHERE Invite_email = '$di_2';"; // Level 2
  $run2 = mysqli_query($con,$select2);
$row2 = mysqli_num_rows($run2);


while ($res2 = mysqli_fetch_array($run2)) {
$di_3 = $res2['E_mail'];

$select3 = "SELECT * FROM `registration` WHERE Invite_email = '$di_3';"; // Level 2
  $run3 = mysqli_query($con,$select3);
$row3 = mysqli_num_rows($run3);

while ($res3 = mysqli_fetch_array($run3)) {
$di_4 = $res3['E_mail'];

$select4 = "SELECT * FROM `registration` WHERE Invite_email = '$di_4';"; // Level 2
  $run4 = mysqli_query($con,$select4);
$row4 = mysqli_num_rows($run4);


while ($res4 = mysqli_fetch_array($run4)) {
$di_5 = $res4['E_mail'];


$select5 = "SELECT * FROM `registration` WHERE Invite_email = '$di_5';"; // Level 2
  $run5 = mysqli_query($con,$select5);
$row5 = mysqli_num_rows($run5);


while ($res5 = mysqli_fetch_array($run5)) {
$di_6 = $res5['E_mail'];


$select6 = "SELECT * FROM `registration` WHERE Invite_email = '$di_6';"; // Level 2
  $run6 = mysqli_query($con,$select6);
$row6 = mysqli_num_rows($run6);

while ($res6 = mysqli_fetch_array($run6)) {
  $di_7 = $res6['E_mail'];

  $select7 = "SELECT * FROM `registration` WHERE Invite_email = '$di_7';"; // Level 2
  $run7 = mysqli_query($con,$select7);
$row7 = mysqli_num_rows($run7);


while ($res7 = mysqli_fetch_array($run7)) {
  $di_8 = $res7['E_mail'];

  $select8 = "SELECT * FROM `registration` WHERE Invite_email = '$di_8';"; // Level 2
  $run8 = mysqli_query($con,$select8);
$row8 = mysqli_num_rows($run8);


$update8 = "UPDATE registration SET Indir = '8' WHERE Invite_email = '$di_8'";
  $run_up8 = mysqli_query($con,$update8);
while ($res8 = mysqli_fetch_array($run8)) {

?>
<tr>
<td><?php echo $res8['Position']; ?></td> 
<td><?php echo $res8['User_name']; ?></td>  
<td><?php echo $res8['E_mail']; ?></td> 
<td><?php echo $res8['Mobile_number']; ?></td>  
<td><?php echo $res8['Indir']; ?></td>    
<td><?php echo $res8['Country']; ?></td>
<td><?php echo $res8['Ph_amount']; ?> <?php echo $res8['Type_c']; ?></td> 
<td><?php echo $res8['Invite_email']; ?></td> 
<td><?php echo $res8['Status']; ?></td> 
<td><?php echo $res8['Reg_date']; ?></td> 
</tr>

<?php } } } } } } } } } ?>

<!-- Level 9 -->

<?php

$select = "SELECT * FROM `registration` WHERE Invite_email = '$user';";
$run = mysqli_query($con,$select);
$row = mysqli_num_rows($run);
// $res = mysqli_fetch_array($run);
while ($res = mysqli_fetch_array($run)) {
  $direct_email = $res['E_mail'];

  $select1 = "SELECT * FROM `registration` WHERE Invite_email = '$direct_email';"; // Level 1
  $run1 = mysqli_query($con,$select1);
$row1 = mysqli_num_rows($run1);
while ($res1 = mysqli_fetch_array($run1)){
$di_2 = $res1['E_mail'];


$select2 = "SELECT * FROM `registration` WHERE Invite_email = '$di_2';"; // Level 2
  $run2 = mysqli_query($con,$select2);
$row2 = mysqli_num_rows($run2);


while ($res2 = mysqli_fetch_array($run2)) {
$di_3 = $res2['E_mail'];

$select3 = "SELECT * FROM `registration` WHERE Invite_email = '$di_3';"; // Level 2
  $run3 = mysqli_query($con,$select3);
$row3 = mysqli_num_rows($run3);

while ($res3 = mysqli_fetch_array($run3)) {
$di_4 = $res3['E_mail'];

$select4 = "SELECT * FROM `registration` WHERE Invite_email = '$di_4';"; // Level 2
  $run4 = mysqli_query($con,$select4);
$row4 = mysqli_num_rows($run4);


while ($res4 = mysqli_fetch_array($run4)) {
$di_5 = $res4['E_mail'];


$select5 = "SELECT * FROM `registration` WHERE Invite_email = '$di_5';"; // Level 2
  $run5 = mysqli_query($con,$select5);
$row5 = mysqli_num_rows($run5);


while ($res5 = mysqli_fetch_array($run5)) {
$di_6 = $res5['E_mail'];


$select6 = "SELECT * FROM `registration` WHERE Invite_email = '$di_6';"; // Level 2
  $run6 = mysqli_query($con,$select6);
$row6 = mysqli_num_rows($run6);

while ($res6 = mysqli_fetch_array($run6)) {
  $di_7 = $res6['E_mail'];

  $select7 = "SELECT * FROM `registration` WHERE Invite_email = '$di_7';"; // Level 2
  $run7 = mysqli_query($con,$select7);
$row7 = mysqli_num_rows($run7);


while ($res7 = mysqli_fetch_array($run7)) {
  $di_8 = $res7['E_mail'];

  $select8 = "SELECT * FROM `registration` WHERE Invite_email = '$di_8';"; // Level 2
  $run8 = mysqli_query($con,$select8);
$row8 = mysqli_num_rows($run8);


while ($res8 = mysqli_fetch_array($run8)) {
  $di_9 = $res8['E_mail'];

$select9 = "SELECT * FROM `registration` WHERE Invite_email = '$di_9';"; // Level 2
  $run9 = mysqli_query($con,$select9);
$row9 = mysqli_num_rows($run9);


$update9 = "UPDATE registration SET Indir = '9' WHERE Invite_email = '$di_9'";
  $run_up9 = mysqli_query($con,$update9);
while ($res9 = mysqli_fetch_array($run9)) {

?>
<tr>
<td><?php echo $res9['Position']; ?></td> 
<td><?php echo $res9['User_name']; ?></td>  
<td><?php echo $res9['E_mail']; ?></td> 
<td><?php echo $res9['Mobile_number']; ?></td>  
<td><?php echo $res9['Indir']; ?></td>    
<td><?php echo $res9['Country']; ?></td>
<td><?php echo $res9['Ph_amount']; ?> <?php echo $res9['Type_c']; ?></td> 
<td><?php echo $res9['Invite_email']; ?></td> 
<td><?php echo $res9['Status']; ?></td> 
<td><?php echo $res9['Reg_date']; ?></td> 
</tr>

<?php } } } } } } } } } } ?>

<!-- Level 10 -->
<?php

$select = "SELECT * FROM `registration` WHERE Invite_email = '$user';";
$run = mysqli_query($con,$select);
$row = mysqli_num_rows($run);
// $res = mysqli_fetch_array($run);
while ($res = mysqli_fetch_array($run)) {
  $direct_email = $res['E_mail'];

  $select1 = "SELECT * FROM `registration` WHERE Invite_email = '$direct_email';"; // Level 1
  $run1 = mysqli_query($con,$select1);
$row1 = mysqli_num_rows($run1);
while ($res1 = mysqli_fetch_array($run1)){
$di_2 = $res1['E_mail'];


$select2 = "SELECT * FROM `registration` WHERE Invite_email = '$di_2';"; // Level 2
  $run2 = mysqli_query($con,$select2);
$row2 = mysqli_num_rows($run2);


while ($res2 = mysqli_fetch_array($run2)) {
$di_3 = $res2['E_mail'];

$select3 = "SELECT * FROM `registration` WHERE Invite_email = '$di_3';"; // Level 2
  $run3 = mysqli_query($con,$select3);
$row3 = mysqli_num_rows($run3);

while ($res3 = mysqli_fetch_array($run3)) {
$di_4 = $res3['E_mail'];

$select4 = "SELECT * FROM `registration` WHERE Invite_email = '$di_4';"; // Level 2
  $run4 = mysqli_query($con,$select4);
$row4 = mysqli_num_rows($run4);


while ($res4 = mysqli_fetch_array($run4)) {
$di_5 = $res4['E_mail'];


$select5 = "SELECT * FROM `registration` WHERE Invite_email = '$di_5';"; // Level 2
  $run5 = mysqli_query($con,$select5);
$row5 = mysqli_num_rows($run5);


while ($res5 = mysqli_fetch_array($run5)) {
$di_6 = $res5['E_mail'];


$select6 = "SELECT * FROM `registration` WHERE Invite_email = '$di_6';"; // Level 2
  $run6 = mysqli_query($con,$select6);
$row6 = mysqli_num_rows($run6);

while ($res6 = mysqli_fetch_array($run6)) {
  $di_7 = $res6['E_mail'];

  $select7 = "SELECT * FROM `registration` WHERE Invite_email = '$di_7';"; // Level 2
  $run7 = mysqli_query($con,$select7);
$row7 = mysqli_num_rows($run7);


while ($res7 = mysqli_fetch_array($run7)) {
  $di_8 = $res7['E_mail'];

  $select8 = "SELECT * FROM `registration` WHERE Invite_email = '$di_8';"; // Level 2
  $run8 = mysqli_query($con,$select8);
$row8 = mysqli_num_rows($run8);


while ($res8 = mysqli_fetch_array($run8)) {
  $di_9 = $res8['E_mail'];

$select9 = "SELECT * FROM `registration` WHERE Invite_email = '$di_9';"; // Level 2
  $run9 = mysqli_query($con,$select9);
$row9 = mysqli_num_rows($run9);



while ($res9 = mysqli_fetch_array($run9)) {
  $di_10 = $res9['E_mail'];

  $select10 = "SELECT * FROM `registration` WHERE Invite_email = '$di_10';"; // Level 2
  $run10 = mysqli_query($con,$select10);
$row10 = mysqli_num_rows($run10);

$update10 = "UPDATE registration SET Indir = '10' WHERE Invite_email = '$di_10'";
  $run_up10 = mysqli_query($con,$update10);
while ($res10 = mysqli_fetch_array($run10)) {

?>
<tr>
<td><?php echo $res10['Position']; ?></td> 
<td><?php echo $res10['User_name']; ?></td>  
<td><?php echo $res10['E_mail']; ?></td> 
<td><?php echo $res10['Mobile_number']; ?></td>  
<td><?php echo $res10['Indir']; ?></td>    
<td><?php echo $res10['Country']; ?></td>
<td><?php echo $res10['Ph_amount']; ?> <?php echo $res10['Type_c']; ?></td> 
<td><?php echo $res10['Invite_email']; ?></td> 
<td><?php echo $res10['Status']; ?></td> 
<td><?php echo $res10['Reg_date']; ?></td> 
</tr>

<?php } } } } } } } } } } } ?>

<!-- Level 11 -->
<?php

$select = "SELECT * FROM `registration` WHERE Invite_email = '$user';";
$run = mysqli_query($con,$select);
$row = mysqli_num_rows($run);
// $res = mysqli_fetch_array($run);
while ($res = mysqli_fetch_array($run)) {
  $direct_email = $res['E_mail'];

  $select1 = "SELECT * FROM `registration` WHERE Invite_email = '$direct_email';"; // Level 1
  $run1 = mysqli_query($con,$select1);
$row1 = mysqli_num_rows($run1);
while ($res1 = mysqli_fetch_array($run1)){
$di_2 = $res1['E_mail'];


$select2 = "SELECT * FROM `registration` WHERE Invite_email = '$di_2';"; // Level 2
  $run2 = mysqli_query($con,$select2);
$row2 = mysqli_num_rows($run2);


while ($res2 = mysqli_fetch_array($run2)) {
$di_3 = $res2['E_mail'];

$select3 = "SELECT * FROM `registration` WHERE Invite_email = '$di_3';"; // Level 2
  $run3 = mysqli_query($con,$select3);
$row3 = mysqli_num_rows($run3);

while ($res3 = mysqli_fetch_array($run3)) {
$di_4 = $res3['E_mail'];

$select4 = "SELECT * FROM `registration` WHERE Invite_email = '$di_4';"; // Level 2
  $run4 = mysqli_query($con,$select4);
$row4 = mysqli_num_rows($run4);


while ($res4 = mysqli_fetch_array($run4)) {
$di_5 = $res4['E_mail'];


$select5 = "SELECT * FROM `registration` WHERE Invite_email = '$di_5';"; // Level 2
  $run5 = mysqli_query($con,$select5);
$row5 = mysqli_num_rows($run5);


while ($res5 = mysqli_fetch_array($run5)) {
$di_6 = $res5['E_mail'];


$select6 = "SELECT * FROM `registration` WHERE Invite_email = '$di_6';"; // Level 2
  $run6 = mysqli_query($con,$select6);
$row6 = mysqli_num_rows($run6);

while ($res6 = mysqli_fetch_array($run6)) {
  $di_7 = $res6['E_mail'];

  $select7 = "SELECT * FROM `registration` WHERE Invite_email = '$di_7';"; // Level 2
  $run7 = mysqli_query($con,$select7);
$row7 = mysqli_num_rows($run7);


while ($res7 = mysqli_fetch_array($run7)) {
  $di_8 = $res7['E_mail'];

  $select8 = "SELECT * FROM `registration` WHERE Invite_email = '$di_8';"; // Level 2
  $run8 = mysqli_query($con,$select8);
$row8 = mysqli_num_rows($run8);


while ($res8 = mysqli_fetch_array($run8)) {
  $di_9 = $res8['E_mail'];

$select9 = "SELECT * FROM `registration` WHERE Invite_email = '$di_9';"; // Level 2
  $run9 = mysqli_query($con,$select9);
$row9 = mysqli_num_rows($run9);



while ($res9 = mysqli_fetch_array($run9)) {
  $di_10 = $res9['E_mail'];

  $select10 = "SELECT * FROM `registration` WHERE Invite_email = '$di_10';"; // Level 2
  $run10 = mysqli_query($con,$select10);
$row10 = mysqli_num_rows($run10);


while ($res10 = mysqli_fetch_array($run10)) {
  $di_11 = $res10['E_mail'];

$select11 = "SELECT * FROM `registration` WHERE Invite_email = '$di_11';"; // Level 2
  $run11 = mysqli_query($con,$select11);
$row11 = mysqli_num_rows($run11);

$update11 = "UPDATE registration SET Indir = '11' WHERE Invite_email = '$di_11'";
  $run_up11 = mysqli_query($con,$update11);
while ($res11 = mysqli_fetch_array($run11)) {

?>
<tr>
<td><?php echo $res11['Position']; ?></td> 
<td><?php echo $res11['User_name']; ?></td>  
<td><?php echo $res11['E_mail']; ?></td> 
<td><?php echo $res11['Mobile_number']; ?></td>  
<td><?php echo $res11['Indir']; ?></td>    
<td><?php echo $res11['Country']; ?></td>
<td><?php echo $res11['Ph_amount']; ?> <?php echo $res11['Type_c']; ?></td> 
<td><?php echo $res11['Invite_email']; ?></td> 
<td><?php echo $res11['Status']; ?></td> 
<td><?php echo $res11['Reg_date']; ?></td> 
</tr>

<?php } } } } } } } } } } } } ?>

<!-- Level 12 -->
<?php

$select = "SELECT * FROM `registration` WHERE Invite_email = '$user';";
$run = mysqli_query($con,$select);
$row = mysqli_num_rows($run);
// $res = mysqli_fetch_array($run);
while ($res = mysqli_fetch_array($run)) {
  $direct_email = $res['E_mail'];

  $select1 = "SELECT * FROM `registration` WHERE Invite_email = '$direct_email';"; // Level 1
  $run1 = mysqli_query($con,$select1);
$row1 = mysqli_num_rows($run1);
while ($res1 = mysqli_fetch_array($run1)){
$di_2 = $res1['E_mail'];


$select2 = "SELECT * FROM `registration` WHERE Invite_email = '$di_2';"; // Level 2
  $run2 = mysqli_query($con,$select2);
$row2 = mysqli_num_rows($run2);


while ($res2 = mysqli_fetch_array($run2)) {
$di_3 = $res2['E_mail'];

$select3 = "SELECT * FROM `registration` WHERE Invite_email = '$di_3';"; // Level 2
  $run3 = mysqli_query($con,$select3);
$row3 = mysqli_num_rows($run3);

while ($res3 = mysqli_fetch_array($run3)) {
$di_4 = $res3['E_mail'];

$select4 = "SELECT * FROM `registration` WHERE Invite_email = '$di_4';"; // Level 2
  $run4 = mysqli_query($con,$select4);
$row4 = mysqli_num_rows($run4);


while ($res4 = mysqli_fetch_array($run4)) {
$di_5 = $res4['E_mail'];


$select5 = "SELECT * FROM `registration` WHERE Invite_email = '$di_5';"; // Level 2
  $run5 = mysqli_query($con,$select5);
$row5 = mysqli_num_rows($run5);


while ($res5 = mysqli_fetch_array($run5)) {
$di_6 = $res5['E_mail'];


$select6 = "SELECT * FROM `registration` WHERE Invite_email = '$di_6';"; // Level 2
  $run6 = mysqli_query($con,$select6);
$row6 = mysqli_num_rows($run6);

while ($res6 = mysqli_fetch_array($run6)) {
  $di_7 = $res6['E_mail'];

  $select7 = "SELECT * FROM `registration` WHERE Invite_email = '$di_7';"; // Level 2
  $run7 = mysqli_query($con,$select7);
$row7 = mysqli_num_rows($run7);


while ($res7 = mysqli_fetch_array($run7)) {
  $di_8 = $res7['E_mail'];

  $select8 = "SELECT * FROM `registration` WHERE Invite_email = '$di_8';"; // Level 2
  $run8 = mysqli_query($con,$select8);
$row8 = mysqli_num_rows($run8);


while ($res8 = mysqli_fetch_array($run8)) {
  $di_9 = $res8['E_mail'];

$select9 = "SELECT * FROM `registration` WHERE Invite_email = '$di_9';"; // Level 2
  $run9 = mysqli_query($con,$select9);
$row9 = mysqli_num_rows($run9);



while ($res9 = mysqli_fetch_array($run9)) {
  $di_10 = $res9['E_mail'];

  $select10 = "SELECT * FROM `registration` WHERE Invite_email = '$di_10';"; // Level 2
  $run10 = mysqli_query($con,$select10);
$row10 = mysqli_num_rows($run10);


while ($res10 = mysqli_fetch_array($run10)) {
  $di_11 = $res10['E_mail'];

$select11 = "SELECT * FROM `registration` WHERE Invite_email = '$di_11';"; // Level 2
  $run11 = mysqli_query($con,$select11);
$row11 = mysqli_num_rows($run11);


while ($res11 = mysqli_fetch_array($run11)) {
 $di_12 = $res11['E_mail'];


$select12 = "SELECT * FROM `registration` WHERE Invite_email = '$di_12';"; // Level 2
  $run12 = mysqli_query($con,$select12);
$row12 = mysqli_num_rows($run12); 

$update12 = "UPDATE registration SET Indir = '12' WHERE Invite_email = '$di_12'";
  $run_up12 = mysqli_query($con,$update12);
while ($res12 = mysqli_fetch_array($run12)) {

?>
<tr>
<td><?php echo $res12['Position']; ?></td> 
<td><?php echo $res12['User_name']; ?></td>  
<td><?php echo $res12['E_mail']; ?></td> 
<td><?php echo $res12['Mobile_number']; ?></td>  
<td><?php echo $res12['Indir']; ?></td>    
<td><?php echo $res12['Country']; ?></td>
<td><?php echo $res12['Ph_amount']; ?> <?php echo $res12['Type_c']; ?></td> 
<td><?php echo $res12['Invite_email']; ?></td> 
<td><?php echo $res12['Status']; ?></td> 
<td><?php echo $res12['Reg_date']; ?></td> 
</tr>

<?php } } } } } } } } } } } } } ?>

<!-- Level 13 -->
<?php

$select = "SELECT * FROM `registration` WHERE Invite_email = '$user';";
$run = mysqli_query($con,$select);
$row = mysqli_num_rows($run);
// $res = mysqli_fetch_array($run);
while ($res = mysqli_fetch_array($run)) {
  $direct_email = $res['E_mail'];

  $select1 = "SELECT * FROM `registration` WHERE Invite_email = '$direct_email';"; // Level 1
  $run1 = mysqli_query($con,$select1);
$row1 = mysqli_num_rows($run1);
while ($res1 = mysqli_fetch_array($run1)){
$di_2 = $res1['E_mail'];


$select2 = "SELECT * FROM `registration` WHERE Invite_email = '$di_2';"; // Level 2
  $run2 = mysqli_query($con,$select2);
$row2 = mysqli_num_rows($run2);


while ($res2 = mysqli_fetch_array($run2)) {
$di_3 = $res2['E_mail'];

$select3 = "SELECT * FROM `registration` WHERE Invite_email = '$di_3';"; // Level 2
  $run3 = mysqli_query($con,$select3);
$row3 = mysqli_num_rows($run3);

while ($res3 = mysqli_fetch_array($run3)) {
$di_4 = $res3['E_mail'];

$select4 = "SELECT * FROM `registration` WHERE Invite_email = '$di_4';"; // Level 2
  $run4 = mysqli_query($con,$select4);
$row4 = mysqli_num_rows($run4);


while ($res4 = mysqli_fetch_array($run4)) {
$di_5 = $res4['E_mail'];


$select5 = "SELECT * FROM `registration` WHERE Invite_email = '$di_5';"; // Level 2
  $run5 = mysqli_query($con,$select5);
$row5 = mysqli_num_rows($run5);


while ($res5 = mysqli_fetch_array($run5)) {
$di_6 = $res5['E_mail'];


$select6 = "SELECT * FROM `registration` WHERE Invite_email = '$di_6';"; // Level 2
  $run6 = mysqli_query($con,$select6);
$row6 = mysqli_num_rows($run6);

while ($res6 = mysqli_fetch_array($run6)) {
  $di_7 = $res6['E_mail'];

  $select7 = "SELECT * FROM `registration` WHERE Invite_email = '$di_7';"; // Level 2
  $run7 = mysqli_query($con,$select7);
$row7 = mysqli_num_rows($run7);


while ($res7 = mysqli_fetch_array($run7)) {
  $di_8 = $res7['E_mail'];

  $select8 = "SELECT * FROM `registration` WHERE Invite_email = '$di_8';"; // Level 2
  $run8 = mysqli_query($con,$select8);
$row8 = mysqli_num_rows($run8);


while ($res8 = mysqli_fetch_array($run8)) {
  $di_9 = $res8['E_mail'];

$select9 = "SELECT * FROM `registration` WHERE Invite_email = '$di_9';"; // Level 2
  $run9 = mysqli_query($con,$select9);
$row9 = mysqli_num_rows($run9);



while ($res9 = mysqli_fetch_array($run9)) {
  $di_10 = $res9['E_mail'];

  $select10 = "SELECT * FROM `registration` WHERE Invite_email = '$di_10';"; // Level 2
  $run10 = mysqli_query($con,$select10);
$row10 = mysqli_num_rows($run10);


while ($res10 = mysqli_fetch_array($run10)) {
  $di_11 = $res10['E_mail'];

$select11 = "SELECT * FROM `registration` WHERE Invite_email = '$di_11';"; // Level 2
  $run11 = mysqli_query($con,$select11);
$row11 = mysqli_num_rows($run11);


while ($res11 = mysqli_fetch_array($run11)) {
 $di_12 = $res11['E_mail'];


$select12 = "SELECT * FROM `registration` WHERE Invite_email = '$di_12';"; // Level 2
  $run12 = mysqli_query($con,$select12);
$row12 = mysqli_num_rows($run12); 


while ($res12 = mysqli_fetch_array($run12)) {
 $di_13 = $res12['E_mail'];

$select13 = "SELECT * FROM `registration` WHERE Invite_email = '$di_13';"; // Level 2
  $run13 = mysqli_query($con,$select13);
$row13 = mysqli_num_rows($run13); 

$update13 = "UPDATE registration SET Indir = '13' WHERE Invite_email = '$di_13'";
  $run_up13 = mysqli_query($con,$update13);
while ($res13 = mysqli_fetch_array($run13)) {

?>
<tr>
<td><?php echo $res13['Position']; ?></td> 
<td><?php echo $res13['User_name']; ?></td>  
<td><?php echo $res13['E_mail']; ?></td> 
<td><?php echo $res13['Mobile_number']; ?></td>  
<td><?php echo $res13['Indir']; ?></td>    
<td><?php echo $res13['Country']; ?></td>
<td><?php echo $res13['Ph_amount']; ?> <?php echo $res13['Type_c']; ?></td> 
<td><?php echo $res13['Invite_email']; ?></td> 
<td><?php echo $res13['Status']; ?></td> 
<td><?php echo $res13['Reg_date']; ?></td> 
</tr>

<?php } } } } } } } } } } } } }  } ?>
 
 <!-- Level 14 -->
<?php

$select = "SELECT * FROM `registration` WHERE Invite_email = '$user';";
$run = mysqli_query($con,$select);
$row = mysqli_num_rows($run);
// $res = mysqli_fetch_array($run);
while ($res = mysqli_fetch_array($run)) {
  $direct_email = $res['E_mail'];

  $select1 = "SELECT * FROM `registration` WHERE Invite_email = '$direct_email';"; // Level 1
  $run1 = mysqli_query($con,$select1);
$row1 = mysqli_num_rows($run1);
while ($res1 = mysqli_fetch_array($run1)){
$di_2 = $res1['E_mail'];


$select2 = "SELECT * FROM `registration` WHERE Invite_email = '$di_2';"; // Level 2
  $run2 = mysqli_query($con,$select2);
$row2 = mysqli_num_rows($run2);


while ($res2 = mysqli_fetch_array($run2)) {
$di_3 = $res2['E_mail'];

$select3 = "SELECT * FROM `registration` WHERE Invite_email = '$di_3';"; // Level 2
  $run3 = mysqli_query($con,$select3);
$row3 = mysqli_num_rows($run3);

while ($res3 = mysqli_fetch_array($run3)) {
$di_4 = $res3['E_mail'];

$select4 = "SELECT * FROM `registration` WHERE Invite_email = '$di_4';"; // Level 2
  $run4 = mysqli_query($con,$select4);
$row4 = mysqli_num_rows($run4);


while ($res4 = mysqli_fetch_array($run4)) {
$di_5 = $res4['E_mail'];


$select5 = "SELECT * FROM `registration` WHERE Invite_email = '$di_5';"; // Level 2
  $run5 = mysqli_query($con,$select5);
$row5 = mysqli_num_rows($run5);


while ($res5 = mysqli_fetch_array($run5)) {
$di_6 = $res5['E_mail'];


$select6 = "SELECT * FROM `registration` WHERE Invite_email = '$di_6';"; // Level 2
  $run6 = mysqli_query($con,$select6);
$row6 = mysqli_num_rows($run6);

while ($res6 = mysqli_fetch_array($run6)) {
  $di_7 = $res6['E_mail'];

  $select7 = "SELECT * FROM `registration` WHERE Invite_email = '$di_7';"; // Level 2
  $run7 = mysqli_query($con,$select7);
$row7 = mysqli_num_rows($run7);


while ($res7 = mysqli_fetch_array($run7)) {
  $di_8 = $res7['E_mail'];

  $select8 = "SELECT * FROM `registration` WHERE Invite_email = '$di_8';"; // Level 2
  $run8 = mysqli_query($con,$select8);
$row8 = mysqli_num_rows($run8);


while ($res8 = mysqli_fetch_array($run8)) {
  $di_9 = $res8['E_mail'];

$select9 = "SELECT * FROM `registration` WHERE Invite_email = '$di_9';"; // Level 2
  $run9 = mysqli_query($con,$select9);
$row9 = mysqli_num_rows($run9);



while ($res9 = mysqli_fetch_array($run9)) {
  $di_10 = $res9['E_mail'];

  $select10 = "SELECT * FROM `registration` WHERE Invite_email = '$di_10';"; // Level 2
  $run10 = mysqli_query($con,$select10);
$row10 = mysqli_num_rows($run10);


while ($res10 = mysqli_fetch_array($run10)) {
  $di_11 = $res10['E_mail'];

$select11 = "SELECT * FROM `registration` WHERE Invite_email = '$di_11';"; // Level 2
  $run11 = mysqli_query($con,$select11);
$row11 = mysqli_num_rows($run11);


while ($res11 = mysqli_fetch_array($run11)) {
 $di_12 = $res11['E_mail'];


$select12 = "SELECT * FROM `registration` WHERE Invite_email = '$di_12';"; // Level 2
  $run12 = mysqli_query($con,$select12);
$row12 = mysqli_num_rows($run12); 


while ($res12 = mysqli_fetch_array($run12)) {
 $di_13 = $res12['E_mail'];

$select13 = "SELECT * FROM `registration` WHERE Invite_email = '$di_13';"; // Level 2
  $run13 = mysqli_query($con,$select13);
$row13 = mysqli_num_rows($run13); 


while ($res13 = mysqli_fetch_array($run13)) {
      $di_14 = $res13['E_mail'];

      $select14 = "SELECT * FROM `registration` WHERE Invite_email = '$di_14';"; // Level 2
      $run14 = mysqli_query($con,$select14);
      $row14 = mysqli_num_rows($run14);

      $update14 = "UPDATE registration SET Indir = '14' WHERE Invite_email = '$di_14'";
  $run_up14 = mysqli_query($con,$update14);
while ($res14 = mysqli_fetch_array($run14)) {
?>
<tr>
<td><?php echo $res14['Position']; ?></td> 
<td><?php echo $res14['User_name']; ?></td>  
<td><?php echo $res14['E_mail']; ?></td> 
<td><?php echo $res14['Mobile_number']; ?></td>  
<td><?php echo $res14['Indir']; ?></td>    
<td><?php echo $res14['Country']; ?></td>
<td><?php echo $res14['Ph_amount']; ?> <?php echo $res14['Type_c']; ?></td> 
<td><?php echo $res14['Invite_email']; ?></td> 
<td><?php echo $res14['Status']; ?></td> 
<td><?php echo $res14['Reg_date']; ?></td> 
</tr>

<?php } } } } } } } } } } } } }  } } ?>

<!-- Level 15 -->
<?php

$select = "SELECT * FROM `registration` WHERE Invite_email = '$user';";
$run = mysqli_query($con,$select);
$row = mysqli_num_rows($run);
// $res = mysqli_fetch_array($run);
while ($res = mysqli_fetch_array($run)) {
  $direct_email = $res['E_mail'];

  $select1 = "SELECT * FROM `registration` WHERE Invite_email = '$direct_email';"; // Level 1
  $run1 = mysqli_query($con,$select1);
$row1 = mysqli_num_rows($run1);
while ($res1 = mysqli_fetch_array($run1)){
$di_2 = $res1['E_mail'];


$select2 = "SELECT * FROM `registration` WHERE Invite_email = '$di_2';"; // Level 2
  $run2 = mysqli_query($con,$select2);
$row2 = mysqli_num_rows($run2);


while ($res2 = mysqli_fetch_array($run2)) {
$di_3 = $res2['E_mail'];

$select3 = "SELECT * FROM `registration` WHERE Invite_email = '$di_3';"; // Level 2
  $run3 = mysqli_query($con,$select3);
$row3 = mysqli_num_rows($run3);

while ($res3 = mysqli_fetch_array($run3)) {
$di_4 = $res3['E_mail'];

$select4 = "SELECT * FROM `registration` WHERE Invite_email = '$di_4';"; // Level 2
  $run4 = mysqli_query($con,$select4);
$row4 = mysqli_num_rows($run4);


while ($res4 = mysqli_fetch_array($run4)) {
$di_5 = $res4['E_mail'];


$select5 = "SELECT * FROM `registration` WHERE Invite_email = '$di_5';"; // Level 2
  $run5 = mysqli_query($con,$select5);
$row5 = mysqli_num_rows($run5);


while ($res5 = mysqli_fetch_array($run5)) {
$di_6 = $res5['E_mail'];


$select6 = "SELECT * FROM `registration` WHERE Invite_email = '$di_6';"; // Level 2
  $run6 = mysqli_query($con,$select6);
$row6 = mysqli_num_rows($run6);

while ($res6 = mysqli_fetch_array($run6)) {
  $di_7 = $res6['E_mail'];

  $select7 = "SELECT * FROM `registration` WHERE Invite_email = '$di_7';"; // Level 2
  $run7 = mysqli_query($con,$select7);
$row7 = mysqli_num_rows($run7);


while ($res7 = mysqli_fetch_array($run7)) {
  $di_8 = $res7['E_mail'];

  $select8 = "SELECT * FROM `registration` WHERE Invite_email = '$di_8';"; // Level 2
  $run8 = mysqli_query($con,$select8);
$row8 = mysqli_num_rows($run8);


while ($res8 = mysqli_fetch_array($run8)) {
  $di_9 = $res8['E_mail'];

$select9 = "SELECT * FROM `registration` WHERE Invite_email = '$di_9';"; // Level 2
  $run9 = mysqli_query($con,$select9);
$row9 = mysqli_num_rows($run9);



while ($res9 = mysqli_fetch_array($run9)) {
  $di_10 = $res9['E_mail'];

  $select10 = "SELECT * FROM `registration` WHERE Invite_email = '$di_10';"; // Level 2
  $run10 = mysqli_query($con,$select10);
$row10 = mysqli_num_rows($run10);


while ($res10 = mysqli_fetch_array($run10)) {
  $di_11 = $res10['E_mail'];

$select11 = "SELECT * FROM `registration` WHERE Invite_email = '$di_11';"; // Level 2
  $run11 = mysqli_query($con,$select11);
$row11 = mysqli_num_rows($run11);


while ($res11 = mysqli_fetch_array($run11)) {
 $di_12 = $res11['E_mail'];


$select12 = "SELECT * FROM `registration` WHERE Invite_email = '$di_12';"; // Level 2
  $run12 = mysqli_query($con,$select12);
$row12 = mysqli_num_rows($run12); 


while ($res12 = mysqli_fetch_array($run12)) {
 $di_13 = $res12['E_mail'];

$select13 = "SELECT * FROM `registration` WHERE Invite_email = '$di_13';"; // Level 2
  $run13 = mysqli_query($con,$select13);
$row13 = mysqli_num_rows($run13); 


while ($res13 = mysqli_fetch_array($run13)) {
      $di_14 = $res13['E_mail'];

      $select14 = "SELECT * FROM `registration` WHERE Invite_email = '$di_14';"; // Level 2
      $run14 = mysqli_query($con,$select14);
      $row14 = mysqli_num_rows($run14);

     
while ($res14 = mysqli_fetch_array($run14)) {

  $di_15 = $res14['E_mail'];

  $select15 = "SELECT * FROM `registration` WHERE Invite_email = '$di_15';"; // Level 2
      $run15 = mysqli_query($con,$select15);
      $row15 = mysqli_num_rows($run15);

            $update15 = "UPDATE registration SET Indir = '15' WHERE Invite_email = '$di_15'";
  $run_up15 = mysqli_query($con,$update15);
while ($res15 = mysqli_fetch_array($run15)) {

?>
<tr>
<td><?php echo $res15['Position']; ?></td> 
<td><?php echo $res15['User_name']; ?></td>  
<td><?php echo $res15['E_mail']; ?></td> 
<td><?php echo $res15['Mobile_number']; ?></td>  
<td><?php echo $res15['Indir']; ?></td>    
<td><?php echo $res15['Country']; ?></td>
<td><?php echo $res15['Ph_amount']; ?> <?php echo $res15['Type_c']; ?></td> 
<td><?php echo $res15['Invite_email']; ?></td> 
<td><?php echo $res15['Status']; ?></td> 
<td><?php echo $res15['Reg_date']; ?></td> 
</tr>

<?php } } } } } } } } } } } } }  } } } ?>
 

</table>

	
<!-- </div> -->


<div style="position: fixed;bottom: 0; width: 100%; height: 40px;background: white; border-top: 1px solid black; padding-top: 5px;">

<div style="display: ; flex-direction: row;">
<div style="width: 100%;height: 30px;padding: 10px; box-sizing: border-box;" class="pagination">
<ul style="margin: 0px; padding: 0px;">
<li>
<select style="margin: 2px 0 0 0;width: 40px;height: 20px;">
<option value="10">10</option>
<option value="20">20</option>  
<option value="30">30</option>
<option value="40">40</option>
</select> 
</li> 
<li>
<a class="pleftfull" href=""><span></span></a>
<a class="pleft" href=""><span></span></a>  
</li>
<li>Page <input type="text" value="1" style="width: 30px;"> of 1</li>
<li class="last">
<a class="prightfull" href=""><span></span></a>
<a class="pright" href=""><span></span></a> 
</li>
</ul>
  
</div>
</div>


<!-- <span style="position: absolute;right: 20px;bottom: 20px;font-size: 13px;">Display 1 to <?php echo $row1; ?> of <?php echo $row1; ?> items</span>
 -->
</div>

<!-- hidebar -->
<div class="hidebar">
<div class="title_bar" style="color: white;">Groups <a href="#" class="hide_div"><</a></div>	

  <?php

$particapnt = "SELECT * FROM  registration WHERE Invite_email = '$user'";
      $run_parti = mysqli_query($con,$particapnt);
      $rows = mysqli_num_rows($run_parti);
      $pati_row = mysqli_fetch_array($run_parti);
      // $emaill = $pati_row[];


              ?>


 <ul class="member_tree">
            <li id="parent_tree" class=""><div class="tree_node"><span class="icon_m caret"><span class="member_number"><?php echo $user_name; ?> (<?php echo $rows; ?>)</span></span></div>

     <?php 

$select = "SELECT * FROM `registration` WHERE Invite_email = '$user';";
$run = mysqli_query($con,$select);
// $row = mysqli_fetch_array($run);

$row = mysqli_num_rows($run);

while ($res = mysqli_fetch_array($run)) {
	$direct = $res['User_name'];
  $direct_email = $res['E_mail'];
  $select2 = "SELECT * FROM `registration` WHERE Invite_email = '$direct_email';";
  $run1 = mysqli_query($con,$select2);
$row1 = mysqli_num_rows($run1);

?> 

       <ul class="nested" style="list-style: none;">
      <li><div class="tree_node"><span class="icon_m caret"><span class="member_number"><?php echo $res['User_name']; ?> (<?php echo $row1; ?>)</span></span></div></li>  
       </ul>

<?php } ?>

</li>                   
</ul>


</div>

<!-- open hidebar -->
<div class="open_hide">
	
</div>
<!-- End body -->
</div>
<script type="text/javascript">
$(document).ready(function(){

$(".open_bar").click(function(){

	$(".hidebar").show();
});

$(".hide_div").click(function(){

	$(".hidebar").hide();
});



});	


</script>
</body>
</html>