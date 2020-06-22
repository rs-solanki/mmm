<?php
include('Include/conn.php');
include('Include/user_details.php');
// include('Include/mmm task.php');
include('function/function.php');

$id = $_GET['id'];

$q  = "SELECT * FROM `mmmtask` WHERE id = '$id'";
$run = mysqli_query($con,$q);
$result = mysqli_fetch_assoc($run);
$task_name = $result['Task_name'];
$task_title = $result['Task_title'];
$task_tag = $result['Task_tag'];
$task_code = $result['Task_code'];
$link = $result['Link'];
$link_name = $result['Link_name'];
$Step_1 = $result['Step_1'];
$Step_2 = $result['Step_2'];
$Step_3 = $result['Step_3'];
$Step_4 = $result['Step_4'];
$Step_5 = $result['Step_5'];
$Step_6 = $result['Step_6'];
$Step_7 = $result['Step_7'];
$Step_8 = $result['Step_8'];
$Img_1  = $result['Img_1'];
$Img_2 = $result['Img_2'];
$Img_3  = $result['Img_3'];
$Img_4  = $result['Img_4'];
$Img_5  = $result['Img_5'];
$Img_6  = $result['Img_6'];
$Img_7  = $result['Img_7'];
$Img_8  = $result['Img_8'];
$Img_9  = $result['Img_9'];
$Img_10  = $result['Img_10'];
$Img_11  = $result['Img_11'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>MMM Extra</title>
	<link rel="stylesheet" type="text/css" href="Css/mmm task.css">
	<script type="text/javascript" src="Js/jquery-3.3.1.min.js"></script>
    <style type="text/css">.how_task img{width: 50%;}</style>
</head>
<body>
<?php include('Include/header.php'); ?>
<div class="body">
<div class="title_bar"><span style="color: white; font-weight: 600; font-size: 13px;">MMM TASK</span></div>
<!-- Heading -->
<div style="display: flex; flex-direction: row; width: 80%; margin: 5px auto;">
            <div class="haeding_MMM_extra"><h1>Web-task | MMM &lt;&lt; EXTRA&gt;&gt;</h1></div>
            <div class="btn_links" align="right">
            <a href="#" id="timer_back"><span class="">Time left to accomplish this back <b id="demo"></b></span></a>    	
            <a href="task ach.php" id="web_task_achiver"><span class="web_icon">Web-Task archive</span></a>
            <a href="#" id="web_task_achiver"><span class="Introduse">Introduse</span></a>    

            </div>
</div>
<!-- two box -->
<div class="para_heading" style="display: none;">
<div style="color: #e62121; font-size: 18px; line-height: 20px; font-weight: 700;">Get up to 30% per month completing easy daily web-tasks.<br>Come here every day , carry out only one task and your MARVOs will grow 30% per month!. Work for the benifit of MMM:-))</div>
<div style="padding: 0px; font-size: 18px; font-weight: 800; margin-top: 30px;">Current MARVO rate:  <span style="background-color: green; color: white; padding: 4px;">30%(30% Standart, 0.00% ONLINE | 0.00% OFFLINE)</span></div>
</div>

<!-- Task Name -->
<form method="POST">
<div style="margin: 5px auto; width: 80%; font-size:20px; color: green;font-weight: 600;" align="right">The rate your MAVRO will incease by 2.67% </div>    
<div style="margin: 10px auto; width: 80%;    border: 2px solid #c18119;border-radius: 10px;padding-bottom: 30px;">	
<div class="taks_name" style="padding: 20px; box-sizing: border-box;">
        <h2><span class="task_number"><?php echo $task_name; ?></h2>    
        <span style="font-weight: 600;">HansTag: <?php echo $task_tag;?></span>
<!-- <span style="font-weight: 600; margin-left: 100px;"> -->
    /#Code :<input type="text" name="task_code" value="<?php echo $task_code;?>" 
   style="border: none; background: none; font-weight: 600; border: none;" readonly>
<!-- </span> -->
        <br><br>
        <span style="font-size: 17px; font-weight: 600; line-height: 20px;">Follow the link <a href="<?php echo $link;?>"><?php echo $link_name;?></a>Write an original comment to the photo and attach one of the three suggested hashTags.And Your referral link.</span>    
        </div>

<!-- Task into -->
 <div class="how_task">
        <p><?php echo $Step_1;?></p>   
        <img src='<?php echo $result['Img_1'];?>' onerror="this.style.display='none';">
        <img src="<?php echo $result['Img_2'];?>" onerror="this.style.display='none';">   
        <p><?php echo $Step_2;?></p>
        <img src="<?php echo $result['Img_3'];?>" onerror="this.style.display='none';">
        <p><?php echo $Step_3;?></p> 
        <img src="<?php echo $result['Img_4'];?>" onerror="this.style.display='none';">
        <img src="<?php echo $result['Img_5'];?>" onerror="this.style.display='none';">
        <p><?php echo $Step_4;?></p> 
        <img src="<?php echo $result['Img_6'];?>" onerror="this.style.display='none';">
        <p><?php echo $Step_5;?></p>
        <img src="<?php echo $result['Img_7'];?>" onerror="this.style.display='none';">
        <img src="<?php echo $result['Img_8'];?>" onerror="this.style.display='none';">
        <p><?php echo $Step_6;?></p>
        <img src="<?php echo $result['Img_9'];?>" onerror="this.style.display='none';">
        <p><?php echo $Step_7;?></p>
        <img src="<?php echo $result['Img_10'];?>" onerror="this.style.display='none';">
        <!-- Fixed Img -->
        <p><?php echo $Step_8;?></p> 
        <img src="<?php echo $result['Img_11'];?>" onerror="this.style.display='none';">  
        </div>
        </div>

        <div class="acpt_rej_task">
        <p style="font-weight: 600;">Enter the link (URL-Address) here</p>
        <input type="text" name="url" id="url_add"/>
            
        </div>
        <div style="margin: 5px auto; width: 80%; font-size:20px; color: green;font-weight: 600;" align="right">The rate your MAVRO will incease by 2.67% </div>
        <div style="margin: 10px auto;width: 80%; padding: 0px 0px 40px 0px ; box-sizing: border-box;" align="right">    
        <!-- <a href="#" id="task_btn"><span class="send">Send to approval</span></a> -->
        <input type="submit" name="add" class="task_btn send" value="Send to approval">
        <!-- <a href="#" id="task_btn"><span class="rejec">Reject the task</span></a>     -->
        <input type="button" name="reject task" value="Reject the task" class="task_btn rejec">
        </div>
</form>

<?php userTask(); ?>


<!-- end body -->
</div>
<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  // var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  // var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
    window.location = "mmm extra.php";
  }
}, 1000);
</script>
</body>
</html>