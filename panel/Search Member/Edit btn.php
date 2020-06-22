<?php
include('../Inc/conn.php');
?>
<!DOCTYPE html>
<html>

<head>
<script language="JavaScript" src="../Css/cal.js"></script>
     <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <title>Profile Update</title>

</head>
<body leftMargin=0 topMargin=0 bgcolor="#CCCCCC" >
<div align="center">
<table border="0" width="741" id="table11" cellspacing="0" cellpadding="0">
	<tr>
		<td>

			<table border="0" width="839" id="table105" height="98%" cellspacing="0" cellpadding="0">
				<tr>
					<td height="65" align="left" valign="top" width="839" bgcolor="#3A96CF" colspan="3">&nbsp;</td>
				</tr>
				<tr>
					<td width="220" height="24" bgcolor="#6AB5FF"><b>
					<font face="Verdana">PROFILE UPDATE</font></b></td>
					<td width="291" height="24" bgcolor="#6AB5FF">&nbsp;</td>
					<td width="328" height="24" bgcolor="#6AB5FF">
					<p align="center"><b><a href="Search Member.php">
					<font face="Verdana" size="2">Go Back To Main Menu</font></a></b></td>
				</tr>
			</table>
			
				</td>
	</tr>
	<tr>
		<td>
            <table cellSpacing=0 cellPadding=0 width="752" border=0 id="table103">
              <tbody>
				<tr>
                <td height=268 background="bg_b1.jpg" width="752" valign="top" align="center">


