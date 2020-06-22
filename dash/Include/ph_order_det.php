<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
$q = intval($_GET['q']);
$type = intval($_GET['type']);
$id = intval($_GET['id']);
include('conn.php');
//mysqli_select_db($con,"ajax_demo");

function getBTCAddress($email=null)
{
	global $con;
	$sql2="SELECT Currency_address FROM  accounts WHERE User_id = '".$email."'";
	$result2 = mysqli_query($con,$sql2);
	$str="";
	if (mysqli_num_rows($result2))
	{
		$data = mysqli_fetch_array($result2);
		$str = $data['Currency_address'];	
	}
	return $str;
}

function getGuiderByemail($email=null)
{
	global $con;
	$sql2="SELECT Invite_email FROM  registration WHERE E_mail = '".$email."'";
	$result2 = mysqli_query($con,$sql2);
	$str="";
	if (mysqli_num_rows($result2))
	{
		$data = mysqli_fetch_array($result2);
		$str = $data['Invite_email'];	
	}
	return $str;
}

$sql="SELECT * FROM  ph WHERE Id = '".$id."'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {
	$btc_add = getBTCAddress($row['Participant_email']);
	if ($type == "PH")
	{
		$sender = $row['Participant'];
		$qli = "SELECT * FROM  registration WHERE User_name ='$sender'";
		$qli_run = mysqli_query($con,$qli);
		$qli_facth = mysqli_fetch_array($qli_run);
		$qli_guider = $qli_facth['Invite_email'];
		$qli1 = "SELECT * FROM  registration WHERE E_mail='$qli_guider'";
		$qli_run1 = mysqli_query($con,$qli1);
		$qli_facth1 = mysqli_fetch_array($qli_run1);
		$sguider = $qli_facth1['User_name'];
		// $sguider = getGuiderByemail($row['Participant_email']);
		$gh_id = $row['gh_id'];
		$sql2="SELECT * FROM  gh WHERE record_type='Main' AND GH_id = '".$gh_id."'";
		$result2 = mysqli_query($con,$sql2);
		$receiver="";
		if (mysqli_num_rows($result2))
		{
			$data = mysqli_fetch_array($result2);
			$receiver = $data['Participant'];
			$ac = $data['Participant_email'];
			$qc = "SELECT * FROM accounts WHERE User_id = '$ac'";
			$qqc = mysqli_query($con,$qc);
			$qqc_re = mysqli_fetch_array($qqc);
			$ac_address = $qqc_re['Currency_address'];



		}
		// receiver guider
		$sql3="SELECT Invite_email FROM  registration WHERE User_name='$receiver'";
		$result3 = mysqli_query($con,$sql3);
		$rguider="";
		if (mysqli_num_rows($result3))
		{
			$data1 = mysqli_fetch_array($result3);
			$rguider = $data1['Invite_email'];
			$sql34="SELECT * FROM  registration WHERE E_mail='$rguider'";
		$result34 = mysqli_query($con,$sql34);
		$data14 = mysqli_fetch_array($result34);
		$rguider_name = $data14['User_name'];	
		}

	}
?>
    
<div style="margin: 10px 0px; font-size: 17px;">Order Z<?php echo $row['PH_id']; ?></div>
<div style="margin: 10px 0px; font-size: 14px;">
<span>Participant of MMM has requested assistance in the amount of: <?php echo $row['gh_amount']." ".$row['Select_currency']; ?></span><br> 
<span style="font-weight: 600;">You have to provide help before <?php echo $row['PH_date']; ?> according to BTC details provided further:</span>	
</div>
<div style="border-radius: 7px;padding: 7px;border: 1px solid gray;margin: 20px 0">
<div style="margin: 10px 0px; font-size: 14px;">
<h3><?php echo $ac_address; ?></h3>

<span style="font-size: 17px;">Manual on how to use Bitcoin</span>	
</div>	
<div style="margin: 10px 0px; font-size: 12px;">
After providing help, please press the "I have provided help" button and attach your payment confirmation document (check scan, receipt scan or online transaction screen shot) where it says Browse File.	
</div>	

<div style="margin: 20px 0px; color: red; font-size: 14px;">
ATTENTION!<br>
Make money transfer only to those bank details which are specified on the order details page! If you are asked to make transfer to other bank details or wallet addresses ("card is blocked!", etc.) - do not get fooled. Make a report to support immediately! These are almost certainly fraudsters. On the other hand, sometimes a person has actually been hacked and they are trying to prevent loss. If they ask you to not send payment at all, this is a possibly what is happening. Send a message to recipient asking for further details or evidence. Exercise caution and wisdom.	
</div>
<div style="margin: 20px 0px; color: red; font-size: 14px;">
Sender: <?php echo $sender; ?><br>
Sender's guider: <?php echo $sguider; ?><br>	
Receiver: <?php echo $receiver; ?> (*****)<br>
Reciever's guider: <?php echo $rguider_name; ?> (*****)<br>
</div>

<div style="margin: 20px 0px; color: red; font-size: 14px;">
ATTENTION!!! 

1) SENDER SHOULD PROVIDE HELP WITH THE AMOUNT OF MONEY THAT IS SPECIFIED IN THE ORDER. COMMISSION IS TO BE PAID BY THE SENDER 

2) IF THE PAYMENT WILL NOT BE MADE BY 2018-10-03T06:35:41.073 YOUR ACCOUNT WILL BE BLOCKED AND YOU WILL NOT BE ABLE TO PARTICIPATE IN THE SYSTEM. YOUR ORDER WOULD BE REDIRECTED TO ANOTHER PARTICIPANT.	


</div>
</div>

<div>P.S. In case the order did not come for the full amount indicated in your request, don't worry! Orders for the remaining sum will be received within 10 days of the filing of your request. :-))</div>

<?php } ?>
<?php
mysqli_close($con);
?>
</body>
</html>