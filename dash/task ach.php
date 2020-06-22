<?php
include('Include/conn.php');
include('Include/user_details.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Task Achive</title>
	<link rel="stylesheet" type="text/css" href="Css/task ach.css">
	<script type="text/javascript" src="Js/jquery-3.3.1.min.js"></script>
</head>
<body>
<?php include('Include/header.php'); ?>
<div class="body">
<div class="title_bar"><span style="color: white; font-weight: 600; font-size: 13px;">MMM EXTRA TASK ACHIVE</span></div>

<div style="display: flex; flex-direction: row;">
            <div class="haeding_MMM_extra"><h1>Web-task | MMM &lt;&lt; EXTRA&gt;&gt; </h1></div>
            <div class="btn_links" align="right">
            <a href="#" id="web_task_achiver"><span class="web_icon">Web-Task archive</span></a>
            <a href="#" id="web_task_achiver"><span class="Introduse">Introduse</span></a>    
            </div>
 </div>
<!-- Heading -->
<div class="para_heading">
        <div style="color: #e62121; font-size: 18px; line-height: 20px; font-weight: 700;">Get up to 30% per month completing easy daily web-tasks.<br>

Come here every day , carry out only one task and your MARVOs will grow 30% per month!. Work for the benifit of MMM:-))</div>
         <div style="padding: 0px; font-size: 18px; font-weight: 800; margin-top: 30px;">Current MARVO rate:  <span style="background-color: green; color: white; padding: 4px;">30%(30% Standart, 0.00% ONLINE | 0.00% OFFLINE)</span></div>
</div>
<!-- Task Container -->
 <div class="task_box">
        <div style="padding: 10px 0px;">
        <span style="float: left;"><i>Select type task</i></span> <a href="#" style="" id="online_btn"><span>ONLINE</span></a>   
        </div>

<?php 
$qqq = "SELECT * FROM user_task WHERE user_name = '$user_email'";
$runnq = mysqli_query($con,$qqq);
$all = mysqli_num_rows($runnq);

$qqq1 = "SELECT * FROM user_task WHERE user_name = '$user_email' AND Status = 'Confirm'";
$runnq1 = mysqli_query($con,$qqq1);
$com = mysqli_num_rows($runnq1);


$qqq2 = "SELECT * FROM user_task WHERE user_name = '$user_email' AND Status = 'Reject'";
$runnq2 = mysqli_query($con,$qqq2);
$rej = mysqli_num_rows($runnq2);

$qqq3 = "SELECT * FROM user_task WHERE user_name = '$user_email' AND Status = 'being moderated'";
$runnq3 = mysqli_query($con,$qqq3);
$pro = mysqli_num_rows($runnq3);

?>




        <div class="more_btn">
        <a href="#" class="btns pro" style="margin-left: 50px;">Processing<span>(<?php echo $pro;?>)</span></a>    
        <a href="#" class="btns com" style="margin-left: 20px;">Completed<span>(<?php echo $com;?>)</span></a>        
            <a href="#" class="btns rej" style="margin-left: 20px;">Rejected<span>(<?php echo $rej;?>)</span></a>    
            <a href="#" class="btns all" style="margin-left: 20px;">All<span>(<?php echo $all;?>)</span></a>    
        </div>

 <div class="pro_task" style="display: none;">          
<?php 
$qqq = "SELECT * FROM user_task WHERE user_name = '$user_email' AND Status = 'being moderated'";
$runnq = mysqli_query($con,$qqq);
while ($teuu = mysqli_fetch_array($runnq)) {
    
$coode = $teuu['Task_code'];
$stt = $teuu['Status'];

$query1  = "SELECT * FROM `mmmtask` WHERE Task_code = '$coode'";

$run1 = mysqli_query($con,$query1);
while ($reuq = mysqli_fetch_array($run1)) {


?>


            <div class="task">
             <h2><span class="task_number"><?php echo $reuq['Task_name'];?></h2>    
          <span><i>Social Networks &gt; <?php echo $reuq['Task_title'];?> &gt; watch, like and comment a video on Youtube channel.</i></span> <br><br>
            <span style="font-weight: 600;"><?php echo $reuq['Task_tag'];?></span>
            <ol style="line-height: 25px">
            <li>Follow the link <a href="<?php echo $reuq['Link'];?>"><?php echo $reuq['Link_name'];?></a> Write an original comment to the video and attach one of the three suggested <span style="font-weight: 600;">hashTags.</span>And Your referral link.</li>
                <li>Click on the time of comment post.</li>
                <li>Copy URL</li>
                <li>Paste result link.</li>
            </ol>
            <a href="#" style="text-decoration: none;" class="re">
             <span id="rate">Accrued interest 2.67%</span>
             <span id="waiting_task">In front of you in the queue <span style="color: blue; font-weight: 600;">2979297 peoples</span></span>
             </a>
  <!-- <span style="float: right; color: #f15c5c;">Confirmed by participant</span> -->

        </div>

<?php } } ?>

</div>



 <div class="com_task" style="display: none;">          
