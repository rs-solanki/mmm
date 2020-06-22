<?php 
include('Inc/conn.php');
include('../dash/Include/user_details.php');
include('function/function.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="Css/page%20style.css"/>    
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <title>100 Link</title>
    </head>
<body>
    <div class="container" style="padding: 0px;">
    <div class="main" style="padding: 0px;">
    <div class="header"></div>    
    <div class="table" style="height: auto;">
      
        <table cellspacing="0" cellpadding="0" width="100%" border="0" id="table109" height="auto">
         <tr style="padding: 0px;">
    <td height="" width="400px" bgcolor="#333333" colspan="6">
    <b><font face="Verdana" size="2" color="#FFFFFF"> Help Request Report-ALL</font></b></td>
         
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
              <form method="POST">
						&nbsp;
								<tr>
								<td width="143" align="right" bgcolor="#3399FF">&nbsp;
								<input type="text" name="txtgh" size="49" placeholder="Enter Username"></td>
								<td width="143" align="left" bgcolor="#3399FF" >&nbsp;
								<input type="submit" value="Search GH Username" name="btngh"></td>
								<td width="97" align="right" bgcolor="#3399FF" >&nbsp;
								</td>
								<td width="132" bgcolor="#3399FF">
								</td>
								<td width="76" align="left" bgcolor="#3399FF">&nbsp;
								<input type="text" name="txtph" size="49" placeholder="Enter Username"></td>
								<td width="438" align="left" bgcolor="#3399FF">
								<input type="submit" value="Search PH Username" name="btnph" style="margin-top:18px"></td><td width="49" bgcolor="#3399FF">&nbsp;
								</td>
								<td width="297" bgcolor="#3399FF">&nbsp;
								</td>
							</tr>
						</form>
        
            
            
            </tr>   
        </table>
        
        <table class="gh_ph_links" border="1" width="100%" height="auto">
            
        <tr>
        <td width="538">GET HELP ( WITHDRAWAL / RECEVIER )</td>
        <td> 	PROVIDE HELP ( GIVER )<input type="text" name="txtbtcrate" id="txtbtcrate" size="20" value=""></td>        
        </tr>
            
            <tr>
            <td width="538" valign="top">
							<table border="1" width="573" height="74" cellspacing="0" cellpadding="0" style="border-collapse: collapse" bordercolor="#078F3F">
											<tbody><tr>
												<td width="68" bgcolor="#003300" height="30" align="center">
												<font face="Verdana" size="2" color="#FFFFFF">
												Order No</font></td>
												<td bgcolor="#003300" height="30" align="center" width="84">
												<font face="Verdana" size="2" color="#FFFFFF">
												Date</font></td>
												<td bgcolor="#003300" height="30" align="center" width="69">
												<font face="Verdana" size="2" color="#FFFFFF">
												User ID</font></td>
												<td width="100px" bgcolor="#003300" height="30">
												<font face="Verdana" size="2" color="#FFFFFF">
												User Name</font></td>
												<td width="101px" bgcolor="#003300" height="30" align="center">
												<font color="#FFFFFF">Sponser Id</font></td>
												<td width="49" bgcolor="#003300" height="30" align="center">
												<font face="Verdana" size="2" color="#FFFFFF">
												City</font></td>
												<td width="54" bgcolor="#003300" height="30" align="center">
												<font face="Verdana" size="2" color="#FFFFFF">
												Amount</font></td>
												<td width="5" bgcolor="#003300" height="30" align="center">&nbsp;
												</td>
											</tr>

	<?php
//$select_1 = "SELECT * FROM gh WHERE Participant = '$user_name' AND Status='Orders Created(+)';";
$select_1 = "SELECT * FROM gh WHERE (Status='Orders Created(+)' OR Status='Process') AND Balance>0 AND record_type='Main' AND Select_currency = 'USD';";//exit;
$run_1 = mysqli_query($con,$select_1);
// $row = mysqli_fetch_array($run);
$total_gh=0;
 while ($res_1 = mysqli_fetch_array($run_1)) {
 	# code...
 	if ($total_gh == 0)
 		$sponerId = getSponserId($res_1['Participant_email']);

 ?>											
											
												<tr>
													<td width="68" align="center" height="23">
													<?php echo $res_1['GH_id']; ?><input type="hidden" name="txtorderno" size="20" value="65798"></td>
													<td align="center" height="23" width="84">
													<font face="Verdana" size="2">
													<?php echo $res_1['Order_date']; ?></font></td>
													<td align="center" height="23" width="69">
													<font face="Verdana" size="2">
													<?php echo $res_1['Participant_email']; ?></font></td>
													<td width="140" height="23" style="padding-left: 5px">
													<font face="Verdana" size="2">
													<?php echo $res_1['Participant']; ?></font></td>
													<td width="101" height="23" align="center"><?php echo $sponerId; ?>
													</td>
													<td width="49" height="23" align="center">
													<font face="Verdana" size="2">
													</font></td>
													<td width="54" height="23" align="center">
													<font face="Verdana" size="2">
													<?php echo $res_1['Balance']; ?><?php echo $res_1['Select_currency']; ?></font>													
													<input type="hidden" name="txtreqamt" size="6" value="1.3448"></td>

													<td width="5" height="23" align="center">
													<a target="_blank" href="rejectrequest.asp?TTIME=12/31/2018 10:01:02 AM&amp;txtsrno=65798">Reject</a></td>

												</tr>
										<?php $total_gh += (float)$res_1['Balance']; }?>
											
												
											
											
												<tr>
													<td width="68" height="23" align="center">&nbsp;
													</td>
													<td width="68" height="23" align="center">&nbsp;
													</td>
													<td width="68" height="23" align="center">&nbsp;
													</td>
													<td width="68" height="23" align="center">&nbsp;
													</td>
													<td width="68" height="23" align="center">&nbsp;
													</td>
													<td width="68" height="23" align="center">
													<font color="#800080"><b>Total</b></font></td>
													<td width="54" height="23" align="center">
													<?php echo $total_gh; ?> <?php echo $res_1['Select_currency']; ?></td>
													<td width="5" height="23" align="center">&nbsp;
													</td>
												</tr>
											</tbody></table>
                
                </td>

  
                
                <td valign="top"><form method="POST" action="" name="ph_form_100">
							<table border="1" width="696" height="74" cellspacing="0" cellpadding="0" style="border-collapse: collapse" bordercolor="#078F3F">
											<tbody><tr>
												<td width="68" bgcolor="#003300" align="center" class="style1">
												<font face="Verdana" size="2" color="#FFFFFF">
												Commit No</font></td>
												<td bgcolor="#003300" align="center" width="63" class="style1">
												<font face="Verdana" size="2" color="#FFFFFF">
												Date</font></td>
												<td bgcolor="#003300" align="center" width="102" class="style1">
												<font face="Verdana" size="2" color="#FFFFFF">
												User ID</font></td>
												<td width="217" bgcolor="#003300" class="style1">
												<font face="Verdana" size="2" color="#FFFFFF">
												User Name</font></td>
												<td width="217" bgcolor="#003300" class="style1">
												<font face="Verdana" size="2" color="#FFFFFF">
												Sponser Id</font></td>
												<td width="54" bgcolor="#003300" align="center" class="style1">
												<font face="Verdana" size="2" color="#FFFFFF">
												Amount</font></td>
												<td width="54" bgcolor="#003300" align="center" class="style1">
												<font face="Verdana" size="2" color="#FFFFFF">
												Payment Mode</font></td>
											
												<td width="64" bgcolor="#003300" align="center" class="style1">
												<font face="Verdana" size="2" color="#FFFFFF">
												Adjust Amt</font></td>
												<td width="53" bgcolor="#003300" align="center" class="style1">
												<font face="Verdana" size="2" color="#FFFFFF">
												Order No</font></td>
											</tr>

<?php
$select = "SELECT * FROM ph WHERE Select_currency = 'USD' AND Bonus = 'MARVO 30%' AND gh_id='' AND (Status='Orders Created(+)' OR Status='Process');";
$run = mysqli_query($con,$select);

$row = mysqli_num_rows($run); $total_ph=0;
 for ($j = 1 ; $j <= $row ; ++$j)
 {
 	$res = mysqli_fetch_array($run);
 	if ($total_ph == 0)
 		$sponerId = getSponserId($res['Participant_email']);
 ?>
											
											
												<tr>
													<td width="68" align="center" height="23">
													<input type="hidden" name="txtcommit_date-<?php echo $j; ?>" size="20" value="<?php echo $res['PH_date']; ?>"><?php echo $res['PH_id']; ?><input type="hidden" name="txtcommitno-<?php echo $j; ?>" size="20" value="<?php echo $res['Id']; ?>"></td>
													<td align="center" height="23" width="63">
													<font face="Verdana" size="2">
													<?php echo $res['Order_date']; ?></font></td>
													<td align="center" height="23" width="102">
													<font face="Verdana" size="2">
													<input type="hidden" name="txtmemb_codew-<?php echo $j; ?>" size="9" value="<?php echo $res['Participant']; ?>"><?php echo $res['Participant_email']; ?></font></td>
													<td width="212" height="23" style="padding-left: 5px">
													<font face="Verdana" size="2">
													<?php echo $res['Participant']; ?></font></td>
													<td width="212" height="23" style="padding-left: 5px"><?php echo $sponerId; ?> </td>
													<td width="54" height="23" align="center">
													<font face="Verdana" size="2">
													<input value="<?php echo $res['PH_id']; ?>" type="hidden" name="ph_id-<?php echo $j; ?>" />
													<input value="<?php echo $res['Marvo_id']; ?>" type="hidden" name="marvo_id-<?php echo $j; ?>" />
													<input value="<?php echo $res['Select_currency']; ?>" type="hidden" name="currency-<?php echo $j; ?>" />
													<input value="<?php echo $res['Bonus']; ?>" type="hidden" name="bonus-<?php echo $j; ?>" />
													<input value="<?php echo $res['Participant']; ?>" type="hidden" name="participant-<?php echo $j; ?>" />
													<input value="<?php echo $res['Payment_mood']; ?>" type="hidden" name="payment_mood-<?php echo $j; ?>" />
													
													<input type="hidden" name="txtamount_ph-<?php echo $j; ?>" size="11" value="<?php echo $res['Balance']; ?>"><?php echo $res['Balance']; ?><?php echo $res['Type_c']; ?></font></td>
													<td width="50" height="23" align="center">
													<font face="Verdana" size="2">
													</font><?php echo $res['Payment_mood']; ?></td>
													<td width="64" height="23" align="center">
													<input type="text" name="txtamount_gh-<?php echo $j; ?>" size="6"></td>
													<td width="53" height="23" align="center">
													<input type="text" name="txtordernow-<?php echo $j; ?>" size="6"></td>
												</tr>
											
												<?php $total_ph += (float)$res['Balance']; } ?>
											
											
												<tr>
													<td width="68" height="23" align="center">
													<input type="submit" value="Submit" name="submit_ph_adjust"><input type="text" name="txttotal" size="8" value="15"></td>
													<td width="68" height="23" align="center">&nbsp;
													</td>
													<td width="68" height="23" align="center">&nbsp;
													</td>
													<td width="68" height="23" align="center">&nbsp;
													</td>
													
													<td width="68" height="23" align="center">
													<font color="#800080"><b>Total</b></font></td><td width="68" height="23" align="center">
													<?php echo $total_ph; ?><?php echo $res['Type_c']; ?></td>
													<td width="68" height="23" align="center">&nbsp;
													</td>
													<td width="68" height="23" align="center">&nbsp;
													</td>
													<td width="68" height="23" align="center">&nbsp;
													</td>
												</tr>
											</tbody></table></form><?php adjustPhGh100(); ?>
                
                </td>
            </tr>
        </table>
          
        
        
        </div>    
    <div class="footer"></div>    
    </div>
    
    </div>
    </body>
</html>