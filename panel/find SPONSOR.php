<?php include('Inc/conn.php');?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="Css/page%20style.css"/>    
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <title>Find Sponsor </title>
    </head>
<body>
    <div class="container">
    <div class="main">
    <div class="header"></div>    
    <div class="table" style="height: auto;">
     <table cellspacing="0" cellpadding="0" width="100%" border="0" id="table109" height="auto">
         <tr style="padding: 0px;">
    <td height="" width="400px" bgcolor="#333333" colspan="6">
    <b><font face="Verdana" size="2" color="#FFFFFF"> MANAGER LIST </font></b></td>
         
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
        <td height="22" width="174" bgcolor="#9e9e9e45" align="right"><b><font face="Verdana" size="2">For Email ID </font></b>&nbsp;</td>
        
            <td height="22" width="103" bgcolor="#9e9e9e45"><input type="text"/></td>
        
            <td height="22" width="80" bgcolor="#9e9e9e45"><b><font face="Verdana" style="font-size: 9pt" color="#FF0000"></font></b></td>
        
            <td height="22" width="79" bgcolor="#9e9e9e45"><b><font face="Verdana" style="font-size: 9pt" color="#FF0000"></font></b></td>
               <td height="22" width="79" bgcolor="#9e9e9e45"><b><font face="Verdana" style="font-size: 9pt" color="#FF0000"></font></b></td>
               <td height="22" width="79" bgcolor="#9e9e9e45"><b><font face="Verdana" style="font-size: 9pt" color="#FF0000"></font></b></td>
            
            <td height="22" width="222" bgcolor="#9e9e9e45"><input type="submit" value="Show" name="B1" onclick="myFunction();"></td>
            
            <td height="22" width="50" bgcolor="#9e9e9e45"><b><font face="Verdana"style="fontsize:9pt"color="#9e9e9e45">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b></td>
         </tr>        
        </table>
        <table border="1" width="100%" id="table138" cellspacing="0" cellpadding="0" bordercolorlight="#FFCD76" height="23" bordercolordark="#FFFFFF">
        
            <tr>
				<td width="838" height="18" align="left" colspan="4"  style="padding: 3px;">
				<b><font face="Verdana" size="2">SPONSOR LIST</font></b></td>

			</tr>
            
            <tr>
				<td width="38" height="23" align="center" bgcolor="#FFCD76">
				<font face="Verdana" style="font-size: 8pt; font-weight:700">
				Sr.No.</font></td>
				<td width="118" height="23" align="center" bgcolor="#FFCD76">
				<font face="Verdana" style="font-size: 8pt; font-weight:700">ID</font></td>
				<td width="375" height="23" align="center" bgcolor="#FFCD76">
				<font face="Verdana" style="font-size: 8pt; font-weight:700">Member Email</font></td>
				<td width="180" height="23" align="center" bgcolor="#FFCD76">
				<span style="font-weight: 700">
				<font face="Verdana" style="font-size: 8pt">SPONSOR ID</font></span></td>
				
			</tr>
    <?php 
$qeury = "SELECT * FROM `registration`";
$table = mysqli_query($con, $qeury);
$rows= mysqli_num_rows($table);
while ($res = mysqli_fetch_array($table)) {
	$Email = $res['Invite_email'];
?>        

            <tr>
				<td width="38" bgcolor="#FFFFFF" height="23" align="center">
				<font face="Verdana" size="2"><?php echo $res['User_id']; ?></font></td>
				<td width="118" bgcolor="#FFFFFF" height="23" align="center">
				<font face="Verdana" size="2">
				<?php echo $res['User_name']; ?></font></td>
				<td width="375" bgcolor="#FFFFFF" height="23" align="center">
				<font face="Verdana" size="2">
				<?php echo $res['E_mail']; ?> </font></td>
				

				<td width="180" bgcolor="#FFFFFF" height="23" align="center">
				<font face="Verdana" size="2">
				<?php echo $res['Invite_email']; ?></font></td>
			</tr>
    <?php } ?>        


            <tr>
				<td width="38" bgcolor="#FFCD76" height="23" align="center">
				&nbsp;</td>
				<td width="118" bgcolor="#FFCD76" height="23" align="center">
				&nbsp;</td>
				<td width="375" bgcolor="#FFCD76" height="23" align="center">
				&nbsp;</td>
				<td width="180" bgcolor="#FFCD76" height="23" align="center">
				&nbsp;</td>
				
			</tr>
        
        </table>
        
    </div>    
    <div class="footer"></div>    
    </div>
    
    </div>
    </body>
</html>