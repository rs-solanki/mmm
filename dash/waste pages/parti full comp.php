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

// $select2 = "SELECT * FROM `registration` WHERE Invite_email = '$di_2';"; // Level 2
//   $run2 = mysqli_query($con,$select2);
// $row2 = mysqli_num_rows($run2);
// while ($res2 = mysqli_fetch_array($run2)) {
  

?>
<tr>
<td>Member</td>	
<td><?php echo $res1['User_name']; ?></td>	
<td><?php echo $res1['E_mail']; ?></td>	
<td><?php echo $res1['Mobile_number']; ?></td>	
<td><?php echo $res1['Indir']; ?></td>		
<td><?php echo $res1['Country']; ?></td>
<td><?php echo $res1['Ph_amount']; ?></td>	
<td><?php echo $res1['Invite_email']; ?></td>	
<td><?php echo $res1['Status']; ?></td>	
<td><?php echo $res1['Reg_date']; ?></td>	
</tr>

<?php } }  ?>

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
<div class="title_bar">Groups <a href="#" class="hide_div"><</a></div>	

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