<?php 
$get_email = $_GET['email'];
$qeury = "SELECT * FROM `registration` WHERE E_mail = '$get_email'";
$table = mysqli_query($con, $qeury);
$rows= mysqli_num_rows($table);
$res = mysqli_fetch_array($table);
?>


					<form name="t1" method="post" >
					<table border="0" width="836" id="table104" height="626" bgcolor="#E9EFF1" style="FONT-SIZE: 10pt" cellspacing="0" cellpadding="0" bordercolorlight="#EFEFED" bordercolordark="#E9EFF1">
							
							<tr>
								<td align="right" height="22" width="161" bordercolor="#EFEFED" bgcolor="#E0FF84">
								&nbsp;</td>
								<td height="22" bgcolor="#E0FF84" width="204" bordercolor="#EFEFED">
								&nbsp;</td>
								<td height="22" bgcolor="#E0FF84" width="31" bordercolor="#EFEFED" align="right">
								&nbsp;</td>
								<td height="22" bgcolor="#E0FF84" width="48" bordercolor="#EFEFED" align="right">
								&nbsp;</td>
								<td height="22" bgcolor="#E0FF84" width="57" bordercolor="#EFEFED" align="right">
								&nbsp;</td>
								<td height="22" bgcolor="#E0FF84" width="335" bordercolor="#EFEFED">
								&nbsp;</td>							
							<tr>
								<td align="right" height="22" width="161" bordercolor="#EFEFED" bgcolor="#E0FF84">
								<font face="Verdana" size="2" color="#000000">
								Time :&nbsp;&nbsp; </font></td>
								<td height="22" bgcolor="#E0FF84" width="204" bordercolor="#EFEFED">
								<font color="#FFFFFF">
								<input name="txttime" size="28" value="<?php echo $res['Reg_date']; ?> " ></font></td>
								<td height="22" bgcolor="#E0FF84" width="31" bordercolor="#EFEFED" align="right">
								&nbsp;</td>
								<td height="22" bgcolor="#E0FF84" width="48" bordercolor="#EFEFED" align="right">
								<p align="center">
								&nbsp;</td>
								<td height="22" bgcolor="#E0FF84" width="57" bordercolor="#EFEFED" align="right">
								<font face="Verdana" size="2">
								<font color="#000000">&nbsp;Date&nbsp; :</font>&nbsp;</font></td>
								<td height="22" bgcolor="#E0FF84" width="335" bordercolor="#EFEFED">
								<p align="left">
								<font face="Verdana">
								<input type="TEXT" name="txt_JDate" size="13" value="<?php echo $res['Reg_date']; ?>" >
                         
                                    </font></td>							<tr>
								<td align="right" height="31" width="161" bordercolor="#EFEFED" bgcolor="#E0FF84">
								<font face="Verdana">Sponsor Id</font><font face="Verdana" size="2" color="#000000">
								: &nbsp;</font></td>
								<td height="31" bgcolor="#E0FF84" width="675" bordercolor="#EFEFED" colspan="5">
								<font face="Verdana">
								</font><font face="Verdana"><input type="text" name="txtSpID" size="11" value="<?php echo $res['Invite_email']; ?>" style="width: 40%"></font></td>
							</tr>
							<tr>
								<td align="right" height="25" width="161" bordercolor="#EFEFED" bgcolor="#E0FF84">
								<font face="Verdana" size="2" color="#000000">
								Placement I.D. : &nbsp;</font></td>
								<td height="25" bgcolor="#E0FF84" width="675" bordercolor="#EFEFED" colspan="5">
								<font face="Verdana">
								</font><font face="Verdana"><input type="text" name="txtPlacId" size="11" value="sunny" ><input type="hidden" name="txtmcode" size="9" value="10006" ></font></td>
							</tr>
							<tr>
								<td align="right" height="25" width="161" bordercolor="#EFEFED" bgcolor="#E0FF84">
								<font face="Verdana" size="2" color="#000000">
								Position&nbsp;with resp. placment id : &nbsp; </font></td>
								<td height="25" bgcolor="#E0FF84" width="675" bordercolor="#EFEFED" colspan="5">
								<select size="1" name="optLeft">
								<option value="L" selected>LEFT</option>
								<option value="R" >RIGHT</option>
								</select></td>
								</tr>
							<tr>
								<td align="right" height="26" width="161" bordercolor="#EFEFED" bgcolor="#E0FF84">
								&nbsp;</td>
								<td height="26" bgcolor="#E0FF84" width="675" bordercolor="#EFEFED" colspan="5">

								&nbsp;</td>
								</tr>
							<tr>
								<td align="right" height="7" width="161" bordercolor="#EFEFED" bgcolor="#E0FF84">
								</td>
								<td height="7" colspan="5" bgcolor="#E0FF84" width="675" bordercolor="#EFEFED">
										</td>
							</tr>
							<tr>
								<td align="right" height="22" width="161" bordercolor="#EFEFED" bgcolor="#E0FF84">
								<font face="Verdana" size="2" color="#000000">
								Username:&nbsp;&nbsp; </font></td>
								<td height="22" colspan="5" bgcolor="#E0FF84" width="675" bordercolor="#EFEFED">
								<input name="txtusername" size="20" value="<?php echo $res['User_name']; ?>" ></td>
							</tr>
							<tr>
								<td align="right" height="15" width="161" bordercolor="#EFEFED" bgcolor="#E0FF84">
								&nbsp;</td>
								<td height="15" colspan="5" bgcolor="#E0FF84" width="675" bordercolor="#EFEFED">
										&nbsp;</td>
							</tr>
							<tr>
								<td align="right" height="22" width="161" bordercolor="#EFEFED" bgcolor="#E0FF84">
								<font face="Verdana" size="2" color="#000000">
								Distributor Name :&nbsp;&nbsp; </font></td>
								<td height="22" colspan="5" bgcolor="#E0FF84" width="675" bordercolor="#EFEFED">
										<font color="#FFFFFF">
								<select size="1" name="cmbtitle" style="font-family: Verdana; border: 1px solid #6699FF; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px">
								<option   value="Mr.">Mr.</option>
								<option  value="Dr.">Dr.</option>
								<option  value="Mrs.">Mrs.</option>
								<option  value="Miss.">Miss.</option>
								<option  value="Firm">Firm</option>
								</select></font><input name="txtmname" size="46" value="<?php echo $res['Invite_email']; ?>  " ></td>
							</tr>
							<tr>
								<td align="right" height="15" width="161" bordercolor="#FFFFFF" bgcolor="#E0FF84">
								&nbsp;</td>
								<td height="15" bgcolor="#E0FF84" width="675" colspan="5" bordercolor="#FFFFFF">
								&nbsp;</td>
							</tr>
							<tr>
								<td align="right" height="23" width="161" bordercolor="#FFFFFF" bgcolor="#E0FF84">
								<font face="Verdana" size="2" color="#000000">
								Gender :&nbsp;&nbsp; </font></td>
								<td height="23" bgcolor="#E0FF84" width="675" colspan="5" bordercolor="#FFFFFF">
								<table border="0" width="554" id="table106" cellspacing="0" cellpadding="0">
									<tr>
										<td width="72">
								<select size="1" name="cmbGendre">
								
									<option>Male</option>
									<option selected>Female</option>
								
								
								</select></td>
										<td width="211">
										<p align="right">
								<font face="Verdana" size="2" color="#000000">
								Date of birth :</font>

										<td width="249">
								<input name="txtdob" size="12" value="" >
								
 </td></td>
									</tr>
								</table>
								</td>
							</tr>
							<tr>
								<td align="right" height="22" width="161" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" bgcolor="#E0FF84">
								<font face="Verdana" size="2" color="#000000">
								Address :&nbsp;&nbsp; </font></td>
								<td height="22" colspan="5" bgcolor="#E0FF84" width="675" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF">
								<input name="txtadd1" size="54" value="" ></td>
							</tr>
							<tr>
								<td align="right" height="22" width="161" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" bgcolor="#E0FF84">
								&nbsp;</td>
								<td height="22" colspan="5" bgcolor="#E0FF84" width="675" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF">
								<input name="txtadd2" size="54" value="" ></td>
							</tr>
							<tr>
								<td align="right" height="22" width="161" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" bgcolor="#E0FF84">
								<font face="Verdana" size="2" color="#000000">
								Country :&nbsp;&nbsp; 
								</font> </td>
								<td height="22" bgcolor="#E0FF84" width="675" colspan="5" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF">
								<select size="1" name="cmbcountry">
								<option selected value="<?php echo $res['Country']; ?>"><?php echo $res['Country']; ?></option>
								</select></td>
							</tr>
							<tr>
								<td align="right" height="15" width="161" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" bgcolor="#E0FF84">
								</td>
								<td bgcolor="#E0FF84" height="15" width="675" colspan="5" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF">
								&nbsp;</td>
							</tr>
							<tr>
								<td align="right" height="15" width="161" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" bgcolor="#E0FF84">
								</td>
								<td bgcolor="#E0FF84" height="15" width="675" colspan="5" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF">
								&nbsp;</td>
							</tr>
							<tr>
								<td align="right" height="22" width="161" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" bgcolor="#E0FF84">
								<font face="Verdana" size="2" color="#000000">
								Contact No :&nbsp;&nbsp; 
								</font> </td>
								<td bgcolor="#E0FF84" height="22" width="675" colspan="5" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF">
								<input name="txtContactno" size="30" value="" ></td>
							</tr>
							<tr>
								<td align="right" height="22" width="161" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" bgcolor="#E0FF84">
								<font face="Verdana" size="2" color="#000000">
								Mobile No :&nbsp;&nbsp; </font></td>
								<td colspan="5" bgcolor="#E0FF84" height="22" width="675" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF">
								<input name="txtMobileNo" size="30" value="<?php echo $res['Mobile_number']; ?>" ></td>
							</tr>
							<tr>
								<td align="right" height="22" width="161" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" bgcolor="#E0FF84">
								<font face="Verdana" size="2" color="#000000">
								Email I.D. :&nbsp;&nbsp;
								</font></td>
								<td colspan="5" bgcolor="#E0FF84" height="22" width="675" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF">
								<input name="txtEmailID" size="30" value="<?php echo $res['E_mail']; ?>" ></td>
							</tr>
							<tr>
								<td align="right" height="15" width="161" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" bgcolor="#E0FF84">
								</td>
								<td colspan="5" bgcolor="#E0FF84" height="15" width="675" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF">
								&nbsp;</td>
							</tr>
							<tr>
								<td align="right" height="22" width="161" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" bgcolor="#E0FF84">
								<font face="Verdana" size="2" color="#000000">
								Nominee Name :&nbsp;&nbsp; </font>
								</td>
								<td colspan="5" bgcolor="#E0FF84" height="22" width="675" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF">
								<input name="txtnominee" size="39" value="" ></td>
							</tr>
							<tr>
								<td align="right" height="22" width="161" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" bgcolor="#E0FF84">
								<font face="Verdana" size="2" color="#000000">
								Relation :&nbsp;&nbsp; </font></td>
								<td colspan="5" bgcolor="#E0FF84" height="22" width="675" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF">
								<select size="1" name="cmbRelation">
								<option>Mother</option><option>Mother</option><option value='Husband'>Husband</option><option value='Wife'>Wife</option><option>Father</option><option>Sister</option><option>Spous</option><option>Brother</option><option>Son</option><option>Daughter</option><option>Uncle</option>
								</select></td>
							</tr>
							<tr>
								<td align="right" height="15" width="161" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" bgcolor="#E0FF84">
								</td>
								<td bgcolor="#E0FF84" height="15" width="675" colspan="5" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF">
								&nbsp;</td>
							</tr>
							<tr>
								<td align="right" height="22" width="161" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" bgcolor="#E0FF84">
								<font face="Verdana">Login Password</font><font face="Verdana" size="2" color="#000000">
								:&nbsp;&nbsp; </font></td>
								<td bgcolor="#E0FF84" height="22" width="675" colspan="5" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF">
								<input type="text" name="txtmpwd" size="20" value="<?php echo $res['Password']; ?>"></td>
							</tr>
							<tr>
								<td align="right" bgcolor="#E0FF84" height="22" width="161" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF">
								<font face="Verdana">Wallet Password</font><font face="Verdana" size="2" color="#000000">
								:&nbsp;&nbsp; </font></td>
								<td colspan="5" bgcolor="#E0FF84" height="22" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF">
								<input type="text" name="txtwalletpwd" size="20" value="plus3456"></td>
							</tr>
							<tr>
								<td align="right" bgcolor="#E0FF84" height="26" width="161" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF">&nbsp;</td>
								<td colspan="5" bgcolor="#E0FF84" height="26" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF">
								<font face="Arial"><b>
								<a target="_blank" href="agreements.asp">
								<span style="text-decoration: none">&nbsp;</span></a></b></font><font color="#FFFFFF"><input type="submit" value="Submit" name="B2"></font></td>
							</tr>
						</table>
												
					</form></td>
				</tr>
				<tr>
			<td height="23" width="752" bgcolor="#0f87ff" background="bar-bg.jpg">
			&nbsp;</td>
				</tr>
				<tr>
			<td height="32" width="752" bgcolor="#6ab5ff" background="bar-bg.jpg">
			&nbsp;</td>
				</tr>
              </tbody></table></td>
		</tr>
	</table>
	</div>
  
    </td>

    </tr>

</tbody>

</table>
</body></html>