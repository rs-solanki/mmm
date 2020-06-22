<?php 
include('Inc/conn.php');
//include('../dash/Include/user_details.php');
include('function/function.php');
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="Css/page%20style.css"/>  
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <title>Blocked List</title>
    </head>
<body>
    <div class="container" style="height: auto;">
    <div class="main">
    <div class="header"></div>    
    <div class="table" style="height: auto;">
     <table cellspacing="0" cellpadding="0" width="100%" border="0" id="table109" height="auto">
        
        
     <tr style="padding: 0px;">
    <td height="" width="400px" bgcolor="#333333" colspan="6">
    <b><font face="Verdana" size="2" color="#FFFFFF">BLOCKED LIST REPORT</font></b></td>
         
         <td height="" width="422" bgcolor="#333333">
				<p align="center"><b><font face="Arial" size="2">
				<a href="index.php">
				<font size="2" color="#FFFFFF" face="Verdana">GO BACK TO MAIN MENU</font></a></font></b></p></td>
         
         <td height="" width="133" bgcolor="#333333" colspan="2">
					<p align="center"><b>
					<font face="Verdana" size="2" color="#FFFFFF">
					<a href="login.html">
					<font color="#FFFFFF" face="Verdana" size="2">
					<span style="text-decoration: none">Logout</span></font></a></font></b></p></td>
    </tr>   
        
        <tr>
        <td height="22" width="174" bgcolor="#9e9e9e45" align="right"><b><font face="Verdana" size="2">From Date </font></b>&nbsp;</td>
        
            <td height="22" width="103" bgcolor="#9e9e9e45"><input type="text" value="9/9/2019"/></td>
        
            <td height="22" width="80" bgcolor="#9e9e9e45"><b><font face="Verdana" style="font-size: 9pt" color="#FF0000"></font></b></td>
        
            <td height="22" width="79" bgcolor="#9e9e9e45"><b><font face="Verdana" style="font-size: 9pt" color="#FF0000"></font></b></td>
            
            <td height="22" width="124" bgcolor="#9e9e9e45"><b><font face="Verdana" style="font-size: 9pt" color="#FF0000">To Date:</font></b></td>
            
            <td height="22" width="427" bgcolor="#9e9e9e45"><input type="text" value="9/8/2019"></td>
            
            <td height="22" width="222" bgcolor="#9e9e9e45"><input type="submit" value="Show" name="B1" onclick="myFunction();"></td>
            
            <td height="22" width="50" bgcolor="#9e9e9e45"><b><font face="Verdana"style="fontsize:9pt"color="#9e9e9e45">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b></td>
        </tr>
        
        <tr>
        <td height="99" background="bg_b1.jpg" width="1342" valign="top" colspan="9">
        <table border="1" width="100%" id="table110" cellspacing="0" cellpadding="0" height="auto" bordercolorlight="#C0C0C0" bordercolordark="#FFFFFF">
            
            <tr>
            <td width="47" bgcolor="#171717" align="center" height="28"><font face="Verdana" color="#FFFFFF" style="font-size: 9pt">Rrq. No</font></td>
            
            <td width="63" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF"> Date</font></td>
          
         <td width="220" bgcolor="#171717" align="left" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">User Name ID</font></td>
          
        <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">User Name </font></td>
             
        <td width="95" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">eMail </font></td>
              
        <td width="95" bgcolor="#171717" align="center" height="28" colspan="2"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">	 Action	</font></td>
                
                      </tr>
            
<?php

if($_GET['user_id'])
{
    $q2 = "UPDATE registration SET Status='registrar' WHERE User_id='".$_GET['user_id']."'";
    $run2 = mysqli_query($con,$q2);
}

$select_1 = "SELECT User_name, Reg_date, User_id, E_mail FROM registration WHERE Status='Block' ORDER BY User_name;";
$run_1 = mysqli_query($con,$select_1);
$counter=1;
 while ($res = mysqli_fetch_array($run_1)) {
    // $User_name = getUserName($res['User_id']);
    $user_h_name = $res['User_id'];
 ?>

            <tr>
            <td width="47" align="center" height="30" bgcolor="#FFFFFF">
						            <font face="Verdana" style="font-size: 9pt"><?php echo $counter; ?></font></td>
                
                <td width="63" align="center" height="30" bgcolor="#FFFFFF">
						            <font face="Verdana" style="font-size: 9pt"><?php echo $res['Reg_date']; ?></font></td>
                
                <td width="220" align="center" height="30" bgcolor="#FFFFFF">
                                    <font face="Verdana" style="font-size: 9pt; color: red; text-align: center;" ><?php echo $res['User_id']; ?></font></td>

                <td width="220" align="center" height="30" bgcolor="#FFFFFF">
									<font face="Verdana" style="font-size: 9pt; color: red; text-align: center;" ><?php echo $res['User_name']; ?></font></td>



                
                <td width="250" height="30" bgcolor="#FFFFFF" align="left">
									<font face="Verdana" size="2">
									<?php echo $res['E_mail']; ?></font></td>
                
                              
                
                
                <td width="120" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt"><a href="admin_block_list.php?user_id=<?php echo $res['User_id']; ?>"><?php echo $res['status']; ?>Unblock</a></font></td>
            </tr>
<?php $counter++; } ?>

        </table>
        </td>
        </tr>
        
        
        
        </table>   
    <div class="footer"></div>    
    </div>
        </div>
        </div>
    </body>
</html>