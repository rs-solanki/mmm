<?php
date_default_timezone_set('Asia/Kolkata');

function getParticipantEmailById($id=null, $type=null)
{
	global $con;
	$email="";
	if ($type == "GH")
		$q = "SELECT Participant_email FROM gh WHERE record_type='Main' AND GH_id='$id'";
	else
		$q = "SELECT Participant_email FROM ph WHERE record_type='Main' AND PH_id='$id'";
	//echo $q;
	$rec = mysqli_query($con,$q);
	$data = mysqli_fetch_array($rec);
	$email =  $data['Participant_email'];
	return $email;
}
function adjustPhGh100()
{//print_r($_POST);
	global $con;
	if (isset($_POST['submit_ph_adjust']))
	{
		//print_r($_POST);exit(); 
		$i=1;
		$curr_date = date("d-m-Y h:i:s"); $txtamount_gh="";
		$last_block_time = (time() + (3600*48));
		foreach($_POST as $key=>$item)
		{
			$arr = explode("-", $key);
			//print_r($arr);echo "<br>";
			if ($arr[0] == "txtcommitno")
				$phid = $item;
			else if ($arr[0]=="txtamount_gh")
				$txtamount_gh = (float)$item;
			else if ($arr[0]=="txtordernow")
				$txtordernow = $item;
			else if ($arr[0]=="txtamount_ph")	
				$txtamount_ph = (float)$item;
			else if ($arr[0]=="ph_id")
				$ph_id = $item;
			else if ($arr[0]=="marvo_id")
				$marvo_id = $item;	
			else if ($arr[0]=="currency")
				$currency = $item;
			else if ($arr[0]=="participant")
				$participant = $item;
			else if ($arr[0]=="payment_mood")
				$payment_mood = $item;
			else if ($arr[0]=="bonus")
				$bonus = $item;						
			if ($i % 12 == 0)
			{ //echo $i . "rs" . $txtamount_gh . "***".$txtamount_ph ; //exit();
				//echo "(".$txtamount_gh." > 0 && ".$txtordernow ."!= '')";
				if ($txtamount_gh > 0 && $txtordernow != "")
				{ //echo "*".$i."*";
					if ($txtamount_gh == $txtamount_ph)
					{
						$q = "UPDATE ph SET last_block_time='$last_block_time', Balance='0', Status='Process', Order_id='$txtordernow', gh_id='$txtordernow', gh_amount='$txtamount_gh' WHERE id='$phid'";
						$run = mysqli_query($con,$q);

						// GH balance and amount adjust
						$q3 = "SELECT * FROM gh WHERE record_type='Main' AND GH_id='$txtordernow'";
						$run3 = mysqli_query($con,$q3);
						$data = mysqli_fetch_array($run3);
						if ($data['Balance'] == $txtamount_gh)
						{
							$q2 = "UPDATE gh SET last_block_time='$last_block_time', Status='Process', ph_amount='$txtamount_gh', Balance='0', phid='$phid' WHERE record_type='Main' AND GH_id='$txtordernow'";
							$run2 = mysqli_query($con,$q2);
						}
						else
						{
							$email = getParticipantEmailById($txtordernow, "GH");
							$bal = $data['Balance'] - $txtamount_gh;
							$q2 = "UPDATE gh SET Status='Process', ph_amount='$txtamount_gh', Balance='$bal' WHERE record_type='Main' AND GH_id='$txtordernow'";
							$run2 = mysqli_query($con,$q2);
							//	Id GH_id Participant Select_currency Amount Balance GH_date Status
							$q4 = "INSERT INTO gh (GH_id, Participant, Participant_email, Select_currency, Amount, Balance, GH_date, Status, record_type, phid, ph_amount, last_block_time) VALUES ('".$data['GH_id']."', '".$data['Participant']."', '".$email."', '".$data['Select_currency']."', '".$txtamount_gh."', '".$txtamount_gh."', '".$data['GH_date']."', 'Process', 'Child', '$phid', '$txtamount_gh', '$last_block_time');";
							$run4 = mysqli_query($con,$q4);
						}
						//exit();
					}
					else if ($txtamount_ph > $txtamount_gh)
					{
						// PH balance and amount adjust
						$q3 = "SELECT * FROM ph WHERE id='$phid'";
						$run3 = mysqli_query($con,$q3);
						$data = mysqli_fetch_array($run3);
						if ($data['Balance'] == $txtamount_gh)
						{
							$q2 = "UPDATE ph SET last_block_time='$last_block_time', Balance='0', Status='Process', Order_id='$txtordernow', gh_id='$txtordernow', gh_amount='$txtamount_gh' WHERE id='$phid'";
							$run2 = mysqli_query($con,$q2);
						}
						else
						{
							$email = getParticipantEmailById($ph_id, "PH");//exit();
							$bal = $data['Balance'] - $txtamount_gh;
							$q2 = "UPDATE ph SET Balance='$bal', Status='Process' WHERE id='$phid'";
							$run2 = mysqli_query($con,$q2);

							$q1 = "INSERT INTO `ph` (PH_id, Marvo_id, Order_id, gh_id, gh_amount, Type, Select_currency, Type_c, Amount, Participant, Participant_email, PH_date, payment_status, Status, Payment_mood, Bonus, Balance, record_type, last_block_time) VALUES ('$ph_id','$marvo_id','$txtordernow','$txtordernow','$txtamount_gh','Unconfirm','$currency','$currency','$txtamount_gh', '$participant', '$email', '$curr_date', 'None', 'Process', '$payment_mood', '$bonus','$txtamount_gh', 'Child', '$last_block_time')";//exit();
							$run1 = mysqli_query($con,$q1);
							$phid = mysqli_insert_id($con);
							//exit();
						}

						// GH balance and amount adjust
						$q3 = "SELECT * FROM gh WHERE record_type='Main' AND GH_id='$txtordernow'";
						$run3 = mysqli_query($con,$q3);
						$data = mysqli_fetch_array($run3);
						if ($data['Balance'] == $txtamount_gh)
						{
							$q2 = "UPDATE gh SET last_block_time='$last_block_time', Status='Process', ph_amount='$txtamount_gh', phid='$phid', Balance='0' WHERE record_type='Main' AND GH_id='$txtordernow'";
							$run2 = mysqli_query($con,$q2);
						}
						else
						{
							$email = getParticipantEmailById($txtordernow, "GH");
							$bal = $data['Balance'] - $txtamount_gh;
							$q2 = "UPDATE gh SET Balance='$bal', ph_amount='$txtamount_gh', Status='Process' WHERE record_type='Main' AND GH_id='$txtordernow'";
							$run2 = mysqli_query($con,$q2);
							
							//	Id GH_id Participant Select_currency Amount Balance GH_date Status
							$q4 = "INSERT INTO gh (GH_id, Participant, Participant_email, Select_currency, Amount, Balance, GH_date, Status, record_type, phid, ph_amount, last_block_time) VALUES ('".$data['GH_id']."', '".$data['Participant']."', '".$email."', '".$data['Select_currency']."', '".$txtamount_gh."', '".$txtamount_gh."', '".$data['GH_date']."', 'Process', 'Child', '$phid', '$txtamount_gh', '$last_block_time');"; 
							//exit();
							$run4 = mysqli_query($con,$q4);
						}	
						//exit();					
					}
				}
				//$txtamount_gh="";
			}
			$i++;
		}
		//exit;
		echo '<script>window.open("link 100 USD.php","_self");</script>';	
	}
			
}

