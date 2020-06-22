<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
session_start();
$q = intval($_GET['q']);

include('conn.php');
include('user_details.php');
/*$con = mysqli_connect('localhost','root','','mmm');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}*/

mysqli_select_db($con,"ajax_demo");
// $sql="SELECT * FROM  ph WHERE PH_id = '".$q."'";

$select = "SELECT * FROM ph WHERE Participant = '$user_name' AND Bonus = 'MARVO 30%' AND Id = '$q' ORDER BY ph_id, Id;";
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
    $cls_style ='background:linear-gradient(to bottom,rgba(255,255,255,1) 0%,rgba(241,241,241,1) 43%,rgba(225,225,225,1) 56%,rgba(246,246,246,1) 100%);';

$req = '

<div class="ph_req" style="margin: 10px 0px; '.$cls_style.';">
<a href="javascript:void(0)">
<div class="rtitle" style="padding:5px 20px 5px 60px;"><span>Request to provide help Z '.$res['PH_id'].' </span></div>
</a>
<div class="req_text" align="left">
<a href="javascript:void(0)" style="text-decoration: none; color: black; line-height: 13px;font-size: 11px;">
Participant:'.$res['Participant'].' <br>Amount:'.$res['Amount'].''.$res['Type_c'].'<br>Balance: '.$res['Balance'].''.$res['Type_c'].' <br>
Date: '.$res['PH_date'].'<br>Status:<span class="status">'.$res['Status'].'</span><br><br></a>
 <a style="padding: 2px 6px 1px;background: #fff;border: 1px solid #999;border-radius: 6px;cursor: pointer;font-size: 10px;text-decoration: none;color: #0645AD;float:right" href="javascript:void(0)" class="open_ph_req_del" id="'.$res['PH_id'].'" >Details &gt;&gt;</a>
</div>	
</div>';

 } ?>

<?php
$block_the_id="NO";
$select = "SELECT * FROM ph WHERE Id = '$q' ORDER BY record_type DESC;";
$run = mysqli_query($con,$select);
// $row = mysqli_fetch_array($run);
$row = mysqli_num_rows($run);
$ph_payment_id="";
$tmp_ph_id="";

 for ($j = 0 ; $j < $row ; ++$j)
 { 
 $res = mysqli_fetch_array($run);
 if ($res['Status'] == "Process" || $res['Status'] == "Processed"){
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
        
    $remain_block_time = remainBlockTime($res['last_block_time']);
    if ($remain_block_time<="0")
    {
        $payment_status_img="Images/cancal.png";
        $block_the_id="YES";
        blockedByApp($user_name);
    }            
 
$ph_order = '<div class="ph_order" style="margin: 10px 0px 0px 0px;">';

if ($res['payment_status']=='Confirm' || $block_the_id=="YES")
{
	$ph_order .= '<div class="number">
<a  style="text-decoration: none; color: black;"><img src="'.$payment_img_status.'" alt="" class="ph_order_img" width="40%;">
<span class="num">Number:</span><span class="numba">R'.$res['Order_id'].'</span>
</a>
</div>';
}
else
{
	$ph_order .= '<div class="number ph_number">
<a href="javascript:void(0)" style="text-decoration: none; color: black;"><img src="'.$payment_img_status.'" alt="" class="ph_order_img" width="40%;">
<span class="num">Number:</span><span class="numba">R'.$res['Order_id'].'</span><span style=" position: absolute;top: 0px; right: 100px;font-size: 13px;" class="gh_timer">Time to finish remains :<br>
<span style="color: red;font-weight: 700;padding-left: 40px;">'.$remain_block_time.' hours</span></span>
</a>
</div>';
}
$order_type="PH";
$ph_order .= '<div class="order_content">
<a href="javascript:void(0)" style="text-decoration: none; color: black;">
<span class="confirm">Confirmed by CRO (Request to   Provide help Z'.$res['PH_id'].')</span>
<div class="cona">
<span class="datetxt">Date of creating:</span>
<span class="datenum">'.$res['PH_date'].'</span>
</div>
<div class="conb">
<span class="name">You</br></span>
<span class="bank">'.$res['Type_c'].'</span>
</div>
</a>
<div class="conc">
<a href="javascript:void(0)" style="text-decoration: none; color: black;">
<span class="datetxt"><i class="ileft">&gt;</i>'.$res['gh_amount'].''.$res['Type_c'].'<i class="iright">&gt;</i></span>
<span class="datenum"></span></a>
<a href="javascript:void(0)" style="font-size: 10px; text-decoration: none;color: black;">Confirmation: 
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
<a href="javascript:void(0)" class="msg_ph_box" onclick="fillPhMsgInfo('.$res['Id'].', '.$res['Order_id'].');" style="text-decoration: none; color: black;">Messages:0</a>
<a href="javascript:void(0)" class="open_ph_details" id="'.$res['PH_id'].'" onclick="ph_order_det(this.id, '.$order_type.', '.$res['Id'].')">Details &gt;&gt;</a>
</div>';
if ($res['payment_status']=='Confirm' || $block_the_id=="YES")
{
	$ph_order .= '<div align="center" style="display: none;"><div  class="ph_order_confirm">
<div style="display: flex; flex-direction: row; margin: 10px 0px; cursor: pointer;"><div><img src="Images/to_play.png"></div>
<div style="margin-left: 10px; line-height: 2;">I consent to make payment</div>
</div>
<div style="display: flex; flex-direction: row;cursor: pointer;" onclick="ph_payment_info('.$res['Id'].', '.$res['gh_amount'].', '.$res['Type_c'].', '.$res['gh_id'].')" class="c_of_pay"><div><img src="Images/to_ok.png"></div>
<div style="margin-left: 10px; line-height: 2;">I completed this payment</div>
</div>
<div style="display: flex; flex-direction: row; margin: 10px 0px; cursor: pointer;"><div><img src="Images/to_block.png"></div>
<div style="margin-left: 10px; line-height: 2;">I refuse to make money transfer
<div style="line-height: 1;padding: 13px;box-sizing: border-box;margin-top: -20px;font-size: 13px;color: grey;">This is a serious decision. You may be blocked. There will be an intermediate page, where you will be asked about the reason. And it might be a valid one.:-))Check with your sponsor or Guider if you have a problem before you click on.</div>
</div>
</div>
</div>';
}
else
{
	$ph_order .= '<div align="center" class="ph_o_c" style="display: none;"><div  class="ph_order_confirm">
<div style="display: flex; flex-direction: row; margin: 10px 0px; cursor: pointer;"><div><img src="Images/to_play.png"></div>
<div style="margin-left: 10px; line-height: 2;">I consent to make payment</div>
</div>
<div style="display: flex; flex-direction: row;cursor: pointer;" onclick="ph_payment_info('.$res['Id'].', '.$res['gh_amount'].', '.$res['Type_c'].', '.$res['gh_id'].')" class="c_of_pay"><div><img src="Images/to_ok.png"></div>
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
}}?>

<?php
mysqli_close($con);

echo $ph_order ."|*|". $req;

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