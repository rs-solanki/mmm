<?php include('Inc/conn.php');?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="Css/page%20style.css"/>    
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <title>CRM Member</title>
    </head>
<body bgcolor="darkgray">
    <div class="container">
    <div class="main">
    <div class="header"></div>    
    <div class="table" style="height: auto; background-color: white;">
        <table cellspacing="0" cellpadding="0" width="100%" border="0" id="table109" height="auto">
         <tr style="padding: 0px;">
    <td height="" width="400px" bgcolor="#333333" colspan="6">
    <b><font face="Verdana" size="2" color="#FFFFFF"> MEMBER -CRM</font></b></td>
         
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
        </table> 
        <div style="width: 100%; height: auto; background-color: white; box-sizing: border-box; padding: 30px; 300px;"><b>Username:<input type="text" size="" maxlength="110" value="" name="part" id="part" list="part-list" style="width: 200px;">
                <datalist id="part-list">
          <?php  
$q = "SELECT * FROM  registration";
$run = mysqli_query($con,$q);


while ($res = mysqli_fetch_array($run)) {

?>          
                <option value="<?php echo $res['E_mail'];?>">
                <span><?php echo $res['User_name'];?></span>   
                </option>   
            <?php } ?>
                </datalist>
                <input type="submit" id="find_user"  onclick="valueSet();"></b><br><br>
