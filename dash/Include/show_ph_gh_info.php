<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
session_start();
$q = $_GET['q'];
$qqq = $_GET['q'];
include('conn.php');
include('user_details.php');
mysqli_select_db($con,"ajax_demo");
// $sql="SELECT * FROM  ph WHERE PH_id = '".$q."'";

if (1)
{
	if ($q == "All")
		$reg = "SELECT E_mail FROM `registration` WHERE Invite_email = '$user_email';";
	else
		$reg = "SELECT E_mail FROM `registration` WHERE E_mail = '$q';";
	$q3 = mysqli_query($con,$reg);
	while ($run3 = mysqli_fetch_array($q3))
	{
		$q = $run3['E_mail'];
		$qqq = $run3['E_mail'];
$ph_order .= '<div class="ph_gh_order" align="left">';
        $block_the_id="NO";
        $select = "SELECT * FROM ph WHERE Participant_email = '$q'  AND Bonus = 'MARVO 30%' AND (Status='Process' OR Status='Processed' OR Status='Processing') ORDER BY Id DESC;";
        $run = mysqli_query($con,$select);
        // $row = mysqli_fetch_array($run);
        $row = mysqli_num_rows($run);
        $ph_payment_id="";
        $tmp_ph_id="";

         for ($j = 0 ; $j < $row ; ++$j)
         { 
         $res = mysqli_fetch_array($run);
         if ($res['Status'] == "Process" || $res['Status'] == "Processed" || $res['Status'] == "Processing"){
            if ($res['gh_id']=="")
                continue;
               
            $gh_name = getGHName($res['gh_id']);
            $ph_payment_id = getGHName($res['id']);
            if ($res['payment_date'] && $res['payment_status']=="None")
                $payment_img_status = "Images/okh.png";
            else if ($res['payment_date']=="" && $res['payment_status']=="None")   
                $payment_img_status = "Images/play.png";
            else if ($res['payment_date'] && $res['payment_status']=="Confirm")   
                $payment_img_status = "Images/okk.png";            
            else
                $payment_img_status = "Images/play.png";
            //echo $res['last_block_time'];    
            $remain_block_time = remainBlockTime($res['last_block_time']);//exit();
            if ($remain_block_time<="0" && $res['payment_status']!='Confirm')
            {
                $payment_status_img="Images/cancal.png";
                
            }   

$ph_order .= '<div class="ph_order" style="margin: 10px 0px 0px 0px;">';
if ($res['payment_status']=='Confirm' || $block_the_id=="YES")
{
	$ph_order .= '<div class="number">
<a  style="text-decoration: none; color: black;"><img src="'.$payment_img_status.'" alt="" class="ph_order_img" width="40%;">
<span class="num">Number:</span><span class="numba">R'.$res['Order_id'].'</span>
</a>
</div>';
} else {
	if($res['Status'] == "Processing")
	{ 
		$dis = "oppp";
	}else{
		$dis = "ph_number";
	}    
$ph_order .= '<div class="number '.$dis.'">
<a href="javascript:void(0)" style="text-decoration: none; color: black;"><img src="'.$payment_img_status.'" alt="" class="ph_order_img" width="40%;">
<span class="num">Number:</span><span class="numba">R'.$res['Order_id'].'</span>';

    if ($payment_img_status == "Images/play.png")
	{
	$ph_order .= '<span style=" position: absolute;top: 0px; right: 100px;font-size: 13px;" class="gh_timer">Time to finish remains :<br>
<span style="color: red;font-weight: 700;padding-left: 40px;">'.$remain_block_time.' hours</span></span>';
	}

$ph_order .= '</a>
</div>';
}
$ph_order .= '<div class="order_content">
<a href="javascript:void(0)" style="text-decoration: none; color: black;">
<span class="confirm">Confirmed by CRO (Request to   Provide help Z'.$res['PH_id'].')</span>
<div class="cona">
<span class="datetxt">Date of creating:</span>
<span class="datenum">'.$res['PH_date'].'</span>
</div>
<div class="conb">
<span class="name">You</br>'.$user_name.'</span>
<span class="bank">'.$res['Type_c'].'</span>
</div>
</a>
<div class="conc">
<a href="javascript:void(0)" style="text-decoration: none; color: black;">
<span class="datetxt"><i class="ileft">&gt;</i>'.$res['gh_amount'].''.$res['Type_c'].'<i class="iright">&gt;</i></span>
<span class="datenum"></span></a>
    <a href="'.$res['payment_image'].'" style="font-size: 10px; text-decoration: none;color: black;"  class="cls_confirm" target="self">Confirmation: 
    <img src="Images/png.png" alt=""></a>                     
</div>
<div class="cond">
<span class="name">'.$gh_name.'</span>
<span class="bank">'.$res['Type_c'].'</span>
</div>
<div class="condprintimg">
<img src="Images/printout.png" class="">
</div>
</div>
<a href="javascript:void(0)" class="msg_ph_box"  style="text-decoration: none; color: black;">Messages:0</a>
<a href="javascript:void(0)" class="open_ph_details">Details &gt;&gt;</a>
</div>';
if ($res['payment_status']=='Confirm' || $block_the_id=="YES")
{    
	$ph_order .= '<div align="center" style="display: none;"><div  class="ph_order_confirm">
<div style="display: flex; flex-direction: row; margin: 10px 0px; cursor: pointer;"><div><img src="Images/to_play.png"></div>
<div style="margin-left: 10px; line-height: 2;">I consent to make payment</div>
</div>
<div style="display: flex; flex-direction: row;cursor: pointer;"  class="c_of_pay"><div><img src="Images/to_ok.png"></div>
<div style="margin-left: 10px; line-height: 2;">I completed this payment</div>
</div>
<div style="display: flex; flex-direction: row; margin: 10px 0px; cursor: pointer;"><div><img src="Images/to_block.png"></div>
<div style="margin-left: 10px; line-height: 2;">I refuse to make money transfer
<div style="line-height: 1;padding: 13px;box-sizing: border-box;margin-top: -20px;font-size: 13px;color: grey;">This is a serious decision. You may be blocked. There will be an intermediate page, where you will be asked about the reason. And it might be a valid one.:-))Check with your sponsor or Guider if you have a problem before you click on.</div>
</div>
</div>
</div>';
} else {
	$ph_order .= '<div align="center" class="ph_o_c" style="display: none;"><div  class="ph_order_confirm">
<div style="display: flex; flex-direction: row; margin: 10px 0px; cursor: pointer;"><div><img src="Images/to_play.png"></div>
<div style="margin-left: 10px; line-height: 2;">I consent to make payment</div>
</div>
<div style="display: flex; flex-direction: row;cursor: pointer;"  class="c_of_pay"><div><img src="Images/to_ok.png"></div>
<div style="margin-left: 10px; line-height: 2;">I completed this payment</div>
</div>
<div style="display: flex; flex-direction: row; margin: 10px 0px; cursor: pointer;"><div><img src="Images/to_block.png"></div>
<div style="margin-left: 10px; line-height: 2;">I refuse to make money transfer
<div style="line-height: 1;padding: 13px;box-sizing: border-box;margin-top: -20px;font-size: 13px;color: grey;">This is a serious decision. You may be blocked. There will be an intermediate page, where you will be asked about the reason. And it might be a valid one.:-))Check with your sponsor or Guider if you have a problem before you click on.</div>
</div>
</div>
</div>';
}
$ph_order .= '</div>';
}}


