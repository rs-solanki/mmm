 <?php
include('../Include/conn.php');
include('../Include/user_details.php');
include('../function/function.php');
?> 
<!DOCTYPE html>

<html>
<head>

</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','mmm');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM  tickets WHERE Ticket_id = '".$q."'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {

	$tid = $row['Ticket_id'];
?>
    

 <div class="ticket_view opecticket panel" id="show_tik" style="display:block;">
<h2 style="font-family: sans-serif; font-size: 25px;">T<?php echo $row['Ticket_id']; ?>:<?php echo $row['Title']; ?></h2>
<h2 style="font-family: sans-serif; font-size: 20px; margin-top: 20px;" id="t_H">Question subject:  <?php echo $row['Topics']; ?></h2>
<div class="user_msg" style="padding:5px; box-sizing:border-box;">
 <h3 style=" font-family: sans-serif;"><?php echo $row['User_id']; ?></h3>
<p style=" font-family: sans-serif;"><?php echo $row['Msg']; ?></p>
<span><?php echo $row['Msg_date']; ?></span>
<div align="right"><a href="<?php echo $row['Img']; ?>">View</a></div>
</div>

<?php
	
if($row['Status'] == 'Yes'){
	$dis = "block";
}else{
	$dis = "none";
}

?>
 <div class="reply" style="display: <?php echo $dis;?>; width: 100%; padding: 10px; box-sizing: border-box;background: white;margin-top: 10px;border: 1px solid darkgrey;border-radius: 6px;">
 <h3 style=" font-family: sans-serif;"><?php echo $row['CRO_name']; ?></h3>
  <span style="color: #9a8686;"><?php echo $row['CRO_reply']; ?> </span><br><br>
  <span style="color: #9a8686;"><?php echo $row['CRO_date']; ?> </span>
</div>

 <!-- <form method="POST" action=""  enctype="multipart/form-data">
<div class="browse_file" style="box-sizing:border-box; height: auto;padding: 10px;">
<textarea rows="10" cols="135" style="resize: none;" name="user_reply"></textarea><br><br>
 <input type="file"  name="rep_img" style="margin-top: 10px; "><br><br><br>
 // echo ' <a href="#" class="btn_save">'; -->
<!-- <input type="submit" value="Save" name="re_save"/> -->


<!--  echo '<span class="save_btn">Save</span>';
 echo '</a>'; -->
<!-- </div> -->
<!-- </form> --> 

</div>









<?php } ?>
<?php
mysqli_close($con);
?>
</body>
</html>