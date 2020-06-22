<?php 

// Set timezone 
date_default_timezone_set('Asia/Kolkata'); 
function add_account(){
global $con;
global $user_email;

 if(isset($_POST['Save'])){


$id = sprintf('%05d',rand(1,9999999999));
$account_name = $_POST['A_N']; 
$select_cur =$_POST['select_cur'];
$bank_curency ="BTC BitCoin";
$currency_address = $_POST['BTC_addres'];
$fname =$_POST['fname'];
$lname =$_POST['lname'];

$check_cur = "SELECT * FROM accounts WHERE Currency_address = '$currency_address'";
$run_check = mysqli_query($con,$check_cur);
$check_cur_check = mysqli_num_rows($run_check);

if($check_cur_check == 1){
 echo "<script>alert(' Account Address  Already  Exist');</script>";
 // echo "<script>window.open('registration_main.php','_self');</script>";
 exit();
}







$check_id = "SELECT * FROM accounts WHERE Account_id = '$id'";
$run_check_id = mysqli_query($con,$check_id);
$check_id_re = mysqli_num_rows($run_check_id);

if($check_id_re == 1){
 echo "<script>alert(' Account ID  Already  Exist');</script>";
 // echo "<script>window.open('registration_main.php','_self');</script>";
 exit();

}




$select = "SELECT Id FROM `accounts` order by Id desc limit 1";
$run = mysqli_query($con,$select);
if (mysqli_num_rows($run))
{
  $res = mysqli_fetch_array($run);
  $id_last = (float)$res['Id'] + 1;
}
else
  $id_last="1";

$insert_ac ="INSERT INTO accounts VALUES ('$id_last','$user_email','$id','$account_name','$select_cur','$bank_curency','$currency_address','$fname','$lname','1')";

$run = mysqli_query($con,$insert_ac);

if($run){

   	echo "<script>alert('Account Successfully Added');</script>";
   		echo "<script>window.open('Account.php','_self');</script>";
   		exit();

}

else{

echo "<script>alert('Account Not Add');</script>";
 echo "<script>window.open('Soppurt.php','_self');</script>";
   		exit();

}


}
}

function phMsgSubmit()
{
  global $con;
  global $user_email;
  global $user_name;

  $input_ph_msg = $_POST['input_ph_msg'];
  $input_ph_msg_phid = $_POST['input_ph_msg_phid'];
  $input_ph_msg_orderid = $_POST['input_ph_msg_orderid'];
  $curr=date("Y-m-d H:i:s",time());  
  $submit = $_POST['ph_msg_submit'];
    
  $target_dir = "Images/images_chat/";
  $target_file = $target_dir . time(); //basename($_FILES["ph_payment_img"]["name"]);
  $imageFileType = strtolower(pathinfo(basename($_FILES["image_ph_msg"]["name"]),PATHINFO_EXTENSION));
  $img_file_path = $target_file . "." . $imageFileType;  
  move_uploaded_file($_FILES["image_ph_msg"]["tmp_name"], $img_file_path); 

  if(isset($submit)){
    $q = "INSERT INTO `chattings`(`chat_phid`,`chat_message`,`chat_open`,`chat_image_path`, `chat_order_id`, chat_created, chat_type) VALUES ('$input_ph_msg_phid','$input_ph_msg','No','$img_file_path','$input_ph_msg_orderid', '$curr', 'PH')";
    $data = mysqli_query($con, $q);
    if($data){
      echo "<script>alert('Message Sent');</script>";
      echo "<script>window.open('Dash.php','_self');</script>";
      exit();
    }
  }
}

function ghMsgSubmit()
{
  global $con;
  global $user_email;
  global $user_name;
  //print_r($_POST);exit();
  $input_gh_msg = $_POST['input_gh_msg'];
  $input_gh_msg_phid = $_POST['input_gh_msg_phid'];
  $input_gh_msg_orderid = $_POST['input_gh_msg_orderid'];
  $curr=date("Y-m-d H:i:s",time());  
  $submit = $_POST['gh_msg_submit'];
    
  $target_dir = "Images/images_chat/";
  $target_file = $target_dir . time(); //basename($_FILES["ph_payment_img"]["name"]);
  $imageFileType = strtolower(pathinfo(basename($_FILES["image_gh_msg"]["name"]),PATHINFO_EXTENSION));
  $img_file_path = $target_file . "." . $imageFileType;  
  move_uploaded_file($_FILES["image_gh_msg"]["tmp_name"], $img_file_path);

  if(isset($submit)){
    $q = "INSERT INTO `chattings`(`chat_phid`,`chat_message`,`chat_open`,`chat_image_path`, `chat_order_id`, chat_created, chat_type) VALUES ('$input_gh_msg_phid','$input_gh_msg','No','$img_file_path','$input_gh_msg_orderid', '$curr', 'GH')";
    $data = mysqli_query($con, $q);
    if($data){
      echo "<script>alert('Message Sent');</script>";
      echo "<script>window.open('Dash.php','_self');</script>";
      exit();
    }
  }
}

