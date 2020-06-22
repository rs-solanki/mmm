<?php
include('Include/conn.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>News</title>
	<link rel="stylesheet" type="text/css" href="Css/news.css">
	<script type="text/javascript" src="Js/jquery-3.3.1.min.js"></script>
</head>
<body style="background-color: #feeebd;">
<?php include('Include/header.php'); ?>

<div class="body" style="height: auto;">

<div class="title_bar"><span style="color: white; font-weight: 600; font-size: 13px;">News</span></div>	

<div class="areaa" style="padding: 20px 10px 10px 30px; ">

<?php 
$selet = "SELECT * FROM `news` WHERE Guider_mmm = 'No';";
$run = mysqli_query($con,$selet);
while ($res = mysqli_fetch_array($run)) {
?>
<div style="margin: 10px 0px;">	
	
<div class="accordion">
<span style="font-weight: bold;font-size: 12px"><?php echo $res['News_date'];?></span>	
<span class="news_title"><?php echo $res['News_title'];?></span>
</div>

<div class="panel">	
<div class="news_msg"><?php echo $res['News'];?></div>
</div>

</div>



<!-- <div style="margin: 10px 0px;">	
<span style="font-weight: bold;font-size: 12px"><?php echo $res['News_date'];?></span>	
<span class="news_title"><?php echo $res['News_title'];?></span>
<div class="news_msg"><?php echo $res['News'];?></div>
</div> -->

<?php }?>

</div>



<!-- End Body -->
</div>
<script type="text/javascript">
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
</body>
</html>