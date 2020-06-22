<?php include('Inc/conn.php');?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="Css/page%20style.css"/>   
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <title>Re-Commitment Report</title>
    </head>
<body style="background-color: #80808054;">
    <div class="container">
    <div class="main">
    <div class="header"></div>    
    <div class="table" style="height: auto;">
         <table cellspacing="0" cellpadding="0" width="100%" border="0" id="table109" height="auto">
        
        
     <tr style="padding: 0px;">
    <td height="" width="400px" bgcolor="#333333" colspan="6">
    <b><font face="Verdana" size="2" color="#FFFFFF">RE-COMMITMENT REPORT</font></b></td>
         
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
        <td height="99" background="bg_b1.jpg" width="1342" valign="top" colspan="9">
        <table border="1" width="100%" id="table110" cellspacing="0" cellpadding="0" height="auto" bordercolorlight="#C0C0C0" bordercolordark="#FFFFFF">
            
            <tr>
            <td width="47" bgcolor="#171717" align="center" height="28"><font face="Verdana" color="#FFFFFF" style="font-size: 9pt">S.No.</font></td>
            
            <td width="150" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">User ID</font></td>
        <td width="100" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">Last Commit Date </font></td>      
         <td width="100" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">Total Commitment</font></td>
            </tr>
<?php             
$select = "SELECT * FROM ph WHERE Bonus = 'MARVO 30%'";
$q = mysqli_query($con,$select);
while ($res = mysqli_fetch_array($q)) {

?>
            <tr>
            <td width="47" align="center" height="30" bgcolor="#FFFFFF">
						            <font face="Verdana" style="font-size: 9pt"><?php echo $res['Id'];?></font></td>
                
                <td width="63" align="center" height="30" bgcolor="#FFFFFF">
						            <font face="Verdana" style="font-size: 9pt"><?php echo $res['Participant_email'];?></font></td>
                
                <td width="220" align="center" height="30" bgcolor="#FFFFFF">
									<font face="Verdana" style="font-size: 9pt; color: red; text-align: center;" ><?php echo $res['PH_date'];?> </font></td>
                
                <td width="121" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" size="2">
									3</font></td>
                
            </tr>
<?php } ?>

        </table>
        </td>
        </tr>
    
        </table> 
    </div>    
    <div class="footer"></div>    
    </div>
    
    </div>
    </body>
</html>