function remainBlockTime($last_block_time=null)
{
  $diff_in_hours = "0";
  $curr=date("Y-m-d H:i:s",time());
  $last = date("Y-m-d H:i:s",$last_block_time);
  $difference_in_seconds = strtotime($last) - strtotime($curr);//28800
  $diff_in_hours = number_format($difference_in_seconds/3600, 0, '.', '');
  return $diff_in_hours;
}

function blockedByApp($user_name=null)
{
  global $con;
  $q2 = "UPDATE registration SET Status='Block' WHERE User_name='$user_name'";
  $run2 = mysqli_query($con,$q2);
  echo '<script>window.open("../../Res/logout.php","_self");</script>';
}

function add_ticket(){
global $con;
global $user_email;
global $user_name;

$topic = $_POST['topic'];
$title = $_POST['title'];
$msg = $_POST['msg'];
// $file = $_FILES['img'];
$submit = $_POST['Save'];
$ticket_id =sprintf('%05d',rand(1,999999));
    
$filename = $_FILES['Img']['name'];
$tempname = $_FILES['Img']['tmp_name'];
$folder = "../panel/SupportImg/".$filename;
 move_uploaded_file($tempname, $folder); 

if(isset($submit)){

$q = "INSERT INTO `tickets`(`User_id`,`User_email`,`Ticket_id`,`Topics`, `Title`, `Msg`, `Img`) VALUES ('$user_name','$user_email','$ticket_id','$topic','$title','$msg','$folder')";
 
 $data = mysqli_query($con, $q);

 if($data){

    echo "<script>alert('Save Ticket');</script>";
    echo "<script>window.open('Soppurt.php','_self');</script>";
   		exit();
 }


else{
    echo "<script>alert('Ticket Not Save');</script>";
     echo "<script>window.open('Soppurt.php','_self');</script>";
   		exit();
}



}


}

function reply_img(){
  global $con;
global $user;
global $tid;

$save = $_POST['re_save'];
$user_reply = $_POST['user_reply'];

$filename = $_FILES['rep_img']['name'];
$tempname = $_FILES['rep_img']['tmp_name'];
$folder = "Replyimg/".$filename;
 move_uploaded_file($tempname, $folder); 

if(isset($submit)){

$q = "INSERT INTO `reply`( `User_id`, `Reply`, `Img`) VALUES ('','$user','$user_reply','$folder')";
 
 $data = mysqli_query($con, $q);


if($data){

  echo '<script>alert("Yes");</script>';
}else{
  echo '<script>alert("Not");</script>';
}




}
}

function getGHName($gh_id=null)
{
  global $con;
  $select = "SELECT Participant FROM gh WHERE GH_id='$gh_id';";
  $run = mysqli_query($con,$select);
  $gh_name="";
  if (mysqli_num_rows($run))
  {
    $res = mysqli_fetch_array($run);
    $gh_name = $res['Participant'];
  }
  return $gh_name;
}

function getGhPaymentStatus($phid=null)
{
  global $con;
  $select = "SELECT payment_date, payment_status FROM ph WHERE Id='$phid';";
  $run = mysqli_query($con,$select);
  $payment_img_status="";
  if (mysqli_num_rows($run))
  {
    $res = mysqli_fetch_array($run);
    if ($res['payment_date'] && $res['payment_status']=="None")
        $payment_img_status = "Images/okh.png";
    else if ($res['payment_date']=="" && $res['payment_status']=="None")   
        $payment_img_status = "Images/play.png";
    else if ($res['payment_date'] && $res['payment_status']=="Confirm")   
        $payment_img_status = "Images/okk.png"; 
    else
        $payment_img_status = "Images/play.png";     
  }
  return $payment_img_status;  
}

function getGHFeedbackStatus($gh_id=null)
{
  global $con;
  $select = "SELECT status FROM testmonials WHERE gh_id='$gh_id';";
  $run = mysqli_query($con,$select);
  $pStatus="";
  if (mysqli_num_rows($run))
  {
    $res = mysqli_fetch_array($run);
    $pStatus = $res['status'];
  }//echo $pStatus; 
  return $pStatus;
}

