<?php
include('../Inc/conn.php');
?>
<!DOCTYPE html>
<html>
<head>
<!--<link rel="stylesheet" href="Css/page%20style.css"/>  -->
<link rel="stylesheet" href="../Css/Search%20member.css"/>   
    <title>Search Member</title>
     <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <script src="../saerxh.js"></script>
    </head>
<body>
    <div class="container" >
    <div class="main">
    <div class="header"></div>    
    <div class="table" style="height: auto;">
    <table cellspacing="0" cellpadding="0" width="100%" border="0" id="table109" height="auto">
        
        
     <tr style="padding: 0px;">
    <td height="" width="987" bgcolor="#333333" colspan="6">
    <b><font face="Verdana" size="2" color="#FFFFFF">SEARCH MEMBER NAME</font></b></td>
         
         <td height="" width="222" bgcolor="#333333">
				<p align="center"><b><font face="Arial" size="2">
				<a href="../index.php">
				<font size="2" color="#FFFFFF" face="Verdana">GO BACK TO MAIN MENU</font></a></font></b></p></td>
         
         <td height="" width="133" bgcolor="#333333" colspan="2">
					<p align="center"><b>
					<font face="Verdana" size="2" color="#FFFFFF">
					<a href="../login.php">
					<font color="#FFFFFF" face="Verdana" size="2">
					<span style="text-decoration: none">Logout</span></font></a></font></b></p></td>
    </tr>   
        
        <tr>
        <td height="22" width="174" bgcolor="#FFCC00" align="right"><b><font face="Verdana" size="2">Search&nbsp;By&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp; </font></b>&nbsp;</td>
        
            <td height="22" width="103" bgcolor="#FFCC00"><input type="radio" value="NAME" checked="" name="R1"><b><font size="2" face="Verdana" style="font-size: 9pt" color="#FF0000">Name</font></b></td>
        
            <td height="22" width="80" bgcolor="#FFCC00"><input type="radio" name="R1" value="ID"><b><font face="Verdana" style="font-size: 9pt" color="#FF0000">ID</font></b></td>
        
            <td height="22" width="79" bgcolor="#FFCC00"><input type="radio" name="R1" value="PIN"><b><font face="Verdana" style="font-size: 9pt" color="#FF0000">PIN</font></b></td>
            
            <td height="22" width="124" bgcolor="#FFCC00"><input type="radio" name="R1" value="MOBILE"><b><font face="Verdana" style="font-size: 9pt" color="#FF0000">Mobile/Phone</font></b></td>
            
            <td height="22" width="427" bgcolor="#FFCC00"><input type="text" name="txtsearch" size="49" id="seacrh"></td>
            
            <td height="22" width="222" bgcolor="#FFCC00"><input type="submit" value="Click hear to search" name="B1" onclick="myFunction();"></td>
            
            
            <td height="22" width="50" bgcolor="#FFCC00"><b><font face="Verdana" style="font-size: 9pt"color="#FF0000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b></td>
        </tr>
        
        <tr>
        <td height="99" background="bg_b1.jpg" width="1342" valign="top" colspan="9">
        <table border="1" width="100%" id="table110" cellspacing="0" cellpadding="0" height="auto" bordercolorlight="#C0C0C0" bordercolordark="#FFFFFF">
            
            <tr>
            <td width="47" bgcolor="#171717" align="center" height="28"><font face="Verdana" color="#FFFFFF" style="font-size: 9pt">S.No.</font></td>
            
            <td width="63" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">ID</font></td>
            
         <td width="220" bgcolor="#171717" align="left" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">Member Name</font></td>
            
        <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">Mobile </font></td>
             
        <td width="95" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">Email </font></td>
              
        <td width="95" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">STATE </font></td>
                
       <!--  <td width="120" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">Email</font></td>    <td width="91" bgcolor="#171717" align="center" height="28">
							<font face="Verdana" style="font-size: 9pt" color="#FFFFFF">
							Pin</font></td> -->
                
                <td width="87" bgcolor="#171717" align="center" height="28">
							<font face="Verdana" style="font-size: 9pt" color="#FFFFFF">
							Password</font></td>
                
                <td width="84" bgcolor="#171717" align="center" height="28">
							<font face="Verdana" style="font-size: 9pt" color="#FFFFFF">
							Sponsor Email</font></td>
                
                <!-- <td width="83" bgcolor="#171717" align="center" height="28">
							<font face="Verdana" style="font-size: 9pt" color="#FFFFFF">
							Under leg</font></td> -->
                
                <td width="44" bgcolor="#171717" align="center" height="28">
							<font face="Verdana" size="2" color="#FFFFFF">email</font></td>
                
                <td width="33" bgcolor="#171717" align="center" height="28">
							<font face="Verdana" size="2" color="#FFFFFF">Block</font></td>
                
                <td width="35" bgcolor="#171717" align="center" height="28">
							<font face="Verdana" style="font-size: 9pt" color="#FFFFFF">
							Edit</font></td>
                
                <td width="35" bgcolor="#171717" align="center" height="28">
							<font face="Verdana" style="font-size: 9pt" color="#FFFFFF">
                                Dashboard</font></td>
            </tr>
            