<b>User Email ID: <input type="text" name="php_value" value="" id="part_2" style="border: none; background: none;width: 300px;"></b>


        </div>
        <div style="width: 100%; height: auto; background-color: white; padding: 20px 30px; box-sizing: border-box;">
       <div style="width: 100%; height: auto; background-color:; border: 1px solid black; padding: 10px 0px 0px 0px;">
           <a href="edit%20profile.html" style="font-weight: 400; font-size: 17px;margin-left: 10px;">Edit</a>
           
           
          <div style=" display: flex; flex-direction: row;margin-top: 20px; height: auto;">
              
           <div style="width: 30%; height: auto; background-color: ;border-top: 1px solid black;">
              <p style="text-align: right;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black; padding: 4px;">Registration No	</p>
               <p style="text-align: right;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 4px;" >Registration Date	</p>
               <p style="text-align: right;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 4px;">User ID	</p>
               <p style="text-align: right;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 4px;">Name	</p>
               <p style="text-align: right;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 4px;">Date of birth		</p>
               <p style="text-align: right;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 4px;">Mobile No	</p>
               <p style="text-align: right;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 4px;">Email ID		</p>
               <p style="text-align: right;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 4px;">Address		</p>
               <p style="text-align: right;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 4px;">City	</p>
               <p style="text-align: right;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 4px;">Freez Status	</p>
               <p style="text-align: right;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 4px;">Login Details	</p>
               <p style="text-align: right;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 4px;">Sponsor ID/Name		</p>
               <p style="text-align: right;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 4px;">Placement ID/Name	</p>
              
        </div> 
           <div style="width: 70%; height: 300px; background-color:;border-top: 1px solid black;">
                <p style="text-align: left;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black; padding: 4px;">10120</p>
               <p style="text-align: left;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 4px;" >3/03/2019	</p>
               <p style="text-align: 
                         left: ;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 4px;color: red;">rom	</p>
               <p style="text-align:left;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 4px;">KHAN	</p>
               <p style="text-align: left;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 4px;">9/7/1988		</p>
               <p style="text-align: left;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 4px;">7849678324	</p>
               <p style="text-align: 
                         left: ;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 4px;">romanJames23@gmail.com	</p>
               <p style="text-align: left;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 4px;">&nbsp;		</p>
               <p style="text-align: left;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 4px;">&nbsp;	</p>
               <p style="text-align: left;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 4px;">&nbsp;	</p>
               <p style="text-align: left;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 4px;"><span style="color: red; margin-right: 30px;">	Login Password : 1234567 </span><span style="color: red;"> Security Code: 1234567 </span>	</p>
               <p style="text-align: left;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 4px;">User ID : sunny Name : SUNNY PEN Mobile No : 8123598356	</p>
               <p style="text-align: left;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 4px;">User ID : sunny Name : SUNNY PEN Mobile No : 8123598356	</p>
              
              
            </div> 
           
           </div>
           <div style="height: auto; background-color:; display: flex; flex-direction: row;">
           <div style="width:30% ; background-color:;">
             <p style="text-align: right;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 7px;">&nbsp;	</p>   
            <p style="text-align: right;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 7px; color: orange;">REGISTRATION	</p> 
              <p style="text-align: right;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 7px; color: orange;">COMMITMENTS	</p>    
                 <p style="text-align: right;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 7px; color: orange;">CONFIRM COMMITMENTS</p> 
            </div>
           <div style="width:20% ; background-color:;">
               <p style="text-align: center;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 7px; color: orange;">LEFT</p>   
                 <p style="text-align: center;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 7px; color: orange;">0</p> 
                 <p style="text-align: center;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 7px; color: orange;">0</p>   <p style="text-align: center;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 7px; color: orange;">0</p> 
               
            </div>
           <div style="width:20% ; background-color:;">
               <p style="text-align: center;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 7px; color: orange;">RIGHT</p>   
                 <p style="text-align: center;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 7px; color: orange;">0</p> 
                 <p style="text-align: center;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 7px; color: orange;">0</p>   <p style="text-align: center;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 7px; color: orange;">0</p> 
               
               </div>
            <div style="width: 30%; background-color:;">
               <p style="text-align: center;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 7px; color: orange;">&nbsp;</p>   
                 <p style="text-align: center;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 7px; color: orange;">&nbsp;</p> 
                 <p style="text-align: center;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 7px; color: orange;">&nbsp;</p>   <p style="text-align: center;border-bottom: 1px solid black; margin: 0px; border-right: 1px solid black;padding: 7px; color: orange;">&nbsp;</p> 
               
               
               </div>   
           </div>
           
        
            </div> 
       </div>
         <table cellspacing="0" cellpadding="0" width="100%" border="0" id="table109" height="auto">
        
           <tr>
        <td height="99" width="1342" valign="top" colspan="9">
        <table border="1" width="100%" id="table110" cellspacing="0" cellpadding="0" height="auto" bordercolorlight="#C0C0C0" bordercolordark="#FFFFFF">
            
            <tr>
            <td width="100" bgcolor="#171717" align="center" height="28"><font face="Verdana" color="#FFFFFF" style="font-size: 9pt">Commit/order No</font></td>
            
            <td width="150" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">	Commit  Date</font></td>
        <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">Commit Amount </font></td>      
         <td width="220" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">Virtual Growth</font></td>
          
        <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">Status </font></td>
            
         <td width="91" bgcolor="#171717" align="center" height="28">
							<font face="Verdana" style="font-size: 9pt" color="#FFFFFF">
							&nbsp;</font></td>
                
               
        
            </tr>
            

            <tr>
            <td width="100" align="center" height="30" bgcolor="#FFFFFF">
						            <font face="Verdana" style="font-size: 9pt"> 57687</font></td>
                
                <td width="63" align="center" height="30" bgcolor="#FFFFFF">
						            <font face="Verdana" style="font-size: 9pt">1/1/2019 12:49:18 PM</font></td>
                
                <td width="220" align="center" height="30" bgcolor="#FFFFFF">
									<font face="Verdana" style="font-size: 9pt; color: red; text-align: center;" >1 BTC</font></td>
                
                <td width="121" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" size="2">
								&nbsp; </font></td>
                
                <td width="95" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt">N</font></td>
                
                <td width="130" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt"><a href="#">Send Total Send Gift</a></font></td>
                
            
                
            </tr>
        
        </table>
               </td></tr>    
        </table>  
        <h2 style="margin: 0px;">Received Help Request</h2>
         <table cellspacing="0" cellpadding="0" width="100%" border="0" id="table109" height="auto">
        
           <tr>
        <td height="99" width="1342" valign="top" colspan="9">
        <table border="1" width="100%" id="table110" cellspacing="0" cellpadding="0" height="auto" bordercolorlight="#C0C0C0" bordercolordark="#FFFFFF">
            
            <tr>
            <td width="100" bgcolor="#171717" align="center" height="28"><font face="Verdana" color="#FFFFFF" style="font-size: 9pt">Req. No</font></td>
            
            <td width="150" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">Date-Time</font></td>
        <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">User ID</font></td>      
         <td width="220" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">User Name</font></td>
          
        <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">Amount </font></td>
            
        
                
               
        
            </tr>
            

            <tr>
            <td width="100" align="center" height="30" bgcolor="#FFFFFF">
						            <font face="Verdana" style="font-size: 9pt"> 10022</font></td>
                
                <td width="63" align="center" height="30" bgcolor="#FFFFFF">
						            <font face="Verdana" style="font-size: 9pt">1/1/2019 12:49:18 PM</font></td>
                
                <td width="220" align="center" height="30" bgcolor="#FFFFFF">
									<font face="Verdana" style="font-size: 9pt; color: red; text-align: center;" >row</font></td>
                
                <td width="121" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" size="2">
								KHAN </font></td>
                
                <td width="95" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt">3</font></td> 
            </tr>
             <tr>
             <td width="776" align="center" height="25" bgcolor="#333333" colspan="4">
						            <b>
									<font face="Verdana" size="2" color="#FFFFFF">
									Total</font></b></td>
               <td width="105" height="25" bgcolor="#333333" align="center">
									<b>
									<font color="#FFFFFF" face="Verdana" size="2">
									3</font></b></td>
             
            </tr>  
        
        </table>
               </td></tr>    
        </table> 
         <h2 style="margin: 0px;">Send Gift</h2>
        <table cellspacing="0" cellpadding="0" width="100%" border="0" id="table109" height="auto">
        
           <tr>
        <td height="99" width="1342" valign="top" colspan="9">
        <table border="1" width="100%" id="table110" cellspacing="0" cellpadding="0" height="auto" bordercolorlight="#C0C0C0" bordercolordark="#FFFFFF">
            
            <tr>
            <td width="100" bgcolor="#171717" align="center" height="28"><font face="Verdana" color="#FFFFFF" style="font-size: 9pt">Sr.No.</font></td>
            
            <td width="150" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">Assig. No.</font></td>
        <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">Commit No.</font></td>      
         <td width="220" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">Date</font></td>
          
        <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">User ID</font></td>
         <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">User Name </font></td>    
                 <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">Mobile No </font></td>
                 <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">Amount </font></td>
                 <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">Status	</font></td>
                 <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">	Confirm Date </font></td>
                 <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">Cancel </font></td>
                 <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">&nbsp; </font></td>
        
                
               
        
            </tr>
            

            <tr>
            <td width="100" align="center" height="30" bgcolor="#FFFFFF">
						            <font face="Verdana" style="font-size: 9pt">1	</font></td>
                
                <td width="63" align="center" height="30" bgcolor="#FFFFFF">
						            <font face="Verdana" style="font-size: 9pt">  52563</font></td>
                
                <td width="220" align="center" height="30" bgcolor="#FFFFFF">
									<font face="Verdana" style="font-size: 9pt; color: ; text-align: center;" > 57610</font></td>
                
                <td width="121" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" size="2">
								 12/31/2018 8:27:55 PM</font></td>
                
                <td width="95" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt">uniqueplus</font></td> 
                 <td width="95" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt">	 uniqueplus</font></td> 
                 <td width="95" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt"> +16367593321</font></td> 
                 <td width="95" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt">0.004</font></td> 
                 <td width="95" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt">Y</font></td> 
                 <td width="95" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt">1/1/2019 12:49:18 PM</font></td> 
                 <td width="95" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt">N</font></td> 
                 <td width="95" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt">&nbsp;</font></td> 
            </tr>
            
            
             <tr>
             <td width="776" align="center" height="25" bgcolor="#333333" colspan="7">
						            <b>
									<font face="Verdana" size="2" color="#FFFFFF">
									Total Send Gift Amount  Accepted = 0.004    and  Not Accepted  =</font></b></td>
               <td width="105" height="25" bgcolor="#333333" align="center">
									<b>
									<font color="#FFFFFF" face="Verdana" size="2">
									0.004</font></b></td>
             
            </tr>  
        
        </table>
               </td></tr>    
        </table> 
        
         <h2 style="margin: 0px;">Received Gift</h2>
        <table cellspacing="0" cellpadding="0" width="100%" border="0" id="table109" height="auto">
        
           <tr>
        <td height="99" width="1342" valign="top" colspan="9">
        <table border="1" width="100%" id="table110" cellspacing="0" cellpadding="0" height="auto" bordercolorlight="#C0C0C0" bordercolordark="#FFFFFF">
            
            <tr>
           
            
            <td width="150" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">Assig. No.</font></td>
        <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">Commit No.</font></td>      
         <td width="220" bgcolor="#171717" align="center" height="28"><font face="Verdana" style="font-size: 9pt" color="#FFFFFF">Date</font></td>
          
        <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">User ID</font></td>
         <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">User Name </font></td>    
                 <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">Mobile No </font></td>
                 <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">Amount </font></td>
                 <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">Status	</font></td>
                 <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">	Confirm Date </font></td>
                 <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">Cancel </font></td>
                 <td width="121" bgcolor="#171717" align="center" height="28"><font face="Verdana" size="2" color="#FFFFFF">&nbsp; </font></td>
        
                
               
        
            </tr>
            

            <tr>
            
                
                <td width="63" align="center" height="30" bgcolor="#FFFFFF">
						            <font face="Verdana" style="font-size: 9pt">  52563</font></td>
                
                <td width="220" align="center" height="30" bgcolor="#FFFFFF">
									<font face="Verdana" style="font-size: 9pt; color: ; text-align: center;" > 57610</font></td>
                
                <td width="121" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" size="2">
								 12/31/2018 8:27:55 PM</font></td>
                
                <td width="95" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt">Beyliks</font></td> 
                 <td width="95" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt">	 BEYLIKS ERA</font></td> 
                 <td width="95" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt"> +16367593321</font></td> 
                 <td width="95" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt">0.023</font></td> 
                 <td width="95" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt">Y</font></td> 
                 <td width="95" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt">1/1/2019 12:49:18 PM</font></td> 
                 <td width="95" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt">N</font></td> 
                 <td width="95" height="30" bgcolor="#FFFFFF" align="center">
									<font face="Verdana" style="font-size: 9pt">&nbsp;</font></td> 
            </tr>
            
            
             <tr>
             <td width="776" align="center" height="25" bgcolor="#333333" colspan="6">
						            <b>
									<font face="Verdana" size="2" color="#FFFFFF">
									Total Send Gift Amount  Accepted = 0.023   and  Not Accepted  =</font></b></td>
               <td width="105" height="25" bgcolor="#333333" align="center">
									<b>
									<font color="#FFFFFF" face="Verdana" size="2">
									0.023</font></b></td>
             
            </tr>  
        
        </table>
               </td></tr>    
        </table> 

        
    </div>    
    <div class="footer"></div>    
    </div>
    
    </div>
    <script type="text/javascript">
      function valueSet() {
        var ele = document.getElementById('part').value;
        var elel = document.getElementById('part_2').value = ele;
      }

    </script>
    </body>
</html>