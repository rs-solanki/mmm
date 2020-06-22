<?php 
include('../Inc/conn.php');
//include('../dash/Include/user_details.php');
include('../function/function.php');
$User_id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../Css/page%20style.css"/>  
<link rel="stylesheet" href="../Css/accpet%20btn.css"/>
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <title>Happiness GH Letter Accept</title>
    </head>
<body style="background-color: #80808057;">
    <div class="container" style="height: auto;">
    <div class="main">
    <div class="header"></div>    
    <div class="table" style="height: auto;">
      <table cellspacing="0" cellpadding="0" width="100%" border="0" id="table109" height="auto">
         <tr style="padding: 0px;">
    <td height="" width="400px" bgcolor="#333333" colspan="6">
    <b><font face="Verdana" size="2" color="#FFFFFF">Accepted Reply: ID</font></b></td>
         
         <td height="" width="422" bgcolor="#333333">
				<p align="center"><b><font face="Arial" size="2">
				<a href="../index.php">
				<font size="2" color="#FFFFFF" face="Verdana">GO BACK TO MAIN MENU</font></a></font></b></p></td>
         
         <td height="" width="133" bgcolor="#333333" colspan="2">
					<p align="center"><b>
					<font face="Verdana" size="2" color="#FFFFFF">
					<a href="../login.html">
					<font color="#FFFFFF" face="Verdana" size="2">
					<span style="text-decoration: none">Logout</span></font></a></font></b></p></td>
    </tr>   
        </table>

       <div class="main_area">
<?php 

$id = $_GET['name'];
$select = "SELECT * FROM  testmonials WHERE User_id = '".$id."'";
$rom = mysqli_query($con,$select);
$run = mysqli_fetch_array($rom);

?>



       <form name="feedback_accept_form" method="POST" action="">
        <div class="news_box" style="height: auto; border: 3px solid black; rgb(0, 102, 255);">
        <div class="news_update" style="background-color: rgb(0, 102, 255);">Accepted Reply: <?php echo $run['User_id']; ?></div>  
          <div class="main_news"><span class="heading_news" style="font-weight: 900;">Message:</span>    <textarea name="msg" rows="6" cols="40" style="color: #000000; font-family: Verdana; font-size: 10pt; background-color: #ADD2F1; display: block;"
            ><?php echo $run['TestMsg']; ?></textarea></div> 
            <div style="margin:10px 40px; ">
              <input type="text" name="" style="background-color: #ADD2F1; width: 100%;" value="<?php echo $run['Video_Ink']?>">
            </div>
            <div class="Regards"><span class="heading_news" style="font-weight: 900;">Active:</span>  <select size="1" name="combo_status">
							<option selected="" value="YES">YES</option>
							<option value="NO">NO</option>
							</select></div>
            <input name="User_id" type="hidden" value="<?php echo $id; ?>"/>
            <div class="Regards"><span class="heading_news" style="font-weight: 900;">Video Income:</span>  <select size="1" name="combo_video_bonus">
							<option selected="" value="YES">YES</option>
							<option value="NO">NO</option>
							</select></div>
            <div style="padding: 20px 90px;"><input type="submit" name="feedback_active_submit" value="Accept" style="font-family: Verdana; color: #000000; font-size: 10pt; font-weight: bold"></div>
            
           </div>
        </div>
        </form>
        <?php feedbackAccept(); ?>
      </div>
        
    <div class="footer"></div>    
    </div>
    
    </div>
    </body>
</html>