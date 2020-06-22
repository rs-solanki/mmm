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

mysqli_select_db($con,"ajax_demo");
// $sql="SELECT * FROM  ph WHERE PH_id = '".$q."'";
$select2 = "SELECT * FROM gh WHERE Id = '$q' ORDER BY GH_id, Id;";
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
 $payment_status = getGhPaymentStatus2($res2['Id'], "GH");

 $cls_style="";
 if ($payment_status=="PAID" && $res2['Status']=='Processed')
    $cls_style='background:linear-gradient(to bottom,rgba(255,255,255,1) 0%,rgba(241,241,241,1) 43%,rgba(225,225,225,1) 56%,rgba(246,246,246,1) 100%);';


$req = '<div class="gh_req" style="display: block;'.$cls_style.'">
<a href="javascript:void(0)">
<div class="rtitle_2"><span>Request to Get help Z'.$res2['GH_id'].' </span></div>
</a>
<div class="req_text" align="left">
<a href="javascript:void(0)" style="text-decoration: none; color: black; line-height: 13px;font-size: 11px;">
Participant:'.$res2['Participant'].' <br>Amount:'.$res2['Amount'].''.$res2['Select_currency'].'<br>Balance: '.$res2['Balance'].''.$res2['Select_currency'].' <br>
Date: '.$res2['GH_date'].'<br>Status:<span class="status_gh">'.$res2['Status'].'</span><br><br></a>';

//$feedback_status = getGHFeedbackStatus($res2['GH_id']);
    
    $req .= '<span class="open_LOH_status" style="font-size: 11px;color: grey;"></span>
 <a style="padding: 2px 6px 1px;background: #fff;border: 1px solid #999;border-radius: 6px;cursor: pointer;font-size: 10px;text-decoration: none;color: #0645AD;float:right" href="javascript:void(0)" class="open_gh_req_del" >Details &gt;&gt;</a>';

$req .= '</div>    
</div>';
} 
?>

<?php
$block_the_id="NO";
$select_1 = "SELECT * FROM gh WHERE Participant = '$user_name' AND (Status='Process' OR Status='Processed') ORDER BY record_type DESC;";
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
    if ($remain_block_time<="0")
    {
        $payment_status_img="Images/cancal.png";
        $block_the_id="YES";
        blockedByApp($user_name);
    }            
 
$ph_order = '<div class="gh_order" style="display: block; margin: 11px 0px 0px 0px;">';
if ($res_1['payment_status']=='Confirm' || $block_the_id=="YES")
{
  $ph_order .= '<div class="number">
<a  style="text-decoration: none; color: black;"><img src="'.$payment_status_img.'" alt="" width="40%;">
<span class="num">Number:</span><span class="numba">R'.$res_1['GH_id'].'</span>
</a>
</div>';
} 
else 
{
  $ph_order .= '<div class="number gh_number">
<a href="javascript:void(0)" style="text-decoration: none; color: black;"><img src="'.$payment_status_img.'" alt="" width="40%;">
<span class="num">Number:</span><span class="numba">R'.$res_1['GH_id'].'</span><span style=" position: absolute;top: 0px; right: 100px;font-size: 13px;" class="gh_timer">Time to finish remains :<br>
<span style="color: red;font-weight: 700;padding-left: 40px;">'.$remain_block_time.' hours</span></span>
</a>
</div>';
}
$order_type="GH";
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
<span class="datenum"></span></a>
<a href="javascript:void(0)" style="font-size: 10px; text-decoration: none;color: black;">Confirmation: 
<img src="Images/png.png" alt=""></a>                         
</div>
<div class="cond">
<span class="name">You</span>
<span class="bank">'.$res_1['Select_currency'].'</span>
</div>
<div class="condprintimg">
<img src="Images/printout.png" class="">
</div>
</div>
<a href="javascript:void(0)" class="msg_gh_box" onclick="fillGhMsgInfo('.$res_1['phid'].', '.$res_1['GH_id'].');" style="text-decoration: none; color: black;">Messages: 0</a>
<a href="javascript:void(0)" class="open_gh_details" onclick="gh_order_det('.$res_1['GH_id'].', '.$order_type.', '.$res_1['Id'].')">Details &gt;&gt;</a>
</div>';

if ($res_1['payment_status']=='Confirm' || $block_the_id=="YES")
{
  $ph_order .= '<div align="center"  style="display: none;"><div onclick="return GhOrderConfimr('.$res_1['Id'].', '.$res_1['phid'].');"  class="gh_order_confirm">
<div style="display: flex; flex-direction: row; margin: 10px 0px; cursor: pointer;" class="gh_confirm_pop"><div><img src="Images/to_play.png"></div>
<div style="margin-left: 10px; line-height: 2;">Confirm funds reception</div>
</div>';  

}
else
{
  $ph_order .= '<div align="center" class="gh_o_c" style="display: none;"><div onclick="return GhOrderConfimr('.$res_1['Id'].', '.$res_1['phid'].');"  class="gh_order_confirm">
<div style="display: flex; flex-direction: row; margin: 10px 0px; cursor: pointer;" class="gh_confirm_pop"><div><img src="Images/to_play.png"></div>
<div style="margin-left: 10px; line-height: 2;">Confirm funds reception</div>
</div>';  

}
$ph_order .= '</div></div>';
}} 
?>


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