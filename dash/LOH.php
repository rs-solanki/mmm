<?php
include('Include/conn.php');
include('Include/user_details.php');
if($user_status=="Block")
  header('location:/dash/Soppurt.php');

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Css/LOH.css">
   
    <link rel="icon" href="favicon.ico" type="image/x-icon">
<title>Letter Of Happiness</title>
    <script src="js/jquery-3.3.1.min.js"></script>
    
</head>

<body>
  <?php include('Include/header.php');?>
    <div class="body">
       
       <div class="name_bar" style="">
           
        <div class="headng_of_page">
          <div>My letters of happiness</div>
          </div>
           
        <div class="work_area">
         <!-- <table width="100" id="My_massege_LOH"> -->
        <!-- <tbody> -->
        <!-- <tr><td> -->


<?php 


$select = "SELECT * FROM `testmonials` WHERE User_id = '$user' AND status = 'accept';";
$run = mysqli_query($con,$select);
// $row = mysqli_fetch_array($run);

$row = mysqli_num_rows($run);

while ($res = mysqli_fetch_array($run)) {

  ?>

<table width="100" id="My_massege_LOH">      
<tbody>
<tr>
<td>
<div class="letter">
<div class="letter_top">
<div class="letter_bottom">
<span id="ContentPlaceHolder1_rpt1_lbldate_0"><?php echo$res['entrydate'];?></span><br><br>
<span id="ContentPlaceHolder1_rpt1_Label1_0"></span><?php echo$res['TestMsg'];?></span><br><br> 
<img src="../3/<?php echo $res['Img'];?>" width="60%" onerror="this.style.display='none';">
</div>
</div>
</div>
</td>
</tr>
</tbody>
</table>

    
<?php
}
?>











   <!--      <div class="letter">
        <div class="letter_top">
        <div class="letter_bottom">
  <span id="ContentPlaceHolder1_rpt1_lbldate_0">4/4/4</span><br><br>
        <span id="ContentPlaceHolder1_rpt1_Label1_0"></span><?php echo $_SESSION['username'];?></span>   
        </div>    
        </div>    
        </div> 







        </td></tr>     --> 
        </tbody>    
        </table>
        </div>   
        </div>
        
       </div>
    </body> 
        
</html>