function getUserName($User_id=null)
{
	global $con;
	$select_1 = "SELECT User_name FROM registration WHERE User_id='$User_id';";
	$run_1 = mysqli_query($con,$select_1);
	$User_name="";
	if (mysqli_num_rows($run_1))
	{
		$res = mysqli_fetch_array($run_1);
		$User_name = $res['User_name'];
	}
	return $User_name;
}

function getSponserId($email=null)
{
	global $con;
	$select_1 = "SELECT invite_email FROM registration WHERE E_mail='$email';";
	$run_1 = mysqli_query($con,$select_1);
	$sponser="";
	if (mysqli_num_rows($run_1))
	{
		$res = mysqli_fetch_array($run_1);
		$sponser = $res['invite_email'];
	}
	return $sponser;
}

function feedbackAccept()
{
	global $con;
	// global $user_name;
	if (isset($_POST['feedback_active_submit']))
	{
		$User_id = $_POST['User_id'];
		//print_r($_POST);exit();
		$Msg_status = $_POST['combo_status'];
		$Video_status = $_POST['combo_video_bonus'];
		$Accept_msg = $_POST['msg'];
		$status="reject";
		if ($Msg_status=="YES" && $Video_status=="YES")
		{
			$status="accept";			
			$q2 = "SELECT F.User_id, F.gh_id, G.Participant_email, G.Participant, G.Select_currency, G.Amount FROM testmonials as F LEFT JOIN gh as G ON F.gh_id=G.GH_id WHERE G.record_type='Main';";
			$rec1 = mysqli_query($con,$q2);
			if (mysqli_num_rows($rec1))
			{
				$data1 = mysqli_fetch_array($rec1);
				$entrydate = date('d-m-Y h:i:s');
				$last_lock_date = (time() + (3600*48));
				$bonus = number_format((float)($data1['Amount'] * 5)/100, 2, '.', '');
				// $q1 = "INSERT INTO `ph` (gh_id, gh_amount, Select_currency, Type_c, Amount, Participant, Participant_email, PH_date, Bonus, last_block_time, record_type) VALUES ('".$data1['gh_id']."','".$data1['Amount']."','".$data1['Select_currency']."','".$data1['Select_currency']."', '$bonus','".$data1['Participant']."','".$data1['Participant_email']."','$entrydate','Video Bonus','$last_lock_date', 'Bonus')";

				$q1 = "INSERT INTO `ph` (PH_id, Marvo_id, Type, gh_amount, Select_currency, Type_c, Amount, Participant, Participant_email, PH_date, Bonus,Growth, last_block_time, record_type) VALUES ('".$data1['gh_id']."','".$data1['gh_id']."','Confirm','".$data1['Amount']."','".$data1['Select_currency']."','".$data1['Select_currency']."', '".$data1['Amount']."','".$data1['Participant']."','".$data1['Participant_email']."','$entrydate','Video Bonus','$bonus','$last_lock_date', 'Bonus')";



				// $q1 = "INSERT INTO ph VALUES ('','".$data1['gh_id']."','','','Confirm','','','".$data1['Participant']."','".$data1['Participant_email']."','','0','','0','','','','None',''".$data1['Select_currency']."'',''".$data1['Amount']."'','Video Bonus','$bonus','','$ph_date','','','Bonus', '')";


				$run = mysqli_query($con,$q1);
			}
			//exit();			
		}
		$q = "UPDATE testmonials SET status='$status', Msg_status='$Msg_status', Video_status='$Video_status', Accept_msg='$Accept_msg' WHERE User_id='$User_id'";
		$run = mysqli_query($con,$q);
		echo '<script>window.open("Happiness GH Letter List.php","_self");</script>';			
		//print_r($_POST);exit(); 
	}
}