<?php 
$qqq = "SELECT * FROM user_task WHERE user_name = '$user_email' AND Status = 'Confirm' ORDER BY id DESC";
$runnq = mysqli_query($con,$qqq);
while ($teuu = mysqli_fetch_array($runnq)) {
$coode = $teuu['Task_code'];
$stt = $teuu['Status'];
$time = $teuu['date_time'];

$query1  = "SELECT * FROM `mmmtask` WHERE Task_code = '$coode'";
$run1 = mysqli_query($con,$query1);
while ($reuq = mysqli_fetch_array($run1)) {


?>

            <div class="task">
             <h2><span class="task_number"><?php echo $reuq['Task_name'];?></h2>    
          <span><i>Social Networks &gt; <?php echo $reuq['Task_title'];?> &gt; watch, like and comment a video on Youtube channel.</i></span> <br><br>
            <span style="font-weight: 600;"><?php echo $reuq['Task_tag'];?></span>
            <ol style="line-height: 25px">
            <li>Follow the link <a href="<?php echo $reuq['Link'];?>"><?php echo $reuq['Link_name'];?></a> Write an original comment to the video and attach one of the three suggested <span style="font-weight: 600;">hashTags.</span>And Your referral link.</li>
                <li>Click on the time of comment post.</li>
                <li>Copy URL</li>
                <li>Paste result link.</li>
            
            </ol>
  <!-- <span style="float: right; color: green;">The rate of your MAVRO will incease by 2.67%</span> -->
  <span style="float: right; font-size: 14px;">Accrued interest 2.67% (<?php echo $time ?>)</span>
        </div>

<?php } } ?>

</div>


 <div class="rej_task" style="display: none;">          
<?php 
$qqq = "SELECT * FROM user_task WHERE user_name = '$user_email' AND Status = 'Reject' ORDER BY id DESC";
$runnq = mysqli_query($con,$qqq);
while ($teuu = mysqli_fetch_array($runnq)) {
$coode = $teuu['Task_code'];
$stt = $teuu['Status'];

$query1  = "SELECT * FROM `mmmtask` WHERE Task_code = '$coode'";
$run1 = mysqli_query($con,$query1);
while ($reuq = mysqli_fetch_array($run1)) {


?>

            <div class="task">
             <h2><span class="task_number"><?php echo $reuq['Task_name'];?></h2>    
          <span><i>Social Networks &gt; <?php echo $reuq['Task_title'];?> &gt; watch, like and comment a video on Youtube channel.</i></span> <br><br>
            <span style="font-weight: 600;"><?php echo $reuq['Task_tag'];?></span>
            <ol style="line-height: 25px">
            <li>Follow the link <a href="<?php echo $reuq['Link'];?>"><?php echo $reuq['Link_name'];?></a> Write an original comment to the video and attach one of the three suggested <span style="font-weight: 600;">hashTags.</span>And Your referral link.</li>
                <li>Click on the time of comment post.</li>
                <li>Copy URL</li>
                <li>Paste result link.</li>
            
            </ol>
  <span style="float: right; color: #f15c5c;">Rejeted Task</span>
        </div>

<?php } } ?>

</div>




  <div class="all_task">          
<?php 
$qqq = "SELECT * FROM user_task WHERE user_name = '$user_email' ORDER BY id DESC";
$runnq = mysqli_query($con,$qqq);
while ($teuu = mysqli_fetch_array($runnq)) {
$coode = $teuu['Task_code'];
$stt = $teuu['Status'];

$query1  = "SELECT * FROM `mmmtask` WHERE Task_code = '$coode'";
$run1 = mysqli_query($con,$query1);
while ($reuq = mysqli_fetch_array($run1)) {


?>

            <div class="task">
             <h2><span class="task_number"><?php echo $reuq['Task_name'];?></h2>    
          <span><i>Social Networks &gt; <?php echo $reuq['Task_title'];?> &gt; watch, like and comment a video on Youtube channel.</i></span> <br><br>
            <span style="font-weight: 600;"><?php echo $reuq['Task_tag'];?></span>
            <ol style="line-height: 25px">
            <li>Follow the link <a href="<?php echo $reuq['Link'];?>"><?php echo $reuq['Link_name'];?></a> Write an original comment to the video and attach one of the three suggested <span style="font-weight: 600;">hashTags.</span>And Your referral link.</li>
                <li>Click on the time of comment post.</li>
                <li>Copy URL</li>
                <li>Paste result link.</li>
            
            </ol>
<?php 
if($stt == "Reject"){
?>
<span style="float: right; color: #f15c5c;">Rejeted Task</span>
<?php
}elseif($stt == "Confirm"){
?>
<span style="float: right; font-size: 14px;">Accrued interest 2.67% (<?php echo $time ?>)</span>
<?php
}else{
?>
<a href="#" style="text-decoration: none;" class="re">
             <span id="rate">Accrued interest 2.67%</span>
             <span id="waiting_task">In front of you in the queue <span style="color: blue; font-weight: 600;">2979297 peoples</span></span>
             </a>
<?php
}

?>



  <!-- <span style="float: right; color: #f15c5c;">Confirmed by participant</span> -->
        </div>

<?php } } ?>

</div>

        </div>
  <!-- End Task Container       -->
            


</div>
<script type="text/javascript">
    
$(document).ready(function(){
    
    $(".pro").click(function(){
        $(".pro_task").show();
        $(".all_task").hide();
        $(".com_task").hide();
        $(".rej_task").hide();
    });

     $(".com").click(function(){
        $(".pro_task").hide();
        $(".all_task").hide();
        $(".com_task").show();
        $(".rej_task").hide();
    });

      $(".rej").click(function(){
        $(".pro_task").hide();
        $(".all_task").hide();
        $(".com_task").hide();
        $(".rej_task").show();
    });

$(".all").click(function(){
        $(".pro_task").hide();
        $(".all_task").show();
        $(".com_task").hide();
        $(".rej_task").hide();
    });






});

</script>
</body>
</html>