function getGhPaymentStatus2($id=null, $type=null)
{
  global $con;
  if ($type == "PH")
  {
    $select = "SELECT Balance FROM ph WHERE payment_status='Confirm' AND Id='$id' AND record_type='Main';";
    $run = mysqli_query($con,$select);  
  }
  else if ($type=="GH")
  {
    $select = "SELECT Balance FROM gh WHERE payment_status='Confirm' AND Id='$id' AND record_type='Main';";
    $run = mysqli_query($con,$select);
  }
  
  $pStatus="";
  if (mysqli_num_rows($run))
  {
    $res = mysqli_fetch_array($run);
    $bal = $res['Balance'];
    if ($bal<=0)
      $pStatus="PAID";
  }//echo $pStatus; 
  return $pStatus;
}

function availableWithdrawalInfo()
{
  global $con;
  global $user_email;
  global $user_name;
  $qeury = "SELECT * FROM `ph` WHERE (record_type='Main' OR record_type='Reg' OR record_type='Bonus') AND Participant = '$user_name';";
  $rec = mysqli_query($con, $qeury);
  $principal_amt = 0; $growth_amt=0; $reg_amt=0;$bonus_amt=0;  
  while ($data = mysqli_fetch_array($rec))
  {
    if ($data['payment_status']=="Confirm")
    {//echo "ph";
       // ph
      $current_date = date('Y-m-d');
      $active_date = date('Y-m-d', strtotime($data['PH_date']. ' + 1 days'));
      
      if($data['record_type']=="Bonus" && $current_date>=$active_date)
        $release_date = date('Y-m-d', strtotime($active_date. ' + 30 days'));
      else if ($current_date>=$active_date)
        $release_date = date('Y-m-d', strtotime($active_date. ' + 14 days'));

      if (1)// ($release_date<$current_date)
      {
        $principal_amt += (float)$data['Amount'];

        $date3=date_create($active_date); //("2013-03-15");
        $date4=date_create($current_date); //("2013-12-12");
        $diff2=date_diff($date3,$date4);
        $growth_days = $diff2->format("%a");
        $growth_days++;
        $growth_amt += (float)((float)$data['Amount'] * $growth_days) / 100;        
      }
    }
    else if ($data['record_type']=='Reg')
    {//echo "reg";
      // reg
      $reg_amt = $data['Amount'];
    }
    else if ($data['record_type']=='Bonus')
    {//echo "reg";
      // reg
      $bonus_amt += $data['Amount'];
    }
  }
  return array("principal_amt"=>$principal_amt, "reg_amt"=>$reg_amt, "growth_amt"=>$growth_amt, "bonus_amt"=>$bonus_amt);//);exit();
}

function getPHName($gh_id=null)
{
  global $con;
  $select = "SELECT Participant FROM ph WHERE gh_id='$gh_id';";
  $run = mysqli_query($con,$select);
  $ph_name="";
  if (mysqli_num_rows($run))
  {
    $res = mysqli_fetch_array($run);
    $ph_name = $res['Participant'];
  }
  return $ph_name;
}

function feedbackSubmit()
{
  global $con;
  // global $user_name;
  if ($_POST['feedback_submit'])
  {
    $feedback_letter = $_POST['feedback_letter'];
    $feedback_url = $_POST['feedback_url'];
    $input_feedback_amount = $_POST['input_feedback_amount'];
    $input_feedback_user_id = $_POST['input_feedback_user_id'];
    // $input_feedback_user_id = $user_name;
    $input_feedback_gh_id = $_POST['input_feedback_gh_id'];
    $entrydate = date('d-m-Y h:i:s');

    $bonus_check="No";
    if (isset($_POST['feedback_check']))
      $bonus_check="Yes";
    $q = "INSERT INTO `testmonials` (User_id, gh_id, entrydate, Amount, TestMsg, Video_Ink, bonus_check, Img) VALUES ('$input_feedback_user_id', '$input_feedback_gh_id', '$entrydate', '$input_feedback_amount', '$feedback_letter', '$feedback_url', '$bonus_check', '')";
    //exit();die();
    $run = mysqli_query($con,$q);

    if($run){
    echo '<script>alert("Feedback ADDED");</script>';
    echo '<script>window.open("Dash.php","_self");</script>';

    }else{

      echo '<script>alert("Feedback Not ADD");</script>';
      echo '<script>window.open("Dash.php","_self");</script>';
    }   
        
  }
}

