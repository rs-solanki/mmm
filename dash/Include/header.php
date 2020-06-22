
<link rel="stylesheet" type="text/css" href="Css/header.css">
<header>
<div class="nav">
<a href="#"><img src="Images\mmm.png" ></a>	

<!-- left navbar -->
<!-- <div class="left_nav"> -->
<ul class="left_manu">
<li class="one"><a href="Dash.php"><span>Dashboard</span></a></li>
<li class="two"><a href="#"><span>Referrals</span></a>

<ul class="child_two">
<li class="child_one"><a href="Referrals.php"><span>Referrals</span></a></li>
<?php 
 if($Position == "Guider"){
?>
<li class="child_two_two"><a href="Participant.php"><span>Participants</span></a></li>	
<?php } else {
}
	?>
</ul>

</li>	
<li class="three"><a href="#"><span>My Page</span></a>
<ul class="child_three">
<li class="child_three_one"><a href="my details.php"><span>My Page</span></a></li>
<li class="child_three_two"><a href="LOH.php"><span>My Letter of Happiness</span></a></li>	
</ul>
</li>
<li class="four"><a href="mmm extra.php"><span>MMM &lt;&lt; EXTRA&gt;&gt;</span></a></li>
<li class="five"><a href="Marvo.php"><span>Marvo</span></a></li>
<li class="six"><a href="Account.php"><span>Accounts</span></a></li>
<!-- <li class="six"><a href="Account.php"><span>Accounts</span></a></li> -->
</ul>

<!-- <div class="right_nav"> -->
<ul class="right_manu" style="position: absolute;right: 10px;">
<li class="r_one"><a href="Soppurt.php"><span>Support</span></a></li>	
<li class="r_two"><a href="#"><span>Information</span></a>
<ul class="child_r_two">
<li class="r_r_one"><a href="News.php"><span>News</span></a></li>	
<li class="r_r_two"><a href="#"><span>FAQ</span></a></li>	
<li class="r_r_three"><a href="#"><span>Registration</span></a></li>	
<li class="r_r_four"><a href="#"><span>Promotion</span></a></li>	
</ul>
</li>
<li class="r_three"><a href="../Res/logout.php"><span>Logout</span></a></li>
</ul>	
<!-- </div> -->


<!-- </div>	 -->

<!-- right navber -->

</div>
</header>