<!--            1-->
<?php 
$qeury = "SELECT * FROM `registration`";
$table = mysqli_query($con, $qeury);
// $rows= mysqli_num_rows($table);

while ($res = mysqli_fetch_array($table)) {
    

?>
            <tr>
            <td width="47" align="center" height="30" bgcolor="#FFFFFF">
						            <font face="Verdana" style="font-size: 9pt"><?php echo $res['User_id']; ?></font></td>
                
                <td width="63" align="center" height="30" bgcolor="#FFFFFF">
						            <font face="Verdana" style="font-size: 9pt"><?php echo $res['User_name']; ?></font></td>
                
                <td width="220" align="left" height="30" bgcolor="#FFFFFF">
									<font face="Verdana" style="font-size: 9pt"> <?php echo $res['User_name']; ?></font></td>
                
                <td width="121" height="30" bgcolor="#FFFFFF" align="left">
									<font face="Verdana" size="2">
									<?php echo $res['Mobile_number']; ?></font></td>
                
                <td width="95" height="30" bgcolor="#FFFFFF" align="left">
									<font face="Verdana" style="font-size: 9pt"><?php echo $res['E_mail']; ?></font></td>
                
                <td width="95" height="30" bgcolor="#FFFFFF" align="left">
									<font face="Verdana" style="font-size: 9pt"><?php echo $res['Country']; ?></font></td>
                
                <td width="120" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt"><?php echo $res['Password']; ?></font></td>
                
                <td width="91" height="30" align="center" bgcolor="#FFFFFF">
									<font face="Verdana" style="font-size: 9pt"><?php echo $res['Invite_email']; ?></font></td>
                
                <!-- <td width="87" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt">plus3456</font></td> -->
                
                <!-- <td width="84" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt"><?php echo $res['Invite_email']; ?></font></td> -->
                
                <!-- <td width="83" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt">sunny</font></td> -->
                
                <td width="44" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana">
									<b>
							<a href="Search Member.php?email=<?php echo $res['E_mail']; ?>" onclick="PopupCenter('reply page.php?txtemail=<?php echo $res['E_mail']; ?>.com&amp;MSG_NO=&amp;Mobile=<?php echo $res['Mobile_number']; ?>&amp;pinno=', 'myPop1',500,450);">Reply</a></b></font></td>
                
                <td width="33" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt">
									<b>
									<font size="2">
									<a href="block%20id%20page.php?email=<?php echo $res['E_mail']; ?>"> 
									
									Open
									
									</a></font></b></font></td>
                
                <td width="35" height="30" bgcolor="#FFFFFF">
									<font face="Verdana" style="font-size: 9pt">&nbsp;
									<b>
									<font size="2">
									<a href="Edit%20btn.php?email=<?php echo $res['E_mail']; ?>">Edit</a></font></b></font></td>
                
                <td width="35" height="30" bgcolor="#FFFFFF">
									<font face="Verdana" style="font-size: 9pt">&nbsp;
									<b>
									<font size="2">
									<a target="_blank" href="https://futuremillionaire.in/checkuser_admin.asp?txtId=suhuan&amp;txtpassword=plus3456"> Dashboard </a>
									
                                        </font></b></font></td>
            
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
    <script>
function PopupCenter(pageURL, title,w,h) {
var left = (screen.width/2)-(w/2);
var top = (screen.height/2)-(h/2);
var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
} 
</script>


    </body>
</html>