function adjustPhGh()
{//print_r($_POST);
	global $con;
	if (isset($_POST['submit_ph_adjust']))
	{
		//print_r($_POST);exit(); 
		$i=1;
		foreach($_POST as $key=>$item)
		{
			$arr = explode("-", $key);
			if ($arr[0] == "txtcommitno")
				$ph_id = $item;
			if ($arr[0]=="txtadjamt")
				$txtadjamt = (float)$item;
			if ($arr[0]=="txtordernow")
				$txtordernow = $item;
			if ($i % 6 == 0)
			{
				if ($txtadjamt > 0 && $txtordernow != "")
				{
					$q = "UPDATE ph SET Status='Processed', Order_id='$txtordernow', gh_id='$txtordernow', gh_amount='$txtadjamt' WHERE id='$ph_id'";
					$run = mysqli_query($con,$q);

					$q2 = "UPDATE gh SET Status='Processed' WHERE GH_id='$txtordernow'";
					$run2 = mysqli_query($con,$q2);
				}
			}
			$i++;
		}
		//exit;
		echo '<script>window.open("link 20.php","_self");</script>';	
	}
			
}

function addTask(){

global $con;

$submit = $_POST["add"];

if(isset($submit)){

$Step_1  = $_POST['step_1'];
$Step_2  = $_POST['step_2'];
$Step_3  = $_POST['step_3'];
$Step_4  = $_POST['step_4'];
$Step_5  = $_POST['step_5'];
$Step_6  = $_POST['step_6'];
$Step_7  = $_POST['step_7'];
$Step_8  = $_POST['step_8'];
$Img_1  = $_POST['img_1'];
$Img_2  = $_POST['img_2'];
$Img_3  = $_POST['img_3'];
$Img_4  = $_POST['img_4'];
$Img_5  = $_POST['img_5'];
$Img_6  = $_POST['img_6'];
$Img_7  = $_POST['img_7'];
$Img_8  = $_POST['img_8'];
$Img_9  = $_POST['img_9'];
$Img_10  = $_POST['img_10'];
$Img_11  = $_POST['img_11'];
$Task_name  = $_POST['task_name'];
$Task_title  = $_POST['task_title'];
$Task_tag  = $_POST['task_tag'];
$Task_code  = $_POST['task_code'];
$Link  = $_POST['link'];
$Link_name  = $_POST['link_name'];
$Task_date  = date('d/m/y h:i:s');

$filename_1 = $_FILES['img_1']['name'];
$tempname_1 = $_FILES['img_1']['tmp_name'];
$folder_1 = "../dash/Taskimg/".$filename_1;
 move_uploaded_file($tempname_1, $folder_1);

$filename_2 = $_FILES['img_2']['name'];
$tempname_2 = $_FILES['img_2']['tmp_name'];
$folder_2 = "../dash/Taskimg/".$filename_2;
 move_uploaded_file($tempname_2, $folder_2);

 $filename_3 = $_FILES['img_3']['name'];
$tempname_3 = $_FILES['img_3']['tmp_name'];
$folder_3 = "../dash/Taskimg/".$filename_3;
 move_uploaded_file($tempname_3, $folder_3);



 $filename_4 = $_FILES['img_4']['name'];
$tempname_4 = $_FILES['img_4']['tmp_name'];
$folder_4 = "../dash/Taskimg/".$filename_4;
 move_uploaded_file($tempname_4, $folder_4);



 $filename_5 = $_FILES['img_5']['name'];
$tempname_5 = $_FILES['img_5']['tmp_name'];
$folder_5 = "../dash/Taskimg/".$filename_5;
 move_uploaded_file($tempname_5, $folder_5);



 $filename_6 = $_FILES['img_6']['name'];
$tempname_6 = $_FILES['img_6']['tmp_name'];
$folder_6 = "../dash/Taskimg/".$filename_6;
 move_uploaded_file($tempname_6, $folder_6);


 $filename_7 = $_FILES['img_7']['name'];
$tempname_7 = $_FILES['img_7']['tmp_name'];
$folder_7 = "../dash/Taskimg/".$filename_7;
 move_uploaded_file($tempname_7, $folder_7);


 $filename_8 = $_FILES['img_8']['name'];
$tempname_8 = $_FILES['img_8']['tmp_name'];
$folder_8 = "../dash/Taskimg/".$filename_8;
 move_uploaded_file($tempname_8, $folder_8);


 $filename_9 = $_FILES['img_9']['name'];
$tempname_9 = $_FILES['img_9']['tmp_name'];
$folder_9 = "../dash/Taskimg/".$filename_9;
 move_uploaded_file($tempname_9, $folder_9);

 $filename_10 = $_FILES['img_10']['name'];
$tempname_10 = $_FILES['img_10']['tmp_name'];
$folder_10 = "../dash/Taskimg/".$filename_10;
 move_uploaded_file($tempname_10, $folder_10);

  $filename_11 = $_FILES['img_11']['name'];
$tempname_11 = $_FILES['img_11']['tmp_name'];
$folder_11 = "../dash/Taskimg/".$filename_11;
 move_uploaded_file($tempname_11, $folder_11);



$q = "INSERT INTO `mmmtask`(`id`, `Link`, `Link_name`, `Task_name`, `Task_title`, `Task_code`, `Task_tag`, `Task_date`, `Step_1`, `Step_2`, `Step_3`, `Step_4`, `Step_5`, `Step_6`, `Img_1`, `Img_2`, `Img_3`, `Img_4`, `Img_5`, `Img_6`, `Img_7`, `Img_8`, `Img_9`, `Img_10`,`Img_11`, `Step_7`, `Step_8`) VALUES ('','$Link','$Link_name','$Task_name','$Task_title','$Task_code','$Task_tag',
     '$Task_date',
     '$Step_1','$Step_2','$Step_3','$Step_4','$Step_5','$Step_6','$folder_1','$folder_2','$folder_3','$folder_4','$folder_5',
     '$folder_6','$folder_7','$folder_8','$folder_9','$folder_10','$folder_11','$Step_7','$Step_8')";



$run = mysqli_query($con,$q);

if($run){
echo '<script>alert("Task ADDED");</script>';
echo '<script>window.open("Add Task.php","_self");</script>';

}else{

  echo '<script>alert("Task Not ADD");</script>';
  echo '<script>window.open("Add Task.php","_self");</script>';
}







}
else{


}

