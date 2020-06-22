<!DOCTYPE html>
<html>
<head>
<!--<link rel="stylesheet" href="Css/page%20style.css"/>  -->
<link rel="stylesheet" href="../Css/Search%20member.css"/>   
 <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
 <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
 <script type="text/javascript" src="../js/filter.js"></script>
    <title>Member Registration Report</title>
    </head>
<body>
    <div class="container" style="padding: 0px 100px;" >
    <div class="main">
    <div class="header"></div>    
    <div class="table" style="height: auto;">
    <table cellspacing="0" cellpadding="0" width="100%" border="0" id="table109" height="auto">
        
        
     <tr style="padding: 0px;">
    <td height="" width="400px" bgcolor="#333333" colspan="6">
    <b><font face="Verdana" size="2" color="#FFFFFF">MEMBERS REGISTRATION REPORT</font></b></td>
         
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
        
        <tr>
        <td height="22" width="174" bgcolor="#FFCC00" align="right"><b><font face="Verdana" size="2">From Date </font></b>&nbsp;</td>
        
            <td height="22" width="103" bgcolor="#FFCC00"><input type="text" value="9/9/2019" id="searchInput"></td>
        
            <td height="22" width="80" bgcolor="#FFCC00"><b><font face="Verdana" style="font-size: 9pt" color="#FF0000"></font></b></td>
        
            <td height="22" width="79" bgcolor="#FFCC00"><b><font face="Verdana" style="font-size: 9pt" color="#FF0000"></font></b></td>
            
            <td height="22" width="124" bgcolor="#FFCC00"><b><font face="Verdana" style="font-size: 9pt" color="#FF0000">To Date:</font></b></td>
            
            <td height="22" width="427" bgcolor="#FFCC00"><input type="text" value="9/8/2019" id="searchInput"></td>
            
            <td height="22" width="222" bgcolor="#FFCC00"><input type="submit" value="Show" name="B1" onclick="myFunction();"></td>
            
            
            <td height="22" width="50" bgcolor="#FFCC00"><b><font face="Verdana" style="font-size: 9pt"color="#FF0000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b></td>
        </tr>
        
        <tr>
        <td height="99" background="bg_b1.jpg" width="1342" valign="top" colspan="9">

<?php 
$con = mysqli_connect('localhost','root','','mmm');
$qeury = "SELECT * FROM `registration`";
$table = mysqli_query($con, $qeury);
$rows= mysqli_num_rows($table);


if($rows != 0){

?>  



        <table border="1" width="100%" id="table110" cellspacing="0" cellpadding="0" height="auto" bordercolorlight="#C0C0C0" bordercolordark="#FFFFFF">
            
            <tr>
            <td width="47" bgcolor="#171717" align="center" height="28"><font face="Verdana" color="#FFFFFF" style="font-size: 9pt">S.No.</font></td>
            
            <td width="63" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">Reg. Date</font></td>
        <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">ID </font></td>      
         <td width="220" bgcolor="#171717" align="left" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">Member Name</font></td>
          
        <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">Mobile </font></td>
             
        <td width="95" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">Country </font></td>
              
        <td width="95" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">Type</font></td>
                
        <td width="120" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">Status</font></td>    <td width="91" bgcolor="#171717" align="center" height="28">
							<font face="Verdana" style="font-size: 9pt" color="#FFFFFF">
							Sponsor ID</font></td>
                
               <!--  <td width="87" bgcolor="#171717" align="center" height="28">
							<font face="Verdana" style="font-size: 9pt" color="#FFFFFF">
							Under leg ID</font></td>
                
                <td width="84" bgcolor="#171717" align="center" height="28">
							<font face="Verdana" style="font-size: 9pt" color="#FFFFFF">
							R/L</font></td> -->
               
        
            </tr>
            

 <?php
    while ($result = mysqli_fetch_assoc($table)) {

  


   echo "<tr>
            <td width='47' align='center' height='30' bgcolor='#FFFFFF'>
                                    <font face='Verdana' style='font-size: 9pt'>".$result['User_id']."</font></td>
                
                <td width='100' align='center' height='30' bgcolor='#FFFFFF'>
                                    <font face='Verdana' style='font-size: 9pt'>".$result['Reg_date']."</font></td>
                
                <td width='220' align='center' height='30' bgcolor='#FFFFFF'>
                                    <font face='Verdana' style='font-size: 9pt; color: red; text-align: center;'>".$result['User_name']."</font></td>
                
                <td width='121' height='30' bgcolor='#FFFFFF' align='left'>
                                    <font face='Verdana' size='2'>
                                    ".$result['User_name']."</font></td>
                
                <td width='95' height='30' bgcolor='#FFFFFF' align='left'>
                                    <font face='Verdana' style='font-size: 9pt'>".$result['Mobile_number']."</font></td>
                
                <td width='130' height='30' bgcolor='#FFFFFF' align='left'>
                                    <font face='Verdana' style='font-size: 9pt'>".$result['Country']."</font></td>
                
                <td width='120' height='30' bgcolor='#FFFFFF' align='center'>
                                    <font face='Verdana' style='font-size: 9pt'></font></td>
                
                <td width='91' height='30' align='center' bgcolor='#FFFFFF'>
                                    <font face='Verdana' style='font-size: 9pt'>Paid</font></td>
                
                <td width='87' height='30' bgcolor='#FFFFFF' align='center'>
                                    <font face='Verdana' style='font-size: 9pt'>".$result['Invite_email']."</font></td>
                
               
                
            </tr>

";

    }

}else{


}

?>
            




        </table>
        </td>
        </tr>
        
        
    </table>       
    </div>    
    <div class="footer"></div>    
    </div>
    
    </div>
    <script>
function PopupCenter(pageURL, title,w,h) {
var left = (screen.width/2)-(w/2);
var top = (screen.height/2)-(h/2);
var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
} 
</script>


    </body>
</html>