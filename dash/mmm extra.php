<?php
include('Include/conn.php');
include('Include/user_details.php');
if($user_status=="Block")
  header('location:/dash/Soppurt.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>MMM Extra</title>
	<link rel="stylesheet" type="text/css" href="Css/mmm extra.css">
	<script type="text/javascript" src="Js/jquery-3.3.1.min.js"></script>
</head>
<body>
<?php include('Include/header.php'); ?>
<div class="body">
<div class="title_bar"><span style="color: white; font-weight: 600; font-size: 13px;">MMM EXTRA</span></div>
<!-- Heading -->
<div style="display: flex; flex-direction: row;">
            <div class="haeding_MMM_extra"><h1>Web-task | MMM &lt;&lt; EXTRA&gt;&gt; </h1></div>
            <div class="btn_links" align="right">
            <a href="task ach.php" id="web_task_achiver"><span class="web_icon">Web-Task archive</span></a>
            <a href="#" id="web_task_achiver"><span class="Introduse">Introduse</span></a>    
            </div>
</div>
<!-- two box -->
<div class="para_heading">
<div style="color: #e62121; font-size: 18px; line-height: 20px; font-weight: 700;">Get up to 30% per month completing easy daily web-tasks.<br>Come here every day , carry out only one task and your MARVOs will grow 30% per month!. Work for the benifit of MMM:-))</div>
<div style="padding: 0px; font-size: 18px; font-weight: 800; margin-top: 30px;">Current MARVO rate:  <span style="background-color: green; color: white; padding: 4px;">30%(30% Standart, 0.00% ONLINE | 0.00% OFFLINE)</span></div>
</div>

<div class="task_bar_area">
        <div class="task_time">
        <div style="padding: 100px 50px 0px 90px;box-sizing: border-box; ">  To complete the web-task for me current day you have</div>    
        <div  id="clock"></div>
        <div style="padding: 10px 50px 0px 120px;box-sizing: border-box;">Deadine Countdown Timer (GMT)</div>    
        </div>
        <div class="task_banner">
           <img src="Images/task.jpg" alt="MMM EXTRA"  />
           </div>   
</div>

<?php

$current = date('d-m-Y');
$qq = "SELECT * FROM user_task  WHERE user_name = '$user_email' AND date_task = '$current'";
$runn = mysqli_query($con,$qq);
$display = "";
$tank = "";
$rejj = "";
while ($reuu = mysqli_fetch_array($runn)) {
$tr = $reuu['Status'];

$date = $reuu['date_task'];
if($tr == "being moderated" || $current == $date){
    $display = "none";
    $tank = "block";
}

elseif($tr == "Reject"){

 $display = "none";
    $tank = "none";
    $rejj = "none";

}


elseif ($tr == "Comfirm") {
  $rejj = "block";
}

else{
    $display = "block";
    $tank = "none";
     $rejj = "none";
}

}

?>

<!-- Task Area -->
<div class="task_status" style="display: <?php echo $display; ?>;">
    <div style="padding: 10px 0px 10px 560px; font-size: 15px; font-weight: 800; box-sizing: border-box;">Your active Web-tasks</div> <span style="padding: 10px 0px 10px 580px;box-sizing: border-box;">There aren't any</span><br><div style="padding: 10px 0px 10px 600px;font-size: 15px; font-weight: 800;box-sizing: border-box;">Task Lists:</div>
</div>
 <div class="task_lists">






<?php
$query  = "SELECT * FROM `mmmtask`";
$run = mysqli_query($con,$query);
while ($reu = mysqli_fetch_array($run)) {

?>


 <div class="task_1" style="display: <?php echo $display;?>">
        <h2><span class="task_number"><?php echo $reu['Task_name'];?></h2>    
          <span><i>Social Networks &gt;<?php echo $reu['Task_title'];?>  &gt; Repost a photo of our community on your page.</i></span> 
          <span style="margin-left: 100px;">Task Code: <b><?php echo $reu['Task_code'];?></b></span>
          <br><br>

            <span style="font-weight: 600;"><?php echo$reu['Task_tag'];?></span>
            <ol style="line-height: 25px">
            <li>Follow the link <a href='<?php echo$reu['Task_link'];?>'><?php echo$reu['Task_lnk_name'];?></a> Write an original comment to the photo and attach one of the three suggested <span style="font-weight: 600;">hashTags.</span>And Your referral link.</li>
                <li>Go to your page and click on the time when the comment(photo) was posted.</li>
                <li>Copy the result link, URL</li>
                <li>Paste result link.<?php echo $tr;?></li>
            
            </ol>
        <a href='mmm task.php?id=<?php echo$reu['id']; ?>' id="go_to" align="right"><span class="Start_icon">Start</span></a>    
</div>
<?php }  ?>

<!-- Completed Task -->

<?php 
$qqq = "SELECT * FROM user_task WHERE user_name = '$user_email' AND Status = 'being moderated' AND date_task = '$current'";
$runnq = mysqli_query($con,$qqq);
while ($teuu = mysqli_fetch_array($runnq)) {

$coode = $teuu['Task_code'];
$stt = $teuu['Status'];

$query1  = "SELECT * FROM `mmmtask` WHERE Task_code = '$coode'";
$run1 = mysqli_query($con,$query1);
while ($reuq = mysqli_fetch_array($run1)) {


?>
<div class="completed_task" style="display:<?php echo $tank; ?>;">
        <div data-brackets-id="3990" style="padding: 10px 0px 10px 560px; font-size: 15px; font-weight: 800">Your active Web-tasks</div>
         <div class="task_1 task_complet">
        <span style="font-size: 17px; font-weight: 600;"><?php echo $reuq['Task_name'];?></span>
             <a href="#" style="text-decoration: none; float: right;"><span id="being">Being moderated</span><span id="comfirm_task"><?php echo $stt;?></span></a>
             <br><br>   
          <span><i>Social Networks &gt; <?php echo $reuq['Task_title'];?> &gt; watch, like and comment a video on Youtube channel.</i></span> <br><br>
            <span style="font-weight: 600;"><?php echo $reuq['Task_tag'];?></span><br><br>
            <span style="font-weight: 600;"><?php echo $reuq['Task_code'];?></span><br><br>
             <span style="color: green; font-weight: 800;">ONLINE Web-task<?php echo $reuq['date_time']; ?></span>
             <a href="#" style="text-decoration: none; float: right;">
             <span id="rate">Accrued interest 2.67%</span>
             <span id="waiting_task">In front of you in the queue <span style="color: blue; font-weight: 600;">2979297 peoples</span></span>
             </a>
             
        </div>
    
            <div id="thank_msg" style="display: none;">
            <h2>Thank you promoting MMM on the Internet and/or Offine!!!</h2>
                <h2 style="text-align: center;">We are looking forward to seeing you tomorrow again.</h2>
            </div>
            <?php } } ?>
 </div>


    <div id="thank_msg" style="display: <?php echo $rejj; ?>;">
            <h2>Thank you promoting MMM on the Internet and/or Offine!!!</h2>
                <h2 style="text-align: center;">We are looking forward to seeing you tomorrow again.</h2>
            </div>



<!-- End Task Area -->
</div>
<!-- end body -->
</div>

</body>
</html>