// END TASK
}

function addNews(){

global $con;
$heading = $_POST['headline'];
$news = $_POST['news'];
$regards = $_POST['regards'];
$submit = $_POST['add_news'];
$date = date('d/m/y');
$news_id = $_POST['news_id'];
if(isset($submit)){

$q = "INSERT INTO `news` (`News_id`, `News_date`, `News_title`, `News`,`regards`) VALUES ('$news_id','$date','$heading','$news','$regards');";
$run = mysqli_query($con,$q);



if($run){
echo '<script>alert("News ADD");</script>';
  echo '<script>window.open("add news.php","_self");</script>';


}else{

	echo '<script>alert("News Not ADD");</script>';
  echo '<script>window.open("new add news.php","_self");</script>';
}

}


}


function getEmailByName($name=null)
{
	global $con;
	$select_1 = "SELECT E_mail FROM registration WHERE User_name='$name';";
	$run_1 = mysqli_query($con,$select_1);
	$email="";
	if (mysqli_num_rows($run_1))
	{
		$res = mysqli_fetch_array($run_1);
		$email = $res['E_mail'];
	}
	return $email;
}

function GH(){

global $con;
// global $user_name;

$GH_id = sprintf('%05d',rand(1,9999999999));
$participant = $_POST['part'];
$participant_email = getEmailByName($participant);
$select_currency = $_POST['select_currency_gh'];
$Amount = $_POST['Total_gh_amount'];
$balance = $_POST['Total_gh_amount'];
$GH_date= date('d-m-Y');
$Order_date= date('d/m/y h:i:s');
$status = "Orders Created(+)";
// $email = $_POST['email'];
// $Account_name= $_POST['select_ac_name'];
// $bonus = $_POST['bonus'];
$btn = $_POST['GH']; 
//print_r($_POST);exit();
if(isset($btn)){

$select = "SELECT Id FROM `gh` order by Id desc limit 1";
$run = mysqli_query($con,$select);
if (mysqli_num_rows($run))
{
$res = mysqli_fetch_array($run);
$id_last = $res['Id'] + 1;
}
else
$id_last="1";

$q = "INSERT INTO gh VALUES ('$id_last','$GH_id','$participant','$participant_email','$select_currency','$Amount','$balance','$GH_date','$Order_date','$status','Main','','0','None', '')";
//exit();
$run = mysqli_query($con,$q);

if($run){
echo '<script>alert("GH ADDED");</script>';
echo '<script>window.open("admin with.php","_self");</script>';

}else{

  echo '<script>alert("GH Not ADD");</script>';
  echo '<script>window.open("admin with.php","_self");</script>';
}


}

}

