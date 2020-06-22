<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="Css/page%20style.css"/>  
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <title>Commitment Report</title>
<!--
    <script>
    function myFunctin(){
        var ele = document.getElementById('from').value;
        var elel =document.getElementById('demo').innerHTML = ele;
    }
    
    </script>
-->
    </head>
<body>
    <div class="container" style="padding: 0px;">
    <div class="main" style="padding: 0px;">
    <div class="header"></div>    
    <div class="table" style="height: auto;">
         <table cellspacing="0" cellpadding="0" width="100%" border="0" id="table109" height="auto">
        
        
     <tr style="padding: 0px;">
    <td height="" width="400px" bgcolor="#333333" colspan="6">
    <b><font face="Verdana" size="2" color="#FFFFFF">MEMBERS REGISTRATION REPORT</font></b></td>
         
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
        <td height="22" width="174" bgcolor="#FFCC00" align="right"><b><font face="Verdana" size="2">From Date </font></b>&nbsp;</td>
        
            <td height="22" width="103" bgcolor="#FFCC00"><input type="date" id="from"/></td>
        
            <td height="22" width="80" bgcolor="#FFCC00"><b><font face="Verdana" style="font-size: 9pt" color="#FF0000"></font></b></td>
        
            <td height="22" width="79" bgcolor="#FFCC00"><b><font face="Verdana" style="font-size: 9pt" color="#FF0000"></font></b></td>
            
            <td height="22" width="124" bgcolor="#FFCC00"><b><font face="Verdana" style="font-size: 9pt" color="#FF0000">To Date:</font></b></td>
            
            <td height="22" width="427" bgcolor="#FFCC00"><input type="date" /></td>
            
            <td height="22" width="222" bgcolor="#FFCC00"><input type="submit" value="Show" name="B1" onclick="myFunctin();"></td>
            
            
            <td height="22" width="50" bgcolor="#FFCC00"><b><font face="Verdana" style="font-size: 9pt"color="#FF0000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b></td>
        </tr>
             
             
             
               <tr>
        <td height="99" background="bg_b1.jpg" width="1342" valign="top" colspan="9">
        <table border="1" width="100%" id="table110" cellspacing="0" cellpadding="0" height="auto" bordercolorlight="#C0C0C0" bordercolordark="#FFFFFF">
            
            <tr>
            <td width="100" bgcolor="#171717" align="center" height="28"><font face="Verdana" color="#FFFFFF" style="font-size: 9pt">Commit Date</font></td>
            
            <td width="150" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">Commit Date-Time</font></td>
        <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">ID </font></td>      
         <td width="220" bgcolor="#171717" align="left" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">Member Name</font></td>
          
        <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">Status </font></td>
             
        <td width="95" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">Sponsor Email</font></td>
              
           <td width="91" bgcolor="#171717" align="center" height="28">
							<font face="Verdana" style="font-size: 9pt" color="#FFFFFF">
							Amount</font></td>
                
               
        
            </tr>
<?php
$con = mysqli_connect('localhost','root','','mmm');
$qeury = "SELECT * FROM `ph` WHERE Bonus = 'MARVO 30%'";
$table = mysqli_query($con, $qeury);
$rows= mysqli_num_rows($table);
while ($result = mysqli_fetch_assoc($table)) {

?>            

            <tr>
            <td width="47" align="center" height="30" bgcolor="#FFFFFF">
						            <font face="Verdana" style="font-size: 9pt"><?php echo $result['Id']; ?></font></td>
                
                <td width="63" align="center" height="30" bgcolor="#FFFFFF">
						            <font face="Verdana" style="font-size: 9pt"><?php echo $result['PH_date']; ?></font></td>
                
                <td width="220" align="center" height="30" bgcolor="#FFFFFF">
									<font face="Verdana" style="font-size: 9pt; color: red; text-align: center;" ><?php echo $result['Participant_email']; ?></font></td>
                
                <td width="121" height="30" bgcolor="#FFFFFF" align="left">
									<font face="Verdana" size="2">
									<?php echo $result['Participant']; ?></font></td>
                
                <td width="95" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt"><?php echo $result['payment_status']; ?></font></td>
                
                <td width="130" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt">Roman</font></td>
                
               
                
                <td width="87" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt"><?php echo $result['Amount']; ?><?php echo $result['Type_c']; ?></font></td>
                
            </tr>

        <?php } ?>
            <!--  <tr>
             <td width="776" align="center" height="25" bgcolor="#333333" colspan="8">
						            <b>
									<font face="Verdana" size="2" color="#FFFFFF">
									Total</font></b></td>
               <td width="105" height="25" bgcolor="#333333" align="center">
									<b>
									<font color="#FFFFFF" face="Verdana" size="2">
									16.05</font></b></td>
             
            </tr> -->  
        </table>
        </td>
        </tr>
             
          
        
        </table>
        <p id="demo"></p>
    </div>    
    <div class="footer"></div>    
    </div>
    
    </div>
    </body>
</html>