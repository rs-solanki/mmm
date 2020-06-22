<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
//print_r($_GET);exit();
$con = mysqli_connect('localhost','root','','mmm');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"ajax_demo");

	if (isset($_GET['gh_inbox']))
	{
		$phid = intval($_GET['gh_inbox']);
		$sql="SELECT chat_message, chat_image_path FROM  chattings WHERE chat_type='PH' AND chat_phid='$phid'";
		$result = mysqli_query($con,$sql);
		$html_txt="";
		while ($data = mysqli_fetch_array($result)){			
			$chat_image_path = '<img src="' . $data['chat_image_path'] . '" />';
			$html_txt .= $data['chat_message']."<br>" .$chat_image_path. "--- *** ---<br>";						
		}
	}
	else if (isset($_GET['ph_inbox']))
	{
		$phid = intval($_GET['ph_inbox']);
		$sql="SELECT chat_message, chat_image_path FROM  chattings WHERE chat_type='GH' AND chat_phid='$phid'";
		$result = mysqli_query($con,$sql);
		$html_txt="";
		while ($data = mysqli_fetch_array($result)){			
			$chat_image_path = '<img src="' . $data['chat_image_path'] . '" />';
			$html_txt .= $data['chat_message']."<br>" .$chat_image_path. "--- *** ---<br>";						
		}
	}
	else if (isset($_GET['gh_id']))
	{
		$gh_id = intval($_GET['gh_id']);
		$sql="SELECT Participant_email FROM  gh WHERE GH_id='$gh_id'";
		$result = mysqli_query($con,$sql);
		$html_txt="";
		if(mysqli_num_rows($result)) {
			$data2 = mysqli_fetch_array($result);
			if ($data2['Participant_email'])
			{
				$sql2="SELECT * FROM accounts WHERE User_id='".$data2['Participant_email']."'";
				$result2 = mysqli_query($con,$sql2);
				if(mysqli_num_rows($result2))
				{
					$data = mysqli_fetch_array($result2);
					$html_txt .= $data['User_id']."|*|";
					$html_txt .= $data['Account_id']."|*|";
					$html_txt .= $data['Account_name']."|*|";
					$html_txt .= $data['Select_currency']."|*|";
					$html_txt .= $data['Bank_name']."|*|";
					$html_txt .= $data['Currency_address']."|*|";
					$html_txt .= $data['Fname']."|*|";
					$html_txt .= $data['Lname'];
				}
			}			
		}
	}	
	mysqli_close($con);
	echo $html_txt;
?>
</body>
</html>