function Deposit_with(){
		global $con;

		$PH_id = sprintf('%05d',rand(1,9999999999));
		$marvo_id = sprintf('%05d',rand(1,9999999999));
		$participant = $_POST['part'];
		$participant_email = getEmailByName($participant);
		$select_currency = $_POST['select_currency_marvo'];
		$Amount = $_POST['Total_amount'];
		$balance = $_POST['Total_amount'];
		$PH_date= date('d-m-Y');
		$Order_date= date('d/m/y h:i:s');
		$status = "Orders Created(+)";		
		$bonus_type = $_POST['select_bonus'];
		$locking = $_POST['select_locking'];
		$type = "Unconfirm";
		$ok = $_POST['PH'];

		if(isset($ok))
			{

				$q = "INSERT INTO ph VALUES ('','$PH_id','$marvo_id','','$type','$select_currency','','$participant','$participant_email','','0','','0','','','','None','$select_currency','$Amount','$bonus_type','$Amount','admin','$PH_date','$Order_date','$locking','Bonus', '')";
				
				$run = mysqli_query($con,$q);

				if($run){
					echo '<script>alert("Bonus ADDED");</script>';
					echo '<script>window.open("Deposit Amount to Panel Wallet.php","_self");</script>';

				}else{

					  echo '<script>alert("Bonus Not ADD");</script>';
					  echo '<script>window.open("Deposit Amount to Panel Wallet.php","_self");</script>';
				}


			 }










     }




?>