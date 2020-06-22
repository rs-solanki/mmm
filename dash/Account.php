<?php 
include('Include/conn.php');
include('function/function.php');
include('Include/user_details.php');
if($user_status=="Block")
  header('location:/dash/Soppurt.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Account</title>
	<link rel="stylesheet" type="text/css" href="Css/account.css">
	<script type="text/javascript" src="Js/jquery-3.3.1.min.js"></script>
</head>
<body>
<?php include('Include/header.php'); ?>
<!-- <div class="tpbg"></div> -->
<div class="mask" align="center">
<!-- alert	 -->
<div class="ph_pop alert_1" style="display: none; width: 290px;">
<div class="ph_title"><span class="ph_title_icon">Alert</span></div> 
<div class="ph_content">
<div>You have already Added Account</div>
<div class="ph_btns" align="center">
<a href="#" class="ph_next alert_ok"><span class="ph_next_icon">Ok</span></a>
<!-- <a href="#" class="ph_next"><span class="ph_next_icon"></a> -->
<!-- <a href="#" class="ph_can gh_con_can_btn"><span class="ph_can_icon">Cancal</span></a> -->
</div>
</div>

</div>
</div>
<div class="body">
<div class="title_bar"><span style="color: white; font-weight: 600; font-size: 13px;">Personal accounts</span></div>
<div class="tool_bar">
<a href="#" class="btn add"><span class="add_icon">Add</span></a>
<a href="#" class="btn"><span class="edit_icon">Edit</span></a>	
<a href="#" class="btn"><span class="del_icon">Delete</span></a>
</div>

<!-- Content Body -->
<div class="body_content" style="position: relative;">
<table width="100%;" style="    border-collapse: collapse; padding: 3px 10px;" class="ac_view">
<tr>
<th>ID</th>	
<th>Account Name</th>
<th>Currency code </th>
<th>Bank</th>
<th>BTC Address </th>
<th>Account Holder</th>

</tr>
<?php

$qeury = "SELECT * FROM `accounts` WHERE User_id = '$user_email';";
$table = mysqli_query($con, $qeury);
$rows= mysqli_num_rows($table);
 while ($result = mysqli_fetch_assoc($table)) {

?>

<tr>
<td>A<?php echo $result['Account_id']; ?></td>
<td><?php echo $result['Account_name']; ?></td>	
<td><?php echo $result['Select_currency']; ?></td>
<td><?php echo $result['Bank_name']; ?></td>
<td><?php echo $result['Currency_address']; ?></td>
<td><?php echo $result['Fname']; ?><?php echo $result['Lname']; ?></td>
<td style="display: none;" class="total"><?php echo $result['total']; ?></td>
</tr>

<?php } ?>
</table>	


<!-- Acccount Add POPUP -->
<div style="position: absolute; width: 50%; height: auto;padding-bottom: 20px; background: #ffeebb; top: -40px; right: 0px; border-left: 2px solid 
#8e846b;border-bottom:  2px solid #8e846b; display: none;" class="ac">
	<div class="title_bar"><span style="color: white; font-weight: 600; font-size: 13px;padding-right: 10px;">Add an account</span>
		<a href="#" style="text-decoration: none;float: right; color: white;" class="close_ac">X</a></div>

<form method="POST">
<div class="ac_content" style="padding: 80px; box-sizing: border-box;">
<table width="100%;" >
<tr>
<th style="padding: 10px;">Account Name:</th>	
<td><input type="text" name="A_N" style="width: 100%;" required="required"></td>
</tr>	
<tr>
<th style="padding: 10px;">BitCoin:</th>	
<td><select style="width: 100%" name="select_cur" required="required">
<!-- <option value="0">Please Select</option> -->
<option value="BTC">BTC</option>
<!-- <option value="USD">USD</option>	 -->
</select></td>
</tr>
<tr>
<th style="padding: 10px;">Bank Name:</th>	
<td><input type="text" name="Cur_bank" style="width: 100%;" value="BTC BitCoin" disabled="disabled"></td>
</tr>
<tr>
<th style="padding: 10px;">BitCoin Address:</th>	
<td><input type="text" name="BTC_addres" style="width: 100%;" minlength="34" maxlength="34" required="required"></td>
</tr>
<tr>
<th style="padding: 10px;"> Name:</th>	
<td><input type="text" name="fname" style="width: 100%;" required="required"></td>
</tr>
<tr>
<th style="padding: 10px;">Middle Name:</th>	
<td><input type="text" name="" style="width: 100%;" disabled="disabled"></td>
</tr>
<tr>
<th style="padding: 10px;">Last Name:</th>	
<td><input type="text" name="lname" style="width: 100%;" required="required"></td>
</tr>
<tr>
<th style="padding: 10px;">OTP:</th>	
<td><input type="text" name="" style="width: 50%;"><input type="button" name="" value="GET OTP" minlength="4" maxlength="4" required="required"></td>
</tr>

</table>


	
</div>
<div style=" box-sizing: border-box;" align="center">
<a href="#" class="btns"><span class="save_icon"><input type="submit" name="Save" style="border: none; background: none; font-size: 14px; font-weight: 600;"></span></a>
<a href="#" class="btns" style="margin-left: 100px;"><span class="can_icon">Cancel</span></a>	
</div>

</div>
<!-- Account Box end -->
</form>
  <?php add_account(); ?>
</div>



</div>

<script type="text/javascript">
$(document).ready(function(){

// Account	
$(".add").click(function () {

if($(".total").text() == 1){

$(".mask").show();
$(".alert_1").show();
return false;
}
else{
$(".ac").show();
          }
    });

$(".close_ac").click(function(){
	  $(".ac").hide();
});

$(".alert_ok").click(function(){
	$(".alert_1").hide();
	$(".mask").hide();
	location.reload(true);
});


});	

</script>
</body>
</html>