$block_the_id="NO";
$select_1 = "SELECT * FROM gh WHERE Participant_email = '$q' AND (Status='Process' OR Status='Processed') ORDER BY Id DESC;";
$run_1 = mysqli_query($con,$select_1);
// $row = mysqli_fetch_array($run);
$tmp_ph_id="";
 while ($res_1 = mysqli_fetch_array($run_1)) {
 if($res_1['Status'] == "Process" || $res_1['Status'] == "Processed"){    
    if ($res_1['phid']=="" || $res_1['phid']=="0")
        continue;
    $ph_name = getPHName($res_1['GH_id']);    
    $payment_status_img = getGhPaymentStatus($res_1['phid']);
    $remain_block_time = remainBlockTime($res_1['last_block_time']);
    if ($remain_block_time<="0" && $res_1['payment_status']!='Confirm')
    {
        $payment_status_img="Images/cancal.png";
    }
 


$ph_order .= '<div class="gh_order" style="display: block; margin: 11px 0px 0px 0px;">';
if ($res_1['payment_status']=='Confirm' || $block_the_id=="YES") 
{
$ph_order .= '<div class="number">
<a  style="text-decoration: none; color: black;"><img src="'.$payment_status_img.'" alt="" width="40%;">
<span class="num">Number:</span><span class="numba">R'.$res_1['GH_id'].'</span>
</a>
</div>';
} else {
$ph_order .= '<div class="number gh_number">
<a href="javascript:void(0)" style="text-decoration: none; color: black;"><img src="'.$payment_status_img.'" alt="" width="40%;">
<span class="num">Number:</span><span class="numba">R'.$res_1['GH_id'].'</span>';

if ($payment_status_img == "Images/play.png")
{
$ph_order .= '<span style=" position: absolute;top: 0px; right: 100px;font-size: 13px;" class="gh_timer">Time to finish remains :<br>
<span style="color: red;font-weight: 700;padding-left: 40px;">'.$remain_block_time.' hours</span></span>';
}
$ph_order .= '
</a>
</div>';
}
$ph_order .= '<div class="order_content">
<a href="javascript:void(0)" style="text-decoration: none; color: black;">
<span class="confirm">Confirmed by CRO (Request to   Get help Z'.$res_1['GH_id'].')</span>
<div class="cona">
<span class="datetxt">Date of creating:</span>
<span class="datenum">'.$res_1['GH_date'].'</span>
</div>
<div class="conb">
<span class="name">'.$ph_name.'</span>
<span class="bank">'.$res_1['Select_currency'].'</span>
</div>
</a>
<div class="conc">
<a href="javascript:void(0)" style="text-decoration: none; color: black;">
<span class="datetxt"><i class="ileft">&gt;</i>'.$res_1['ph_amount'].''.$res_1['Select_currency'].'<i class="iright">&gt;</i></span>
<span class="datenum"></span></a>';

$q = "SELECT * FROM ph WHERE Participant_email = '$q' AND record_type = 'Main'";
$run = mysqli_query($con,$q);
$re = mysqli_fetch_array($run);


$ph_order .= '<a href="'.$re['payment_image'].'" style="font-size: 10px; text-decoration: none;color: black;" target="self">Confirmation: 
<img src="Images/png.png" alt=""></a>                       
</div>
<div class="cond">
<span class="name">You'.$ph_name.'</span>
<span class="bank">'.$res_1['Select_currency'].'</span>
</div>
<div class="condprintimg">
<img src="Images/printout.png" class="">
</div>
</div>
<a href="javascript:void(0)" class="msg_gh_box" style="text-decoration: none; color: black;">Messages: 0</a>
<a href="javascript:void(0)" class="open_gh_details">Details &gt;&gt;</a>
</div>';
if ($res_1['payment_status']=='Confirm' || $block_the_id=="YES") 
{
$ph_order .= '<div align="center"  style="display: none;"><div class="gh_order_confirm">
<div style="display: flex; flex-direction: row; margin: 10px 0px; cursor: pointer;" class="gh_confirm_pop"><div><img src="Images/okk.png"></div>
<div style="margin-left: 10px; line-height: 2;">Confirm funds reception</div>
</div>';
} else {
$ph_order .= '<div align="center" class="gh_o_c" style="display: none;"><div class="gh_order_confirm">
<div style="display: flex; flex-direction: row; margin: 10px 0px; cursor: pointer;" class="gh_confirm_pop"><div><img src="Images/okk.png"></div>
<div style="margin-left: 10px; line-height: 2;">Confirm funds reception</div>
</div>';
}
$ph_order .= '</div></div>';
}}