function ph_gh_payment()
{
  global $con;
  global $user_name;
  if ($_POST['gh_payment_confirm_submit'])
  {//print_r($_POST);exit();
    $gh_id = $_POST['input_gh_payment_confirm_id'];
    $ph_id = $_POST['input_ph_payment_confirm_id'];
    
   

    $q = "UPDATE ph SET payment_status='Confirm', Type = 'Confirm', Status='Processed' WHERE Id='$ph_id' AND Status='Processing'";
    $run = mysqli_query($con,$q);

    $q2 = "UPDATE gh SET payment_status='Confirm', Status='Processed' WHERE Id='$gh_id'";
    $run2 = mysqli_query($con,$q2);

    $q3 = "UPDATE ph SET Type = 'Confirm' WHERE (Bonus = 'Registration Bonus' OR Bonus = 'Refferal Bonus' OR Bonus = 'Guider Bonus')";
    $run3 = mysqli_query($con,$q3);

//print_r($_POST);exit();die(); 
    if($run){
      echo '<script>alert("Payment Confirm Successfully");</script>';
      echo '<script>window.open("Dash.php","_self");</script>';

    }else{

      echo '<script>alert("Payment Confirm Error, Try again!");</script>';
      echo '<script>window.open("Dash.php","_self");</script>';
    }
       
  }

  if ($_POST['ph_payment_submit'])
  {
    global $con;
    global $user_name;
    //print_r($_FILES);exit();die();
    $img_path = $_POST['ph_payment_img'];
    $payment_id = $_POST['input_ph_payment_id'];
    $payment_value = $_POST['input_ph_payment_value'];
    $payment_ctype = $_POST['input_ph_payment_ctype'];
    $payment_remarks = $_POST['ph_payment_remarks'];
    $payment_date = date('d-m-Y h:m:s');
     $gh_id = $_POST['input_gh_payment_confirm_id'];

    // 020819 start
    $target_dir = "Images/payment_images/";
    $target_file = $target_dir . time(); //basename($_FILES["ph_payment_img"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo(basename($_FILES["ph_payment_img"]["name"]),PATHINFO_EXTENSION));
    $img_file_path = $target_file . "." . $imageFileType;
    
    move_uploaded_file($_FILES["ph_payment_img"]["tmp_name"], $img_file_path);

    //exit();die();
    $q = "UPDATE ph SET payment_image='$img_file_path', payment_value='$payment_value', payment_currency='$payment_ctype', payment_date='$payment_date', payment_remarks='$payment_remarks',Status = 'Processing' WHERE Id='$payment_id'";
    $run = mysqli_query($con,$q);

  

    if($run){
      echo '<script>alert("Payment Added Successfully");</script>';
      echo '<script>window.open("Dash.php","_self");</script>';

    }else{

      echo '<script>alert("Payment Error, Try again!");</script>';
      echo '<script>window.open("Dash.php","_self");</script>';
    }
  }
  //print_r($_POST);exit();die();  
}


// reffal



// GH Add function
function GH(){

global $con;
global $user_name;
global $user_email;

$GH_id = sprintf('%05d',rand(1,9999999999));
$participant = $user_name;
$select_currency = $_POST['select_currency_gh'];
$Amount = $_POST['Total_gh_amount']; //Total_gh_amount
$balance = $Amount; //0;
$GH_date= date('d-m-Y');
$status = "Orders Created(+)";
$Account_name= $_POST['select_ac_name'];
$order_date = date('d/m/y h:i:s');
$btn = $_POST['GH']; 

//print_r($_POST);exit();die();

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

/*if ($_POST['select_currency_gh'] == 'BTC')
  $Amount = "0.044";
else
  $Amount = "102";*/
$balance = $Amount;

$q = "INSERT INTO `gh` VALUES ('$id_last','$GH_id','$participant','$user_email','$select_currency','$Amount','$balance','$GH_date',
'$order_date','$status', 'Main', '', '0', 'None', '')";
//exit();die();
$run = mysqli_query($con,$q);

if($run){
echo '<script>alert("GH ADDED");</script>';
echo '<script>window.open("Dash.php","_self");</script>';

}else{

  echo '<script>alert("GH Not ADD");</script>';
  echo '<script>window.open("Dash.php","_self");</script>';
}






}






}



function userTask(){

global $user;
global $con;
global $user_name;


$task_code  = $_POST['task_code'];
$link = $_POST['url'];
// $status = "Processing";
$date_time = date('d-m-Y h:i');
$task_date = date('d-m-Y');
$add = $_POST['add'];

if(isset($add)){


$q = "INSERT INTO `user_task` (`id`, `user_name`, `date_task`,`date_time`, `link`, `Task_code`,`Status`) VALUES ('','$user','$task_date','$date_time','$link',
'$task_code','being moderated');";

$run = mysqli_query($con,$q);



if($run){
  echo '<script>window.open("mmm extra.php","_self");</script>';
}else{
  echo '<script>alert("Task Not Add");</script>';
}


}




}

?>