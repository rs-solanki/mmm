<?php
error_reporting(0);
include('Include/conn.php');
include('Include/user_details.php');
if($user_status=="Block")
  header('location:/dash/Soppurt.php');      
?>
<?php

    $limit = 30; 
    
    if (isset($_GET["page"])) {  
      $pn  = $_GET["page"];  
    }  
    else {  
      $pn=1;  
    };   
  
    $start_from = ($pn-1) * $limit;   
    
  ?> 

<!DOCTYPE html>
<html>
<head>
	<title>Referrals</title>
	<link rel="stylesheet" type="text/css" href="Css/Referrals.css">
	<script type="text/javascript" src="Js/jquery-3.3.1.min.js"></script>
</head>
<body>
<?php include('Include/header.php'); ?>

<div class="body">
<div class="title_bar"><span style="color: white; font-weight: 600; font-size: 13px;">Referrals</span></div>
<div class="tool_bar">
<input type="text" id="tex">
<a class="hreflink" id="show_my_link" onclick="showMylink();"><span>Show My referral</span></a>
</div>
<table style="width: 100%; border-collapse: collapse;" class="heading_table">
                  <thead>        
                                <tr>
<th>First Name</th>
<th>Email</th>
<th>Call Number</th>
<th>Guider</th>
<th>Status</th>
<th>Date Of Creating</th>


</tr>

                           </thead> 
               <tbody>

  <?php 

$select = "SELECT * FROM `registration` WHERE Invite_email = '$user' LIMIT $start_from, $limit;";
$run = mysqli_query($con,$select);
// $row = mysqli_fetch_array($run);

$row = mysqli_num_rows($run);

while ( $res = mysqli_fetch_array($run)) {





?>            


                        <tr>

                       <td><?php echo $res['User_name']; ?></td>
                        <td><?php echo $res['E_mail']; ?></td>
                        <td><?php echo $res['Mobile_number']; ?></td>
                        <td><?php echo $Guider; ?></td>
                          <td><?php echo $res['Status']; ?></td>
                        <td><?php echo $res['Reg_date']; ?></td>
                       </tr>

<?php } ?>



</tbody>
</table>
<!-- Pagination -->


<div style="position: fixed;bottom: 0; width: 100%; height: 40px;background: white; border-top: 1px solid black; padding-top: 5px;">

<div style="display: ; flex-direction: row;">
<div style="width: 100%;height: 30px;padding: 10px; box-sizing: border-box;" class="pagination">
<ul style="margin: 0px; padding: 0px;">
<li>
<select style="margin: 2px 0 0 0;width: 40px;height: 20px;">
<?php 
$sql = "SELECT COUNT(*) FROM `registration` WHERE Invite_email = '$user'";   
        $rs_result = mysqli_query($con,$sql);   
        $roww = mysqli_fetch_row($rs_result);   
        $total_records = $roww[0];   
          
        // Number of pages required. 
        $total_pages = ceil($total_records / $limit);   
        $pagLink = "";                         
        for ($i=1; $i<=$total_pages; $i++) { 
          if ($i==$pn) { 
              $pagLink .= "<a href='Referrals.php?page=".$i."'>".$i."</a>"; 
          }             
          else  { 
              $pagLink .= "<li><a href='news.php?page=".$i."'> 
                                                ".$i."</a></li>";   
          } 
        };   
        echo $pagLink;   

?>  

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
<li>Page <?php echo $total_records; ?> <input type="text" value="1" style="width: 30px;"> of 1</li>
<li class="last">
<a class="prightfull" href=""><span></span></a>
<a class="pright" href=""><span></span></a> 
</li>
</ul>
  
</div>
</div>

<?php 
$select = "SELECT * FROM `registration` WHERE Invite_email = '$user'";
$run = mysqli_query($con,$select);
// $row = mysqli_fetch_array($run);

$row = mysqli_num_rows($run);

?>

<span style="position: absolute;right: 20px;bottom: 20px;font-size: 13px;">Display 1 to <?php echo$row; ?> of <?php echo$row; ?> items</span>


</div>
<!-- End Pagination -->

<div class="con_ref_link" style="position: fixed;width: 100%; height: 100%; background: #00000052; z-index: 1000;top: 0; display: none;">
<div class="ref_box" style="width: 700px;border: 1px solid #8E846B;border-radius: 5px;height: 105px;z-index: 10002;padding: 5px;
    border: 1px solid #8E846B;border-radius: 5px;display: none;background: #fff url(Images/grey.png) repeat 50% 50%; margin: 10% auto;">
<div style="color: white; font-size: 13px;">Referrals Link</div>
<div style="background: white; box-sizing: border-box; padding: 10px; height: 80px;">
<input type="text" name="" value="localhost/3/registration_main.php?invite=<?php echo $user_email; ?>" style="width: 100%;" readonly>
<div align="right" style="margin: 10px 0px;">
	<a href="#" class="close_ref_box"><span>Close</span></a>
</div>	
</div>	
</div>	
</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){

$(".hreflink").click(function(){
	$(".con_ref_link").show();
	$(".ref_box").show();
});
  
  $(".close_ref_box").click(function(){
	$(".con_ref_link").hide();
	$(".ref_box").hide();
});   




	});



</script>
</body>
</html>