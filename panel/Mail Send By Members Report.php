<?php
include('Inc/conn.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="Css/page%20style.css"/>  
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <title>Mail Send By Member Report</title>
    <style>body{margin: 0px; padding: 0px;}</style>
    </head>
<body>
    <div class="container" style="padding: 0px 30px; height: auto;">
    <div class="main">
    <div class="header"></div>    
    <div class="table" style="height: auto;">
        
    <table cellspacing="0" cellpadding="0" width="100%" border="0" id="table109" height="auto">
        <tr>
        <td height="" width="400px" bgcolor="#333333" colspan="6">
    <b><font face="Verdana" size="2" color="#FFFFFF">Sent Mail Report::</font></b></td>
         
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
        </tr>
         <tr>
        <td height="22" width="174" bgcolor="grey" align="right"><b><font face="Verdana" size="2" style="color: white;">From Date </font></b>&nbsp;</td>
        
            <td height="22" width="103" bgcolor="grey"><input type="date" value=""/></td>
        
            <td height="22" width="80" bgcolor="grey"><b><font face="Verdana" style="font-size: 9pt" color="White"></font></b></td>
        
            <td height="22" width="79" bgcolor="grey"><b><font face="Verdana" style="font-size: 9pt" color="#FF0000"></font></b></td>
            
            <td height="22" width="124" bgcolor="grey"><b><font face="Verdana" style="font-size: 9pt" color="white">To Date:</font></b></td>
            
            <td height="22" width="427" bgcolor="grey"><input type="date" value=""></td>
            
            <td height="22" width="222" bgcolor="grey"><input type="submit" value="Show" name="B1" onclick="myFunction();"></td>
            
            
            <td height="22" width="50" bgcolor="grey"><b>
        <font face="Verdana" style="font-size:9pt;"color="#FF0000"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font></b></td>
        </tr> 
        <tr>
               <table border="1" width="100%" id="table110" cellspacing="0" cellpadding="0" height="auto" bordercolorlight="#C0C0C0" bordercolordark="#FFFFFF" >
       <tr>
            <td width="47" bgcolor="#171717" align="center" height="28"><font face="Verdana" color="#FFFFFF" style="font-size: 9pt">S.No.</font></td>
            
            <td width="63" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF"> Sent Date</font></td>
        <td width="100" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">From Member</font></td>      
         <td width="100" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">Subject</font></td>
            <td width="150" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">Message</font></td>
           <td width="50" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">  Receipt</font></td>
           <td width="50" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">Reply</font></td>
           </tr>
<?php           
$select = "SELECT * FROM `tickets` WHERE Status = 'no'";
$q = mysqli_query($con,$select);
while ($run = mysqli_fetch_array($q)) {
	
?>
            <tr>
            <td width="47" bgcolor="white" align="center" height="28"><font face="Verdana" color="black" style="font-size: 9pt"><?php echo $run['Id']; ?></font></td>
             <td width="47" bgcolor="white" align="center" height="28"><font face="Verdana" color="black" style="font-size: 9pt"><?php echo $run['Msg_date']; ?></font>
                </td>
                 <td width="47" bgcolor="white" align="center" height="28"><font face="Verdana" color="black" style="font-size: 9pt"><?php echo $run['User_id']; ?></font>
                </td>
                 <td width="47" bgcolor="white" align="center" height="28"><font face="Verdana" color="black" style="font-size: 9pt; cursor: pointer;" title="<?php echo $run['Topics']; ?>"><?php echo $run['Title']; ?></font>
                </td>
                 <td width="47" bgcolor="white" align="center" height="28"><font face="Verdana" color="black" style="font-size: 9pt"><?php echo $run['Msg']; ?></font></td>
                 <td width="47" bgcolor="white" align="center" height="28"><font face="Verdana" color="black" style="font-size: 9pt"><a href="<?php echo $run['Img']; ?>">View</a></font>
                </td>
                 <td width="47" bgcolor="white" align="center" height="28"><font face="Verdana" color="black" style="font-size: 9pt"><a href="Send%20Mail%20To%20Member%20Inbox.php?name=<?php echo $run['User_id']; ?>&id=<?php echo $run['Ticket_id']; ?>">Reply</a></font>
                </td>
                   
            </tr>   

<?php } ?>

                   
              </table>           
          </tr>
        
        
        </table>
        
    </div>    
    <div class="footer"></div>    
    </div>
    
    </div>
    </body>
</html>