$ph_order .= '</div>';

$ph_order .= '<!-- PH GH Request -->
<div class="ph_gh_req">
<!-- PH REQUEST	 -->';

$select = "SELECT Id, PH_id, Amount, gh_amount, gh_id, Type_c, PH_date, Participant, Participant_email, Status, Balance FROM ph WHERE Participant_email = '$qqq' AND Bonus = 'MARVO 30%' ORDER BY Id DESC;";//exit();die();
$run = mysqli_query($con,$select);
$row = mysqli_num_rows($run);

$tmp_ph_id="";    
 while ($res = mysqli_fetch_array($run)) {
     
  $balance=0;

 if ($tmp_ph_id == $res['PH_id'])
   continue;
 else
    $tmp_ph_id = $res['PH_id'];   
 $balance = (float)$res['Amount'] - (float)$res['Balance'];

 $payment_status = getGhPaymentStatus2($res['Id'], "PH");

 $cls_style="";
 if ($payment_status=="PAID" && $res['Status']=='Processed')
    $cls_style='background:linear-gradient(to bottom,rgba(255,255,255,1) 0%,rgba(241,241,241,1) 43%,rgba(225,225,225,1) 56%,rgba(246,246,246,1) 100%);';

$ph_order .= '<div class="ph_req" style="margin: 10px; '.$cls_style.'">
<a href="javascript:void(0)">
<div class="rtitle"><span>Request to provide help Z'.$res['PH_id'].' </span></div>
</a>
<div class="req_text" align="left">
<a href="javascript:void(0)" style="text-decoration: none; color: black; line-height: 13px;font-size: 11px;">
Participant:'.$res['Participant'].' <br>
Amount:'.$res['Amount'].''.$res['Type_c'].'<br>
Balance: '.$res['Balance'].''.$res['Type_c'].' <br>
Date: '.$res['PH_date'].'<br>
Status:<span class="status">'.$res['Status'].'</span><br>
</a>
 <a style="" href="javascript:void(0)" class="open_ph_req_del" >Details &gt;&gt;</a>
</div>	
</div>';

}
$select2 = "SELECT * FROM gh WHERE Participant_email = '$q' ORDER BY  Id DESC;";
$run2 = mysqli_query($con,$select2);
$row2 = mysqli_num_rows($run2);
    $tmp_gh_id="";
 for ($j = 0 ; $j < $row2 ; ++$j)
 { 
 $res2 = mysqli_fetch_array($run2); $balance=0;
 if ($tmp_gh_id == $res2['GH_id'])
    continue;
 else
    $tmp_gh_id = $res2['GH_id'];
 //$balance = (float)$res2['Amount'] - (float)$res2['gh_amount'];
 $payment_status = getGhPaymentStatus2($res2['Id'], "GH");

 $cls_style="";
 if ($payment_status=="PAID" && $res2['Status']=='Processed')
    $cls_style='background:linear-gradient(to bottom,rgba(255,255,255,1) 0%,rgba(241,241,241,1) 43%,rgba(225,225,225,1) 56%,rgba(246,246,246,1) 100%);';
 
$ph_order .= '<div class="gh_req" style="display: block;'.$cls_style.'; margin: 10px;">
<a href="javascript:void(0)">
<div class="rtitle_2"><span>Request to Get help Z'.$res2['GH_id'].' </span></div>
</a>
<div class="req_text" align="left">
<a href="javascript:void(0)" style="text-decoration: none; color: black; line-height: 13px;font-size: 11px;">
Participant:'.$res2['Participant'].' <br>Amount:'.$res2['Amount'].''.$res2['Select_currency'].'<br>Balance: '.$res2['Balance'].''.$res2['Select_currency'].' <br>
Date: '.$res2['GH_date'].'<br>Status:<span class="status_gh">'.$res2['Status'].'</span><br><br></a>';
if ($payment_status=="PAID")//if ($feedback_status=="reject")
    {
	$ph_order .= '<a style=""  href="javascript:void(0)" class="open_LOH">Write a Letter of happiness</a>';
	}

$ph_order .= '<span class="open_LOH_status" style="font-size: 11px;color: grey;"></span>
 <a style="" href="javascript:void(0)" class="open_gh_req_del" >Details &gt;&gt;</a>
</div>		
</div>';
} 

$ph_order .= '
</div>
</div>';
}
}

?>

<?php
mysqli_close($con);
$req="";
echo $ph_order ."|*|". $req;

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
function remainBlockTime($last_block_time=null)
{
  $diff_in_hours = "0";
  $curr=date("Y-m-d H:i:s",time());
  $last = date("Y-m-d H:i:s",$last_block_time);
  $difference_in_seconds = strtotime($last) - strtotime($curr);//28800
  $diff_in_hours = number_format($difference_in_seconds/3600, 0, '.', '');
  return $diff_in_hours;
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
?>
</body>
</html>