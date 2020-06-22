<?php
include('Include/conn.php');
// include('Include/mmm task.php');
// include('function/function.php');

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
$Img_1  = $result['Img_1'];
$Img_2 = $result['Img_2'];
$Img_3  = $result['Img_3'];
$Img_4  = $result['Img_4'];
$Img_5  = $result['Img_5'];
$Img_6  = $result['Img_6'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>MMM Extra</title>
	<link rel="stylesheet" type="text/css" href="Css/mmm task.css">
	<script type="text/javascript" src="Js/jquery-3.3.1.min.js"></script>
</head>
<body>
<?php include('Include/header.php'); ?>
<div class="body">
<div class="title_bar"><span style="color: white; font-weight: 600; font-size: 13px;">MMM TASK</span></div>
<!-- Heading -->
<div style="display: flex; flex-direction: row;">
            <div class="haeding_MMM_extra"><h1>Web-task | MMM &lt;&lt; EXTRA&gt;&gt; <?php echo$id; ?></h1></div>
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

<!-- Task Name -->
<form method="POST">
<div class="taks_name" style="padding: 20px; box-sizing: border-box;">
        <h2><span class="task_number"><?php echo $task_name; ?></h2>    
        <span style="font-weight: 600;"><?php echo $task_tag;?></span>
<span style="font-weight: 600; margin-left: 100px;">Task code :<input type="text" name="task_code" value="<?php echo $task_code;?>" 
   style="border: none; background: none; font-weight: 600;" disabled></span>
        <br><br>
        <span style="font-size: 17px; font-weight: 600; line-height: 20px;">Follow the link <a href="<?php echo $link;?>"><?php echo $link_name;?></a>Write an original comment to the photo and attach one of the three suggested hashTags.And Your referral link.</span>    
        </div>

<!-- Task into -->
 <div class="how_task">
    <?php
  $img_1 = "";   
if($Img_1 == "")
    {$img_1 = "display:none";}

    ?>
        <p><?php echo $Step_1;?></p>   
        <img src='<?php echo $result['Img_1'];?>' style="<?php echo $img_1; ?>">
        <img src="<?php echo $result['Img_1'];?>"/>   
        <p><?php echo $Step_2;?></p>
        <img src="<?php echo $result['Img_1'];?>"/>
        <img src="<?php echo $result['Img_1'];?>"/>
        <p><?php echo $Step_3;?></p> 
        <img src="<?php echo $result['Img_1'];?>"/>
        <p><?php echo $Step_3;?></p> 
        <img src="<?php echo $result['Img_1'];?>"/>
        <p><?php echo $Step_3;?></p>   
        </div>
        
        <div class="acpt_rej_task">
        <p style="font-weight: 600;">Enter the link (URL-Address) here</p>
        <input type="text" name="url" id="url_add"/>
        <div style="float: right; margin-top: 15px;">    
        <!-- <a href="#" id="task_btn"><span class="send">Send to approval</span></a> -->
        <input type="submit" name="add" class="task_btn send" value="Send to approval">
        <a href="#" id="task_btn"><span class="rejec">Reject the task</span></a>    
        </div>    
        </div>
</form>

<?php userTask();

    ?>
<!-- end body -->
</div>
<script type="text/javascript">
    function eroroOn(id){
        this.style.display = "none";
    }
</script>
</body>
</html>