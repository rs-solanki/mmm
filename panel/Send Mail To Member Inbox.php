<?php
include('Inc/conn.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="Css/page%20style.css"/>    
<link rel="stylesheet" href="Css/box%20style.css"/>    
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <title>Send Mail To Member Inbox</title>
    </head>
<body>
    <div class="container">
    <div class="main">
    <div class="header"></div>    
    <div class="table" style="height:auto;">
         <table cellspacing="0" cellpadding="0" width="100%" border="0" id="table109" height="auto">
        
        
     <tr style="padding: 0px;">
    <td height="" width="400px" bgcolor="#333333" colspan="6">
    <b><font face="Verdana" size="2" color="#FFFFFF">Send Mail:</font></b></td>
         
         <td height="" width="422" bgcolor="#333333">
				<p align="center"><b><font face="Arial" size="2">
				<a href="index.php">
				<font size="2" color="#FFFFFF" face="Verdana">GO BACK TO MAIN MENU</font></a></font></b></p></td>
         
         <td height="" width="133" bgcolor="#333333" colspan="2">
					<p align="center"><b>
					<font face="Verdana" size="2" color="#FFFFFF">
					<a href="login.php">
					<font color="#FFFFFF" face="Verdana" size="2">
					<span style="text-decoration: none">Logout</span></font></a></font></b></p></td>
    </tr> </table>
        <div class="box">
        <div class="content_box">
        <div class="content_box_heading">Send Mail:</div>  
        <form method="post">   
         <table style="width: 100%;padding: 5px; box-sizing: border-box;">
             
        <tr><td width="200" style="font-weight: 800;">Sending Mail Type</td><td><input type="radio" name="type_mail" value="Member"/>Member <input type="radio" name="type_mail" value="All"/> All</td></tr>   
          <form method="POST">
            <?php           
            $name = $_GET['name'];
$select = "SELECT * FROM `tickets` WHERE User_id = '$name'";
$q = mysqli_query($con,$select);
$run = mysqli_fetch_array($q);
    
?>
             <tr><td  width="200" style="font-weight: 800; padding-top: 10px; text-align: center;">Mail To</td><td style="padding-top: 10px;"><input type="text" name="email" value="<?php echo $run['User_email'];?>" /> <font size="1" face="Verdana">Type User ID </font>  </td></tr>
            <tr><td  width="200" style="font-weight: 800; padding-top: 10px; text-align: center;">Subject</td><td style="padding-top: 10px;"><input type="text" name="cro_name"/></td></tr>
             
             <tr><td  width="200" style="font-weight: 800; padding-top: 10px; text-align: center;">Message</td><td style="padding-top: 10px;"><textarea rows="5" cols="40" name="msg"></textarea></td></tr>
             
             <tr><td  width="200" style="font-weight: 800; padding-top: 10px; "></td><td><input type="submit" value="Submit" name="Submit"/></td></tr>
            </form>
            <?php 

    $name = $_GET['name'];   
    $id = $_GET['id'];     
$cro_name = $_POST['cro_name'];
$cro_date = date('d/m/y h:m:s');
$cro_msg = $_POST['msg'];

if(isset($_POST['Submit'])){

$q = "UPDATE `tickets` SET CRO_name ='$cro_name', CRO_reply ='$cro_msg', CRO_date ='$cro_date', Status = 'Yes' WHERE User_id = '$name' AND Ticket_id = '$id'";

$run = mysqli_query($con,$q);

if($run){
echo '<script>alert("Reply Successfully");</script>';
  echo '<script>window.open("Mail Send By Members Report.php","_self");</script>';

}else{
echo '<script>alert("Reply Not Successfully");</script>';
  echo '<script>window.open("Send Mail To Member Inbox.php","_self");</script>';

}

}


            ?>
        </table>  
        </form>     
        </div>
        </div>
        
        
        </div>    
    <div class="footer"></div>    
    </div>
    
    </div>
    </body>
</html>