<?php
include('Include/conn.php');
include('Include/user_details.php');
include('Include/Account Details.php');
include('function/function.php');
include('function/function_2.php');

if(!isset($_SESSION['username'])){
    header('location:/3/Login.php');
}

if($user_status=="Block")
  header('location:/dash/Soppurt.php');      


$arr_x = availableWithdrawalInfo();
$withdrawal_reg = $arr_x['reg_amt'];
$withdrawal_growth = $arr_x['growth_amt'];
$withdrawal_principal = $arr_x['principal_amt'];
$withdrawal_bonus = $arr_x['bonus_amt'];
$withdrawal_total = (float)$withdrawal_reg + (float)$withdrawal_growth + (float)$withdrawal_principal + (float)$withdrawal_bonus;
// print_r($arr_x);exit();
?>


<!DOCTYPE html>

<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="Css/dash.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="Js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="Js/ph-gh.js"></script>
    <script type="text/javascript" src="Js/ph_order_det.js"></script>
    <script type="text/javascript" src="Js/one.js"></script>

	<script type="text/javascript">


    function show_confirm_payment_image(payment_image_path)
    {//alert (payment_image_path);
        if(payment_image_path!="")
            $('#confirm_img_src_id').attr('src', payment_image_path);
    }
    function phPaymentRemarks()
    {
        $txt = $("#ph_payment_remarks").val();
        $("#ph_payment_remarks_rewrite").text($txt);
        //alert ($txt);
    }

    function fillPhMsgInfo(phid, orderid)
    {
        //alert (phid +" "+ orderid);
        $("#ph_msg_order_id").text("R"+orderid);
        $("#input_ph_msg_phid").val(phid);
        $("#input_ph_msg_orderid").val(orderid); //
        fillPhInboxInfo(phid); 
    }
    function fillPhInboxInfo(str) {
        if (str == "") {
            //document.getElementById("txtHint").innerHTML = "";
            return;
        } else { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {//alert (this.responseText);
                    document.getElementById("ph_message_inbox").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","Include/global_dash_ajax.php?ph_inbox="+str,true);
            xmlhttp.send();
        }
    }

    function fillGhMsgInfo(phid, ghid)
    {
        //alert (phid +" "+ orderid);
        $("#gh_msg_order_id").text("R"+ghid);
        $("#input_gh_msg_phid").val(phid);
        $("#input_gh_msg_orderid").val(ghid);
        fillGhInboxInfo(phid); 
    }
    
    function fillGhInboxInfo(str) {
        if (str == "") {
            //document.getElementById("txtHint").innerHTML = "";
            return;
        } else { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {//alert (this.responseText);
                    document.getElementById("gh_message_inbox").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","Include/global_dash_ajax.php?gh_inbox="+str,true);
            xmlhttp.send();
        }
    }

    function feedback_hid_fill(gh_id, user_id, amt)
    {
        //alert (gh_id +" "+user_id+" "+amt);
        $("#input_feedback_amount").val(amt);
        $("#input_feedback_gh_id").val(gh_id);
        $("#input_feedback_user_id").val(user_id);
    }

    function ph_payment_info(id, amt, ctype, gh_id)
    {
        //alert (id +" "+ amt +" "+ctype +" "+gh_id);
        var txt = amt +" "+ ctype;
        $("#ph_payment_value").text(txt);
        $("#ph_payment_value2").text(txt);
        $("#input_ph_payment_value").val(amt);
        $("#input_ph_payment_id").val(id);
        $("#input_ph_payment_ctype").val(ctype);
        fillReceiverInfo(gh_id);
    }

    function GhOrderConfimr(id, phid)
    {
        $("#input_gh_payment_confirm_id").val(id);
        $("#input_ph_payment_confirm_id").val(phid);
        //alert (id +"  "+ phid); return false;
    }
	  
function fillReceiverInfo(str) {
    if (str == "") {
        //document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {//alert (this.responseText);
                var arr = this.responseText.split("|*|");
                //alert (arr);
                document.getElementById("ph_payment_currency").innerHTML = "Currency :" + arr[3];
                // document.getElementById("ph_payment_sender").innerHTML = "Account Name: " + arr[1];
                document.getElementById("ph_payment_ifsc").innerHTML = "Currency Address: " + arr[5];
                document.getElementById("ph_payment_bank").innerHTML = "Bank name: " + arr[4];
                document.getElementById("ph_account_name").innerHTML = "Account Name: " + arr[2];
                // document.getElementById("ph_payment_lname").innerHTML = "Last name: " + arr[6];                
                document.getElementById("ph_payment_fname").innerHTML = "First name: " + arr[7];

                document.getElementById("ph_payment_currency2").innerHTML = "Currency :" + arr[3];
                // document.getElementById("ph_payment_sender2").innerHTML = "Account Name: " + arr[1];
                document.getElementById("ph_payment_ifsc2").innerHTML = "Currency Address: " + arr[5];
                document.getElementById("ph_payment_bank2").innerHTML = "Bank name: " + arr[4];
                document.getElementById("ph_account_name2").innerHTML = "Account number: " + arr[2];
                // document.getElementById("ph_payment_lname2").innerHTML = "Last name: " + arr[6];                
                document.getElementById("ph_payment_fname2").innerHTML = "First name: " + arr[7];
            }
        };
        xmlhttp.open("GET","Include/global_dash_ajax.php?gh_id="+str,true);
        xmlhttp.send();
    }
}

function showGhDetailPopup(str)
{
    //alert (str);
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;

    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {//alert (this.responseText);
                var arr = this.responseText.split("|*|");
                document.getElementById("gh_detail_request_pop").innerHTML = arr[1];
                document.getElementById("gh_detail_order_pop").innerHTML = arr[0];

                document.getElementsByClassName("gh_req_details").style.display = "block";
                document.getElementsByClassName("con_pop").style.display = "block";
                // document.getElementById("window_mask").style.display = "block";
            }
        };
        xmlhttp.open("GET","Include/gh_request_detail_popup.php?q="+str,true);
        xmlhttp.send();
    }
}
function showUser(str) { //alert (123);
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;

    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {//alert (this.responseText);
                var arr = this.responseText.split("|*|");
                document.getElementById("txtHint").innerHTML = arr[1];
                document.getElementById("ph_order_detail_id").innerHTML = arr[0];

                document.getElementsByClassName("ph_req_details").style.display = "block";
                document.getElementsByClassName("con_pop").style.display = "block";
                // document.getElementById("window_mask").style.display = "block";
            }
        };
        xmlhttp.open("GET","Include/gh_rq_det.php?q="+str,true);
        xmlhttp.send();
    }
}

function showPhGhInfoById(str) { //alert (str); return false;
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;

    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {//alert (this.responseText);
                var arr = this.responseText.split("|*|");
                //document.getElementById("txtHint").innerHTML = arr[1];
                document.getElementById("show_ph_gh_info").innerHTML = arr[0];

                document.getElementById("show_ph_gh_info").style.display = "block";
				
                document.getElementById("ph-gh-order-req").style.display = "none";
            }
        };
        xmlhttp.open("GET","Include/show_ph_gh_info.php?q="+str,true);
        xmlhttp.send();
    }
}

	</script>
    
</head>

<body>

<div class="mask"></div>	
<?php include('Include/header.php'); ?>
<div class="tpbg"></div>
<!-- Container -->
<div class="body">
 <!-- Warring Msg -->
    <div align="center">
        <div class="wrn_msg">
            <p class="p1"><b style="color: red;">WARNING! THIS IS A COMMUNITY OF MUTUAL FINANCIAL HELP!</b><span> Participate only with spare money. Do not contribute all the money you have.</span></p>
        </div>	
    </div>
 <!-- Banners -->
    <div class="banners" align="center">
        <div><img src="Images/30.jpg" width="75.5%;" style="margin-bottom: 10px;"></div>	
        <div><img src="Images/5.jpg" width="75.5%;"></div>
    </div>

    <!-- Ph and Gh Btns -->
    <div  align="center" style=" display: flex;flex-direction: row;margin: 20px 170px;">

        <!-- PH open -->

        <div style="width: 500px;height: auto;     background: linear-gradient(to bottom,#9dea3b 1%,#b4f864ad 45%,#9dea3b 100%);font-family: Arial,Helvetica,sans-serif;box-sizing: border-box;border-radius: 15px;box-shadow: 1px 1px 3px 0px black;padding: 7px 0px; cursor: pointer;" class="o_ph" onclick="openPh();">
            <p style="text-align: left;padding: 0px 0px 10px 60px;margin: 8px 0px 0px 0px;    text-shadow: 1px 1px 6px white;
                box-sizing: border-box;font-size: 27px;color: #2750a7;font-weight: 700;">I Want to Provide Help
            </p> 
            <div align="left" style="    padding: 0px 60px;box-sizing: border-box;">
                <span style="    display: inline-block;font-size: 11.5px;color: #2750a7;font-weight: 600;">"Acquire" Marvo ( Make a Contribution )
                </span> 
            </div>
        </div>

        <!-- GH open -->
        <div style="width: 500px;height: auto;    background: linear-gradient(to bottom,#f9e8ac 0%,#f5b902 60%,#f8e39a 100%);margin-left: 40px;font-family: Arial,Helvetica,sans-serif;box-sizing: border-box;border-radius: 15px;box-shadow: 1px 1px 3px 0px black;cursor: pointer; padding: 7px 0px;" class="o_gh">
            <p style="text-align: left;padding: 0px 0px 10px 60px;margin: 8px 0px 0px 0px;    text-shadow: 1px 1px 6px white;
                box-sizing: border-box;font-size: 27px;color: #2750a7;font-weight: 700;">Get Help
            </p>  
            <div align="left" style="    padding: 0px 60px;box-sizing: border-box;">
                <span style="    display: inline-block;font-size: 11.5px;color: #2750a7;font-weight: 600;">"Cash in" Your Marvo ( Make a Withdrawal )
                </span>   
            </div>  
        </div>

    </div>


    <!-- Manager Panel -->
    <?php 
 if($Position == "Guider"){
?>
    <div class="Manager_container" align="center">


        Participants : <select onchange="showPhGhInfoById(this.value)" id="paticipants_name" id="all_paty" style="width: 400px;padding: 3px;">
                            <option value="<?php echo $user_email; ?>" selected="selected"><?php echo $user_name; ?>  (<?php echo $user_email; ?>)</option>
                            <option value="All">All</option>

                                <?php 
                                    $reg = "SELECT * FROM `registration` WHERE Invite_email = '$user_email';";
                                    $q = mysqli_query($con,$reg);
                                    while ($run = mysqli_fetch_array($q)) {
                                ?>   
                            <option value="<?php echo $run['E_mail']; ?>"><?php echo $run['User_name']; ?>    (<?php echo $run['E_mail']; ?>)</option>   
                                <?php } ?>  
                        </select> <a href="#" class="refresh_btn"><span></span> </a>
    </div>
<?php } else {

} ?>
    <!-- End Manager Panel -->


	<div class="ph-gh-order-req" align="left" id="show_ph_gh_info" style="display:none;">
		
	</div>
	

    <!-- Ph/Gh Order and ph/gh request -->
    <div class="ph-gh-order-req" id="ph-gh-order-req"  align="center">
    <!-- PH GH Order -->





        <div class="ph_gh_order" align="left">

        <!-- PH ORDER -->
        <?php
        $block_the_id="NO";
        $select = "SELECT * FROM ph WHERE Participant = '$user_name'  AND Bonus = 'MARVO 30%' AND (Status='Process' OR Status='Processed' OR Status='Processing') ORDER BY Id DESC;";
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
                $block_the_id="YES";
                blockedByApp($user_name);
                echo "rs";
            }            
         ?>

<div class="ph_order" style="margin: 10px 0px 0px 0px;">

<?php if ($res['payment_status']=='Confirm' || $block_the_id=="YES") { ?>
<div class="number">
<a  style="text-decoration: none; color: black;"><img src="<?php echo $payment_img_status; ?>" alt="" class="ph_order_img" width="40%;">
<span class="num">Number:</span><span class="numba">R<?php echo $res['Order_id']; ?></span>
</a>
</div>
<?php } else { ?>
<?php if($res['Status'] == "Processing"){ $dis = "oppp";}else{ $dis = "ph_number";} ?>    
<div class="number <?php echo $dis; ?>">
<a href="javascript:void(0)" style="text-decoration: none; color: black;"><img src="<?php echo $payment_img_status; ?>" alt="" class="ph_order_img" width="40%;">
<span class="num">Number:</span><span class="numba">R<?php echo $res['Order_id']; ?></span>

    <?php if ($payment_img_status == "Images/play.png"){ ?>
<span style=" position: absolute;top: 0px; right: 100px;font-size: 13px;" class="gh_timer">Time to finish remains :<br>
<span style="color: red;font-weight: 700;padding-left: 40px;"><?php echo $remain_block_time; ?> hours</span></span>
    <?php } ?>

</a>
</div>
<?php } ?>
<!-- 020819 end -->



<div class="order_content">
<a href="javascript:void(0)" style="text-decoration: none; color: black;">
<span class="confirm">Confirmed by CRO (Request to   Provide help Z<?php echo $res['PH_id']; ?>)</span>
<div class="cona">
<span class="datetxt">Date of creating:</span>
<span class="datenum"><?php echo $res['PH_date']; ?></span>
</div>
<div class="conb">
<span class="name"><?php echo "You</br>";//$user_name; ?></span>
<span class="bank"><?php echo $res['Type_c']; ?></span>
</div>
</a>
<div class="conc">
<a href="javascript:void(0)" style="text-decoration: none; color: black;">
<span class="datetxt"><i class="ileft">&gt;</i><?php echo $res['gh_amount']; ?><?php echo $res['Type_c']; ?><i class="iright">&gt;</i></span>
<span class="datenum"></span></a>
    <a href="<?php echo $res['payment_image']; ?>" style="font-size: 10px; text-decoration: none;color: black;"  class="cls_confirm" target="self">Confirmation: 
    <img src="Images/png.png" alt=""></a>                     
</div>
<div class="cond">
<span class="name"><?php echo $gh_name; ?></span>
<span class="bank"><?php echo $res['Type_c']; ?></span>
</div>
<div class="condprintimg">
<img src="Images/printout.png" class="">
</div>
</div>
<a href="javascript:void(0)" class="msg_ph_box" onclick="fillPhMsgInfo(<?php echo $res['Id']; ?>, <?php echo $res['Order_id']; ?>);" style="text-decoration: none; color: black;">Messages:0</a>
<a href="javascript:void(0)" class="open_ph_details" id="<?php echo $res['PH_id']; ?>" onclick="ph_order_det(this.id, 'PH', <?php echo $res['Id']; ?>)">Details &gt;&gt;</a>
</div>

<!-- 020819 start -->
<?php if ($res['payment_status']=='Confirm' || $block_the_id=="YES") { ?>    
<div align="center" style="display: none;"><div  class="ph_order_confirm">
<div style="display: flex; flex-direction: row; margin: 10px 0px; cursor: pointer;"><div><img src="Images/to_play.png"></div>
<div style="margin-left: 10px; line-height: 2;">I consent to make payment</div>
</div>
<div style="display: flex; flex-direction: row;cursor: pointer;" onclick="ph_payment_info(<?php echo $res['Id']; ?>, <?php echo $res['gh_amount']; ?>, '<?php echo $res['Type_c']; ?>', '<?php echo $res['gh_id']; ?>')" class="c_of_pay"><div><img src="Images/to_ok.png"></div>
<div style="margin-left: 10px; line-height: 2;">I completed this payment</div>
</div>
<div style="display: flex; flex-direction: row; margin: 10px 0px; cursor: pointer;"><div><img src="Images/to_block.png"></div>
<div style="margin-left: 10px; line-height: 2;">I refuse to make money transfer
<div style="line-height: 1;padding: 13px;box-sizing: border-box;margin-top: -20px;font-size: 13px;color: grey;">This is a serious decision. You may be blocked. There will be an intermediate page, where you will be asked about the reason. And it might be a valid one.:-))Check with your sponsor or Guider if you have a problem before you click on.</div>
</div>
</div>
</div>
<?php } else {?>
<div align="center" class="ph_o_c" style="display: none;"><div  class="ph_order_confirm">
<div style="display: flex; flex-direction: row; margin: 10px 0px; cursor: pointer;"><div><img src="Images/to_play.png"></div>
<div style="margin-left: 10px; line-height: 2;">I consent to make payment</div>
</div>
<div style="display: flex; flex-direction: row;cursor: pointer;" onclick="ph_payment_info(<?php echo $res['Id']; ?>, <?php echo $res['gh_amount']; ?>, '<?php echo $res['Type_c']; ?>', '<?php echo $res['gh_id']; ?>')" class="c_of_pay"><div><img src="Images/to_ok.png"></div>
<div style="margin-left: 10px; line-height: 2;">I completed this payment</div>
</div>
<div style="display: flex; flex-direction: row; margin: 10px 0px; cursor: pointer;"><div><img src="Images/to_block.png"></div>
<div style="margin-left: 10px; line-height: 2;">I refuse to make money transfer
<div style="line-height: 1;padding: 13px;box-sizing: border-box;margin-top: -20px;font-size: 13px;color: grey;">This is a serious decision. You may be blocked. There will be an intermediate page, where you will be asked about the reason. And it might be a valid one.:-))Check with your sponsor or Guider if you have a problem before you click on.</div>
</div>
</div>
</div>
<?php } ?>
<!-- 020819 start -->

</div>
<?php }} ?>


<!-- GH ORDER -->

<?php
$block_the_id="NO";
$select_1 = "SELECT * FROM gh WHERE Participant = '$user_name' AND (Status='Process' OR Status='Processed') ORDER BY Id DESC;";
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
        //$block_the_id="YES";
        //blockedByApp($user_name);
        //echo "rs";
    }
 ?>


<div class="gh_order" style="display: block; margin: 11px 0px 0px 0px;">

<!-- 020819 start -->
<?php if ($res_1['payment_status']=='Confirm' || $block_the_id=="YES") { ?>
<div class="number">
<a  style="text-decoration: none; color: black;"><img src="<?php echo $payment_status_img; ?>" alt="" width="40%;">
<span class="num">Number:</span><span class="numba">R<?php echo $res_1['GH_id']; ?></span>
</a>
</div>
<?php } else { ?>
<div class="number gh_number">
<a href="javascript:void(0)" style="text-decoration: none; color: black;"><img src="<?php echo $payment_status_img; ?>" alt="" width="40%;">
<span class="num">Number:</span><span class="numba">R<?php echo $res_1['GH_id']; ?></span>

<?php if ($payment_status_img == "Images/play.png"){ ?>
<span style=" position: absolute;top: 0px; right: 100px;font-size: 13px;" class="gh_timer">Time to finish remains :<br>
<span style="color: red;font-weight: 700;padding-left: 40px;"><?php echo $remain_block_time; ?> hours</span></span>
<?php } ?>

</a>
</div>
<?php } ?>
<!-- 020819 end -->


<div class="order_content">
<a href="javascript:void(0)" style="text-decoration: none; color: black;">
<span class="confirm">Confirmed by CRO (Request to   Get help Z<?php echo $res_1['GH_id']; ?>)</span>
<div class="cona">
<span class="datetxt">Date of creating:</span>
<span class="datenum"><?php echo $res_1['GH_date']; ?></span>
</div>
<div class="conb">
<span class="name"><?php echo $ph_name; ?></span>
<span class="bank"><?php echo $res_1['Select_currency']; ?></span>
</div>
</a>
<div class="conc">
<a href="javascript:void(0)" style="text-decoration: none; color: black;">
<span class="datetxt"><i class="ileft">&gt;</i><?php echo $res_1['ph_amount']; ?><?php echo $res_1['Select_currency']; ?><i class="iright">&gt;</i></span>
<span class="datenum"></span></a>
<?php
$q = "SELECT * FROM ph WHERE Participant = '$ph_name' AND record_type = 'Main'";
$run = mysqli_query($con,$q);
$re = mysqli_fetch_array($run);

?>
<a href="<?php echo $re['payment_image'];?>" style="font-size: 10px; text-decoration: none;color: black;" target="self">Confirmation: 
<img src="Images/png.png" alt=""></a>                       
</div>
<div class="cond">
<span class="name"><?php echo "You";//$ph_name; ?></span>
<span class="bank"><?php echo $res_1['Select_currency']; ?></span>
</div>
<div class="condprintimg">
<img src="Images/printout.png" class="">
</div>
</div>
<a href="javascript:void(0)" class="msg_gh_box" onclick="fillGhMsgInfo(<?php echo $res_1['phid']; ?>, <?php echo $res_1['GH_id']; ?>);" style="text-decoration: none; color: black;">Messages: 0</a>
<a href="javascript:void(0)" class="open_gh_details" onclick="gh_order_det(<?php echo $res_1['GH_id']; ?>, 'GH', <?php echo $res_1['Id']; ?>)">Details &gt;&gt;</a>
</div>

<!-- 020819 start -->
<?php if ($res_1['payment_status']=='Confirm' || $block_the_id=="YES") { ?>
<div align="center"  style="display: none;"><div onclick="return GhOrderConfimr(<?php echo $res_1['Id']; ?>, <?php echo $res_1['phid']; ?>);"  class="gh_order_confirm">
<div style="display: flex; flex-direction: row; margin: 10px 0px; cursor: pointer;" class="gh_confirm_pop"><div><img src="Images/okk.png"></div>
<div style="margin-left: 10px; line-height: 2;">Confirm funds reception</div>
</div>  
<!-- <div style="display: flex; flex-direction: row;cursor: pointer;"><div><img src="Images/to_ok.png"></div>
<div style="margin-left: 10px; line-height: 2;">Extend payment expectation by 24 hrs</div>
</div> -->
<?php } else { ?>
<div align="center" class="gh_o_c" style="display: none;"><div onclick="return GhOrderConfimr(<?php echo $res_1['Id']; ?>, <?php echo $res_1['phid']; ?>);"  class="gh_order_confirm">
<div style="display: flex; flex-direction: row; margin: 10px 0px; cursor: pointer;" class="gh_confirm_pop"><div><img src="Images/okk.png"></div>
<div style="margin-left: 10px; line-height: 2;">Confirm funds reception</div>
</div>  
<!-- <div style="display: flex; flex-direction: row;cursor: pointer;"><div><img src="Images/to_ok.png"></div>
<div style="margin-left: 10px; line-height: 2;">Extend payment expectation by 24 hrs</div>
</div> -->
<?php } ?>
<!-- 020819 end -->

</div></div>

<?php }} ?>

<!-- Pagination -->
<div style="display: flex; flex-direction: row; margin: 10px 0px;">
<div style="width: 60%;height: 30px;padding: 10px; box-sizing: border-box;" class="pagination">
<ul style="margin: 0px; padding: 0px;">
<li>
<select style="margin: 2px 0 0 0;width: 40px;height: 20px;">
<option value="10">10</option>
<option value="20">20</option>	
<option value="30">30</option>
<option value="40">40</option>
</select>	
</li>	
<li>
<a class="pleftfull" href=""><span></span></a>
<a class="pleft" href=""><span></span></a>	
</li>
<li>Page <input type="text" value="1" style="width: 30px;"> of 1</li>
<li class="last">
<a class="prightfull" href=""><span></span></a>
<a class="pright" href=""><span></span></a>	
</li>
</ul>
	
</div>

<div style="width: 35%; height:30px; padding: 10px; box-sizing: border-box;">
<a href="javascript:void(0)" class="yellow" id="btnLargeTicket"><span>Hide accomplished/cancelled orders</span></a>	
</div>
</div>




</div>

<!-- PH GH Request -->
<div class="ph_gh_req">
<!-- PH REQUEST	 -->
<?php
$select = "SELECT Id, PH_id, Amount, gh_amount, gh_id, Type_c, PH_date, Participant, Participant_email, Status, Balance FROM ph WHERE Participant = '$user_name' AND Bonus = 'MARVO 30%' ORDER BY Id DESC;";
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

 ?>

<div class="ph_req" style="margin: 10px; <?php echo $cls_style; ?>">
<a href="javascript:void(0)">
<div class="rtitle"><span>Request to provide help Z<?php echo $res['PH_id']; ?> </span></div>
</a>
<div class="req_text" align="left">
<a href="javascript:void(0)" style="text-decoration: none; color: black; line-height: 13px;font-size: 11px;">
Participant:<?php echo $res['Participant']; ?> <br>
Amount:<?php echo $res['Amount']; ?><?php echo $res['Type_c']; ?><br>
Balance: <?php echo $res['Balance']; ?><?php echo $res['Type_c']; ?> <br>
Date: <?php echo $res['PH_date']; ?><br>
Status:<span class="status"><?php echo $res['Status']; ?></span><br>
</a>
 <a style="" href="javascript:void(0)" class="open_ph_req_del" id="<?php echo $res['Id'];?>" onclick="showUser(this.id)">Details &gt;&gt;</a>
</div>	
</div>

<?php } ?>

<?php
$select2 = "SELECT * FROM gh WHERE Participant = '$user_name' ORDER BY  Id DESC;";
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
 ?>

<div class="gh_req" style="display: block;<?php echo $cls_style; ?>; margin: 10px;">
<a href="javascript:void(0)">
<div class="rtitle_2"><span>Request to Get help Z<?php echo $res2['GH_id']; ?> </span></div>
</a>
<div class="req_text" align="left">
<a href="javascript:void(0)" style="text-decoration: none; color: black; line-height: 13px;font-size: 11px;">
Participant:<?php echo $res2['Participant']; ?> <br>Amount:<?php echo $res2['Amount']; ?><?php echo $res2['Select_currency']; ?><br>Balance: <?php echo $res2['Balance']; ?><?php echo $res2['Select_currency']; ?> <br>
Date: <?php echo $res2['GH_date']; ?><br>Status:<span class="status_gh"><?php echo $res2['Status']; ?></span><br><br></a>

<?php 
    //$feedback_status = getGHFeedbackStatus($res2['GH_id']);
    if ($payment_status=="PAID")//if ($feedback_status=="reject")
    {
    
?>

<a style="" onclick="return feedback_hid_fill(<?php echo $res2['GH_id']; ?>, <?php echo $user_id; ?>, <?php echo $res2['Amount']; ?>);" href="javascript:void(0)" class="open_LOH">Write a Letter of happiness</a>
<?php } ?>

<span class="open_LOH_status" style="font-size: 11px;color: grey;"></span>
 <a style="" href="javascript:void(0)" class="open_gh_req_del" onclick="showGhDetailPopup(<?php echo $res2['Id']; ?>);">Details &gt;&gt;</a>
</div>		
</div>
<?php } ?> 

<!-- Pagination -->
<div style="display: ; flex-direction: row; margin: 10px 0px;">
<div style="width: 100%;height: 30px;padding: 10px; box-sizing: border-box;margin-left: 20px;" class="pagination">
<ul style="margin: 0px; padding: 0px;">
<li>
<select style="margin: 2px 0 0 0;width: 40px;height: 20px;">
<option value="10">10</option>
<option value="20">20</option>	
<option value="30">30</option>
<option value="40">40</option>
</select>	
</li>	
<li>
<a class="pleftfull" href=""><span></span></a>
<a class="pleft" href=""><span></span></a>	
</li>
<li>Page <input type="text" value="1" style="width: 30px;"> of 1</li>
<li class="last">
<a class="prightfull" href=""><span></span></a>
<a class="pright" href=""><span></span></a>	
</li>
</ul>
	
</div>

<div style="width: 100%; height:30px; padding: 10px; box-sizing: border-box; margin-top: 20px; margin-left: 30px;" align="left">
<a href="javascript:void(0)" class="yellow" id="btnLargeTicket"><span>Hide accomplished/cancelled orders</span></a>	
</div>
</div>




</div>
</div>
</div>

<form method="POST" name="ph_gh_con_ord_form" enctype="multipart/form-data">
<!-- PH AND GH COMFIRM  ORDERS -->
<!-- PH CONFIRM ORDER -->
<div class="ph_gh_con_ord_container" style="width: 100%; height: 100%; position: fixed; top: 0;  background: #13121263; z-index: 100000;display: none;" >

<div class="ph_pop ph_con_or" style="display: none; width: 700px;">
<div class="ph_title"><span class="ph_con_or_icon">Confirm Order completion</span></div>	
<div class="ph_content" style="overflow: auto; height: 450px;">
<div style="margin: 10px 0px;">Transaction amount <span style="font-size: 19px;" id="ph_payment_value">0.01 BTC</span></div>

<div class="acount_info" style="width: 100%;height: auto;border: 1px solid grey;border-radius: 10px;padding: 10px;box-sizing: border-box; margin: 10px 0px;">
<span style="    font-size: 14px;font-weight: 600;">To the account</span><br><br>

<!-- 020819 start -->
<span style="font-size: 14px;font-weight: 600;" id="ph_payment_currency"></span><br>
<!-- <span style="font-size: 12.6px;" id="ph_payment_sender"></span><br> -->
<span style="font-size: 12.6px;" id="ph_payment_ifsc"></span><br>
<span style="font-size: 12.6px;" id="ph_payment_bank"></span><br>
<span style="font-size: 12.6px;" id="ph_account_name"></span><br>
<!-- <span style="font-size: 12.6px;" id="ph_payment_lname"></span><br> -->
<span style="font-size: 12.6px;" id="ph_payment_fname"></span><br>
<!--span style="font-size: 12.6px;" id="ph_payment_mname">Middle name:  </span><br-->
<!-- 020819 start -->
</div>

<div style="display: flex;flex-direction: row; padding: 0px 10px;">
<div style="width: 40%;">
<div style="font-size: 13px; font-weight: 700;">Attach scans or screenshots verifying this</div>
<div style="margin: 10px 0px;"><input type="file" name="ph_payment_img" id="ph_payment_img" class="c_img">
<input type="hidden" name="input_ph_payment_id" id="input_ph_payment_id" value="" />
<input type="hidden" name="input_ph_payment_value" id="input_ph_payment_value" value="" /><input type="hidden" name="input_ph_payment_ctype" id="input_ph_payment_ctype" value="" /></div>	
<div style="font-size: 12px; color: grey;">Documentation addition is desired, but not required.
Acceptable file formats are JPG, PNG, GIF (maximum)</div>
</div>

<div style="padding-left: 55px; box-sizing: border-box;">
<div style="font-size: 13px; font-weight: 700; margin: 10px 0px;">Comments o participan are optional</div>
<div>
<textarea name="ph_payment_remarks" style="resize: none;width: 300px;height: 180px;" id="ph_payment_remarks"></textarea>	
</div>	
</div>
</div>

<div style="font-size: 13px; margin: 10px 0px;">Dear Sender !<br><br>
Keep in mind that interbank transfers can take up to 5 working dyas, so do not worry - wait quietly even if there is no confimation for long. You may contact the recipient and help him to organize his Account-maybe he just registered and does not know what to do. You may also write to support if he will not respond (anything may occur:-)). They will find him! :-))<br><br>
Remember : You won't lose your money under any circumstances. In any case they will be credited to you (well, if you really sent them :-)). Nothing o worry about 
especilly since earnings/credit, we remind you again, begin to flow directly to you from the date of your provide help offer.(They are coming aleady!! :-)) so everything is fine. In short, everything is OK. We care a lot! :-)).</div>


<div class="ph_btns">
<a href="#" class="ph_can ph_can_btn con_ph_can_btn"><span class="ph_can_icon">Cancal</span></a>	
<a href="#" class="ph_next ph_next_btn con_ph_next_btn" onclick="return phPaymentRemarks();"><span class="ph_next_icon">Next</span></a>
</div>
</div>
</div>


<div class="ph_pop ph_con_or_1" style="display: none; width: 700px;">
<div class="ph_title"><span class="ph_con_or_icon">Confirm Order completion</span></div>	
<div class="ph_content" style="overflow: auto; height: 450px;">
	<div></div>
<div style="margin: 10px 0px;">Transaction amount <span style="font-size: 19px;" id="ph_payment_value2">0.01 BTC</span></div>

<div class="acount_info" style="width: 100%;height: auto;border: 1px solid grey;border-radius: 10px;padding: 10px;box-sizing: border-box; margin: 10px 0px;">
<span style="    font-size: 14px;font-weight: 600;">To the account</span><br><br>

<span style="font-size: 14px;font-weight: 600;" id="ph_payment_currency2"></span><br>
<!-- <span style="font-size: 12.6px;" id="ph_payment_sender2"></span><br> -->
<span style="font-size: 12.6px;" id="ph_payment_ifsc2"></span><br>
<span style="font-size: 12.6px;" id="ph_payment_bank2"></span><br>
<span style="font-size: 12.6px;" id="ph_account_name2"></span><br>
<!-- <span style="font-size: 12.6px;" id="ph_payment_lname2"></span><br> -->
<span style="font-size: 12.6px;" id="ph_payment_fname2"></span><br>
</div>


<div style="font-size: 13px; margin: 10px 0px;">Dear Sender !<br><br>
<p id="ph_payment_remarks_rewrite"><b></b></p><br> 
Keep in mind that interbank transfers can take up to 5 working dyas, so do not worry - wait quietly even if there is no confimation for long. You may contact the recipient and help him to organize his Account-maybe he just registered and does not know what to do. You may also write to support if he will not respond (anything may occur:-)). They will find him! :-))<br><br>
Remember : You won't lose your money under any circumstances. In any case they will be credited to you (well, if you really sent them :-)). Nothing o worry about 
especilly since earnings/credit, we remind you again, begin to flow directly to you from the date of your provide help offer.(They are coming aleady!! :-)) so everything is fine. In short, everything is OK. We care a lot! :-)).</div>


<div class="ph_btns">
<a href="#" class="ph_can ph_can_btn con_ph_can_btn_1"><span class="ph_can_icon">Cancal</span></a>	
<!--a href="#" class="ph_next ph_next_btn con_ph_next_btn_1"><span class="ph_next_icon">Next</span></a-->
<a href="#" class="ph_next"><span class="ph_next_icon"><input type="submit" name="ph_payment_submit" value="OK" style="border: none; background: none;"></span></a>
</div>
</div>
</div>



<!-- GH CONFIRM ORDER -->
<div class="ph_pop gh_con_or" style="display: none; width: 290px;">
<form method="POST" action="" name="ph_gh_payment_confirm_form">
<div class="ph_title"><span class="ph_title_icon">Comfirmation</span></div>	
<div class="ph_content">
<div> <img src="Images/messager_info.gif" style="margin: 0px 3px 0px 0px;"/>Confirm funds reception</div>
<div class="ph_btns" align="center"><input name="input_gh_payment_confirm_id" id="input_gh_payment_confirm_id" value="" type="hidden" /><input name="input_ph_payment_confirm_id" id="input_ph_payment_confirm_id" value="" type="hidden" />
<!--a href="#" class="ph_next gh_con_ok_btn"><span class="ph_next_icon">Ok</span></a-->
<a href="#" class="ph_next"><span class="ph_next_icon"><input type="submit" name="gh_payment_confirm_submit" value="OK" style="border: none; background: none;"></span></a>
<a href="#" class="ph_can gh_con_can_btn"><span class="ph_can_icon">Cancal</span></a>
</div>
</div>

</div>

</div>
<!-- END PH AND GH COMFIRM  ORDERS -->

</form>
<?php ph_gh_payment(); ?>











<!-- POPUP box Start -->
<div class="con_pop" style="display: none;">
<!-- POPUP Boxes -->
<form method="POST" >
<div class="ph_pop ph_pop_1" style="display: none; width: 550px;">
<div class="ph_title"><span class="ph_title_icon">Add Request</span></div>	
<div class="ph_content">
<div class="text">I read the THE WARNING, and I fully understand all the risks. I am making the decision to participate in MMM, being of a sound mind.</div>	
<div class="check" style="margin-top: 20px; margin-bottom: 10px;"><input type="checkbox" name="check" class="checkbox"></div>
<div class="ph_btns">
<a href="#" class="ph_can ph_can_btn"><span class="ph_can_icon">Cancal</span></a>	
<a href="#" class="ph_next ph_next_btn"><span class="ph_next_icon">Next</span></a>
</div>
</div>
</div>	

<!-- Popup 2 -->
<div class="ph_pop ph_pop_2" style="width: 600px; display: none;">
<div class="ph_title"><span class="ph_title_icon">Add request</span></div>	
<div class="ph_content">	
<div style="font-weight: bold; margin-bottom: 10px;" class="text">Currency You want to provide assistance in</div>
<div><select class="select_currency" name="select_currencys" style="border: 2px solid #8E846B;background: #fff;"><option value="BTC">BitCoin(BTC)</option><option value="USD">United State Dollar(USD)</option> </select></div>
<div style="color: #777; margin-left: 20px; margin-top: 10px;">Specify currency which you are ready to use in the system</div>
<div style="font-weight: bold; margin-bottom: 10px; margin-top: 10px;">Select a bank for transferring the assistance to other participants</div>

<div style="width: 550px;height: 200px;overflow: auto;border: solid 1px #ccc;">
        <div style="padding: 10px 0px 0px 10px;"><input type="radio" style="margin: 3px 3px 0px 5px;" name="currency" id="btc_c" checked="checked" disabled="disabled"><label>BitCoin</label></div> 
        <hr width="90%">    
        <div style="padding: 10px 0px 0px 10px;"><input type="radio" style="margin: 3px 3px 0px 5px;" name="currency" id="usd_c"><label>USD</label></div>     
        </div>

<div class="ph_btns">
<a href="#" class="ph_back ph_back_btn_2"><span class="ph_back_icon">Back</span></a>	
<a href="#" class="ph_can ph_can_btn_2"><span class="ph_can_icon">Cancal</span></a>	
<a href="#" class="ph_next ph_next_btn_2"><span class="ph_next_icon">Next</span></a>
</div>
</div>
</div>

<!-- Popup 3 -->
<div class="ph_pop ph_pop_3" style="display: none; width: 680px;">
<div class="ph_title"><span class="ph_title_icon">Add request</span></div>	
<div class="ph_content">	
<div class="text">1.Choose the most convenient method to provide help to another participant ?</div>

<div class="for_btc" style="display:block;"><input type="radio" value="BTC" name="type_c" class="ph_method"> BTC <span>?</span>	
 <input type="radio" value="ETH" name="ETH" disabled=""> ETH <span>?</span>    
 <input type="radio" value="LTC" name="LTC" disabled=""> LTC <span>?</span>
 <input type="radio" value="BCH" name="BCH" disabled=""> BCH <span>?</span>
 </div>

 <div class="for_usd" style="display: none;"> <input type="radio" value="USD" name="type_c" class="ph_method_2"> Dollar(USD) <span>?</span></div>

<div class="text">2.Marvo types ?</div>
<div class="maro"><input type="radio" name="marvo_30" class="marvo_30" value="MARVO 30%"> Marvo 30% ?
<input type="radio" name="" class="marvo_20" disabled="disabled"> Marvo 20%-100% ?
</div>

<div class="text">3.Specify which currency you will use in the system</div>
<div class="for_btc" style="display: block;"><input type="radio" value="BTC" name="" class="ph_method_sys"> BTC <span>?</span>
 <input type="radio" value="ETH" name="ETH" disabled=""> ETH <span>?</span>    
 <input type="radio" value="LTC" name="LTC" disabled=""> LTC <span>?</span>
 <input type="radio" value="BCH" name="BCH" disabled=""> BCH <span>?</span></div>

<div class="for_usd" style="display: none;"><input type="radio" value="USD" name="" class="ph_method_sys_2"> Dollar(USD) <span>?</span></div>

<div><input type="checkbox" name="" class="wrn">i read <span style="color: red;">THE WARNING</span> , and i fully understand all the risks, I make decision to participate in MMM, being of sound mind and memory</div>

<div class="ph_btns">
<a href="#" class="ph_back ph_back_btn_3"><span class="ph_back_icon">Back</span></a>	
<a href="#" class="ph_can ph_can_btn_3"><span class="ph_can_icon">Cancal</span></a>	
<a href="#" class="ph_next ph_next_btn_3"><span class="ph_next_icon">Next</span></a>
</div>
</div>
</div>

<!-- Popup 4 -->
<div class="ph_pop ph_pop_4" style="display: none; width: 650px;">
<div class="ph_title"><span class="ph_title_icon">Add request</span></div>	
<div class="ph_content">	
<div style="margin-bottom: 10px;">Provide Help Amount</div>

<div style="margin-bottom: 10px;">
<input style="font-size: 18px; height: 25px; width: 100px" class="input_cur_value" name="amount_bln"> &nbsp; <span class="selct_currency">Bitcoin(BTC)</span> &nbsp; <a href="#" class="ph_next select_amount_btn"><span class="ph_next_icon select_amount">Select</span></a><br>
<span style="color: grey;">Amount has to be in between <span class="chage_btw">0.01 to 1 BTC</span></span>
</div>

<div style="font-size: 16px; font-weight: 700; margin-bottom: 10px; display: none;" class="lom" id="Lom">Leftover distribution : <span class="selected_amnt" id="seleted_crncy">input value</span> </div>

<div style="font-size: 13px; margin-bottom: 10px;"><input type="text" name="" class="seleceted_am" style="width: 70px;"> Marvo 30%
<span  class="marvo_type">Marvo-BTC</span>
</div>
<div style="font-size: 13px; margin-bottom: 10px;"><input type="text" name="" class="" style="width: 70px;" disabled="disabled"> 20%-100% Deposit MMM << EXTRA>> <span  class="marvo_type">Marvo-BTC</span></div>

<div style="font-family: sans-serif; font-size: 14px; margin-top: 10px; margin-bottom: 10px;">

            <p>Get a bonus of <span class="bonus_20">0.005 </span><i style='font-size:14px' class='fab'>&#xf15a;</i>,
              <span class="bonus_50">  0.013 </span><i style='font-size:14px' class='fab'>&#xf15a;</i> or 
              <span class="bonus_100">  0.026 </span><i style='font-size:14px' class='fab'>&#xf15a;</i> !!
                </p>
            
            </div>
<div><input type="checkbox" name="" class="get_bonus"></div>

<div style="margin: 10px 0px 30px 0px;">
<p style="font-family: sans-serif; font-size: 13px; color:grey; width: 90%;">
A <span class="bonus_20"> 0.005 </span> <i style='font-size:14px' class='fab'>&#xf15a;</i> bonus will be credited to you for a contribution from <span class="usd_to_usd">0.025 <i style='font-size:14px' class='fab'>&#xf15a;</i>-0.11</span>.
(If you withdraw your money earlier then 2 weeks, the bonus will be cancelled)<br>
<span class="bonus_50"> 0.013 </span> <i style='font-size:14px' class='fab'>&#xf15a;</i> bonus will be
credited to you for a contribution from <span class="usd_50">0.12 <i style='font-size:14px' class='fab'>&#xf15a;</i>-0.5</span>. (If you withdraw your money earlier then 30 days, the bonus will be cancelled)<br>
 <span class="bonus_100"> 0.026  </span> <i style='font-size:14px' class='fab'>&#xf15a;</i>bonus will be credited to you for a <span class="usd_100">0.51<i style='font-size:14px' class='fab'>&#xf15a;</i> -1</span> <i style='font-size:14px' class='fab'>&#xf15a;</i> .(If you withdraw your money earlier then 30 days, the bonus will be cancelled)
 </p>	
</div>

<div class="ph_btns">
<a href="#" class="ph_back ph_back_btn_4"><span class="ph_back_icon">Back</span></a>	
<a href="#" class="ph_can ph_can_btn_4"><span class="ph_can_icon">Cancal</span></a>	
<a href="#" class="ph_next ph_next_btn_4"><span class="ph_next_icon">Next</span></a>
</div>
</div>
</div>

<!-- POPUP 5 -->

<div class="ph_pop ph_pop_5" style="display: none; width: 700px;">
<div class="ph_title"><span class="ph_title_icon">Add request</span></div>	
<div class="ph_content">
<div style="font-weight: 700; margin-bottom: 20px;">Confirm authenticity of data entered:</div>
<div style="font-weight: 700; font-size: 17px; margin-bottom: 20px;">
<span class="amont_Of_total"></span>
<span class="selected_total_ammount"> BTC</span> </div>

<div style="margin-bottom: 20px; font-size: 13px;"><span class="amont_Of_total"></span>
<span class="selected_total_ammount">BTC</span> (30% profit in 30 days)</div>

<div style="margin-bottom: 20px;">ATTENTION! Your request can be cancelled before the order is matched. Once it is matched you will not be able to cancel the request!</div>

<div style="color: red;">ATTENTION!!! MAKE SURE ALL THE DETAILS ARE CORRECT. ONCE YOU ARE MATCHED, EDITING THE REQUEST DETAILS WILL NOT BE POSSIBLE.</div>

<div class="ph_btns">
<a href="#" class="ph_back ph_back_btn_5"><span class="ph_back_icon">Back</span></a>	
<a href="#" class="ph_can ph_can_btn_5"><span class="ph_can_icon">Cancal</span></a>	
<a href="#" class="ph_next ph_next_btn_5"><span class="ph_next_icon">Next</span></a>
</div>
</div>
</div>

<!-- POPUP 6 -->
<div class="ph_pop ph_pop_6" style="display: none; width: 700px;">
<div class="ph_title"><span class="ph_title_icon">Add request</span></div>	
<div class="ph_content">
<div style="margin:10px 0px 10px 0px; font-size: 14px;">1.Choose the most convenient method to provide help to another participant ?</div>
<div style="margin:10px 0px 10px 0px; font-size: 14px;">2.Choose the most convenient <span style="color: red;"> Payment method </span> to provide help Order to another participant.</div>
<div style="margin: 10px 0px 10px 0px; ">
<input type="radio" name="payment_mode" class="Payment_method" value="20%-80%"><span>20%-80% ?</span> 	
<input type="radio" name="payment_mode" style="margin-left: 60px;" class="Payment_method_2" value="100%"><span>100% ?</span>	
</div>
<div style="margin: 10px 0px 10px 0px; font-size: 15px;"> <input type="checkbox" n class="wrn_6"> I read <span style="color: red;"> THE WARNING</span>, and i fully understand all the risks, I make decision to participate in MMM, being of sound mind and memory</div>
<div class="ph_btns">
<a href="#" class="ph_back ph_back_btn_6"><span class="ph_back_icon">Back</span></a>	
<a href="#" class="ph_can ph_can_btn_6"><span class="ph_can_icon">Cancal</span></a>	
<a href="#" class="ph_next ph_next_btn_6"><span class="ph_next_icon">Next</span></a>
</div>
</div>
</div>

<!-- POPUP 7 -->
<div class="ph_pop ph_pop_7" style="display: none; width: 350px;">
<div class="ph_title"><span class="ph_title_icon">Attention</span></div>	
<div class="ph_content">
<div> <img src="Images/messager_info.gif" style="margin: 0px 3px 0px 0px;"/>Your request was added.<br>Please wait for it to be processed</div>
<div class="ph_btns" align="center">
<a href="#" class="ph_next ph_next_btn_7" style="cursor: not-allowed;">
    <!-- <span class="ph_next_icon"> -->
<input type="submit" name="ph_ok" value="OK" style="border: none; padding: 10px 20px;" class="ok_ph">
<!-- </span> -->
</a>
</div>
</div>
</div>
</form>
<?php PH(); ?>


<form method="POST">
<!-- GH POPUP BOX -->
<div class="ph_pop gh_pop_1" style="display: none; width: 700px;">
<div class="ph_title"><span class="ph_title_icon">Request to cash out Mavro.</span></div>	
<div class="ph_content">
<div style="margin: 10px 0px; font-weight: 600; font-size: 13px;">
Select exactly where you want the funds from your cashing in of Mavro transferred to.	
</div>
<div style="margin: 10px 0px;">
<input type="radio" name="account_name" class="ac_1"> <spam style="font-size: 13px; font-weight: 600;">Select Bank Account or Card registered earlier</spam>	
</div>
<div style="margin: 10px 0px;">
<input type="radio" name="account_name" class="ac_2"> <spam style="font-size: 13px; font-weight: 600;">Add new bank account or card</spam>	
</div>
<div class="ph_btns">	
<a href="#" class="ph_can gh_can_btn_1"><span class="ph_can_icon">Cancal</span></a>	
<a href="#" class="ph_next gh_next_btn_1"><span class="ph_next_icon">Next</span></a>
</div>
</div>
</div>

<!-- GH POPUP BOX 2 -->
<div class="ph_pop gh_pop_2" style="display: none; width: 700px;">
<div class="ph_title"><span class="ph_title_icon">Request to cash out Mavro</span></div>	
<div class="ph_content">
<div style="margin: 10px 0px; font-weight: 600; font-size: 13px;">
Select existing bank card or Wallet/account.
</div>
<span style="border: 1px solid #8E846B;background: #fff;display: inline-block; width: 150px;">
<select style="width: 150px;" class="select_ac_name" name="select_ac_name">
    <option value="0">Select Account</option>
<?php
$query = "SELECT * FROM `accounts` WHERE User_id = '$user_email';";
$run = mysqli_query($con,$query);
while ($row = mysqli_fetch_array($run)) {


?>	
<option value="<?php echo $row['Account_name']; ?>"><?php echo $row['Account_name']; ?></option>


                <?php }?>	
</select>	
</span>
<div class="ph_btns">	
<a href="#" class="ph_back gh_back_btn_2"><span class="ph_back_icon">Back</span></a>		
<a href="#" class="ph_can gh_can_btn_2"><span class="ph_can_icon">Cancal</span></a>	
<a href="#" class="ph_next gh_next_btn_2"><span class="ph_next_icon">Next</span></a>
</div>
</div>
</div>


<!-- GH BOX 2.2 -->
<div class="ph_pop gh_pop_2_2" style="display: none; width: 700px;">
<div class="ph_title"><span class="ph_title_icon">Request to cash out Mavro</span></div>	
<div class="ph_content">
<div style="margin: 10px 0px; font-weight: 600; font-size: 13px;">
Select existing Currency In System !
</div>
<span style="border: 1px solid #8E846B;background: #fff;display: inline-block; width: 150px;">
<select style="width: 150px;" class="select_currency_gh" name="select_currency_gh">
<option value="BTC">Bitcoin(BTC)</option>	
<option value="USD">Dollar(USD)</option>	
</select>	
</span>
<div class="ph_btns">	
<a href="#" class="ph_back gh_back_btn_2_2"><span class="ph_back_icon">Back</span></a>		
<a href="#" class="ph_can gh_can_btn_2_2"><span class="ph_can_icon">Cancal</span></a>	
<a href="#" class="ph_next gh_next_btn_2_2"><span class="ph_next_icon">Next</span></a>
</div>
</div>
</div>

<!-- GH POPUP 3 -->
<div class="ph_pop gh_pop_3" style="display: none; width: 870px;">
<div class="ph_title"><span class="ph_title_icon">Request to cash out Mavro</span></div>	
<div class="ph_content" style="height: 480px; overflow: auto;">
<div style="margin: 10px 0px; font-weight: 600; font-size: 13px;">
Enter Amounts To be withdrawal from each of your marvo-accounts
</div>

<div style="margin-bottom: 20px;">
        <p style="color: gray; font-size: 12px;">
        Withdrawal Currency: <span style="color: black;" class="with_curen">BTC-Bitcoin</span>  <br>
        Minimum to withdraw :<span style="color: black;" class="mini_with">0.01</span> <br>
        Maximum to available withdraw : <span class="change_amount" style="color: black;"><?php echo $withdrawal_total; ?></span>    
        </p>        
</div>
<div style="margin: 10px 0px;">
<a href="#" class="ph_next Sell_marvo"><span class="ph_next_icon">Sell MARVO</span></a>	
</div>
<div style="font-weight: bold; margin-bottom: 10px; margin-top: 20px;">MARVO purses(available) &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="with_curen"> BTC-Bitcoin</span> </div>

<div style="display: flex; flex-direction: row;font-size: 13px;">
            <div style="width: 300px; background-color: ;">
            <p style="color: gray;padding: 20px 0px;    border-bottom: 2px solid gray;">Growth income(Marvo- <span class="with_curen_1">BTC</span>)</p>    
              <p style="color: gray;padding: 20px 0px;    border-bottom: 2px solid gray;">Principal Amount (Marvo-<span class="with_curen_1">BTC</span>)   </p>      
                  <p style="color: gray;padding: 20px 0px;    border-bottom: 2px solid gray;">Registration Bonus (Marvo-<span class="with_curen_1">BTC</span>) </p>  
                  <p style="color: gray; padding: 20px 0px;    border-bottom: 2px solid gray;">Referral Bonus(Marvo-<span class="with_curen_1">BTC</span>)</p>  
                  <p style="color: gray; padding: 20px 0px;    border-bottom: 2px solid gray;">Guider Bonus (Marvo-<span class="with_curen_1">BTC</span>)</p>  
                  <p style="color: gray;padding: 20px 0px;    border-bottom: 2px solid gray;">Video Bonus(Marvo-<span class="with_curen_1">BTC</span>)</p>  
                  <p style="color: gray; padding: 20px 0px;    border-bottom: 2px solid gray;">MMM &lt;&lt; EXTRA&gt;&gt;(Marvo-<span class="with_curen_1">BTC</span>)</p>
                  <p style="color: gray;padding: 20px 0px;    border-bottom: 2px solid gray;">Others Bonus(Marvo-<span class="with_curen_1">BTC</span>)</p>  
                  <p style="color: gray; padding: 20px 0px;    border-bottom: 2px solid gray;">Total Amount</span></p>
                  
                
            </div>
            <div style="width: 100px; background-color: ">
            <p style="color: gray;padding: 20px 0px;    border-bottom: 2px solid gray; text-align: center;" class="p_amnt">
            	<?php echo $withdrawal_growth; ?>
            </p>        
             <p style="color: gray;padding: 20px 0px;    border-bottom: 2px solid gray; text-align: center;" class="p_amnt_1"><?php echo $withdrawal_principal; ?></p>            
                 <p style="color: gray;padding: 20px 0px;    border-bottom: 2px solid gray; text-align: center;" class="p_amnt_2"><?php echo $withdrawal_reg; ?></p>        
                 <p style="color: gray;padding: 20px 0px;    border-bottom: 2px solid gray; text-align: center;" class="p_amnt_3">0</p>        
                 <p style="color: gray;padding: 20px 0px;    border-bottom: 2px solid gray; text-align: center;" class="p_amnt_4">0</p>        
                 <p style="color: gray;padding: 20px 0px;    border-bottom: 2px solid gray; text-align: center;" class="p_amnt_5"><?php echo $withdrawal_bonus; ?></p>        
                 <p style="color: gray;padding: 20px 0px;    border-bottom: 2px solid gray; text-align: center;" class="p_amnt_6">0</p>
                 <p style="color: gray;padding: 20px 0px;    border-bottom: 2px solid gray; text-align: center;" class="p_amnt_7">0</p>   
                 <p style="color: gray;padding: 20px 0px;    border-bottom: 2px solid gray; text-align: center;" class="p_amnt_total">0</p>        
            </div>
            <div style="width: 100px;background-color: " align="center">
                 <p style="color: gray;padding: 14px 0px;    border-bottom: 2px solid gray; text-align: center; margin: 24px 0px 0px 0px;">
                 <a href="#" class="ph_next p_amnt_btn"><span class="bg-btn"><span style="font-size: 14px;"> all &gt;</span></span></a>
                </p> 
                 <p style="color: gray;padding: 14px 0px;    border-bottom: 2px solid gray; text-align: center;margin: 24px 0px 0px 0px;">
                 <a href="#" class="ph_next all p_amnt_btn_1"><span class="bg-btn"><span style="font-size: 14px;"> all &gt;</span></span></a>
                </p> 
                 <p style="color: gray;padding: 14px 0px;    border-bottom: 2px solid gray; text-align: center;margin: 24px 0px 0px 0px;">
                 <a href="#" class="ph_next all p_amnt_btn_2"><span class="bg-btn"><span style="font-size: 14px;"> all &gt;</span></span></a>
                </p> 
                 <p style="color: gray;padding: 14px 0px;    border-bottom: 2px solid gray; text-align: center;margin: 24px 0px 0px 0px;">
                 <a href="#" class="ph_next all p_amnt_btn_3"><span class="bg-btn"><span style="font-size: 14px;"> all &gt;</span></span></a>
                </p> 
                 <p style="color: gray;padding: 14px 0px;    border-bottom: 2px solid gray; text-align: center;margin: 24px 0px 0px 0px;">
                 <a href="#" class="ph_next all p_amnt_btn_4"><span class="bg-btn"><span style="font-size: 14px;"> all &gt;</span></span></a>
                </p> 
                 <p style="color: gray;padding: 14px 0px;    border-bottom: 2px solid gray; text-align: center;margin: 24px 0px 0px 0px;">
                 <a href="#" class="ph_next all p_amnt_btn_5"><span class="bg-btn"><span style="font-size: 14px;"> all &gt;</span></span></a>
                </p> 
                 <p style="color: gray;padding: 14px 0px;    border-bottom: 2px solid gray; text-align: center;margin: 24px 0px 0px 0px;">
                 <a href="#" class="ph_next all p_amnt_btn_6"><span class="bg-btn"><span style="font-size: 14px;"> all &gt;</span></span></a>
                </p>
                <p style="color: gray;padding: 14px 0px;    border-bottom: 2px solid gray; text-align: center;margin: 24px 0px 0px 0px;">
                 <a href="#" class="ph_next all p_amnt_btn_7"><span class="bg-btn"><span style="font-size: 14px;"> all &gt;</span></span></a>
                </p> 
                <p style="color: gray;padding: 20px 0px;    border-bottom: 2px solid gray; text-align: center;" class="p_amnt">&nbsp;</p>
            </div>
            <div style="width: 300px; background-color: ;">
                 <p style="color: gray;padding: 16.4px 0px;    border-bottom: 2px solid gray; text-align: center;margin: 14px 0px 0px 0px;">
                <input type="text" class="p_amnt_inp">
                </p> 
                 <p style="color: gray;padding: 16.6px 0px;    border-bottom: 2px solid gray; text-align: center;margin: 14px 0px 0px 0px;">
                <input type="text" class="p_amnt_inp_1">
                </p> 
                 <p style="color: gray;padding: 16.4px 0px;    border-bottom: 2px solid gray; text-align: center;margin: 14px 0px 0px 0px;">
                <input type="text" class="p_amnt_inp_2">
                </p> 
                 <p style="color: gray;padding: 16.6px 0px;    border-bottom: 2px solid gray; text-align: center;margin: 14px 0px 0px 0px;">
                <input type="text" class="p_amnt_inp_3">
                </p> 
                 <p style="color: gray;padding: 16.4px 0px;    border-bottom: 2px solid gray; text-align: center;margin: 14px 0px 0px 0px;">
                <input type="text" class="p_amnt_inp_4">
                </p> 
                 <p style="color: gray;padding: 16.6px 0px;    border-bottom: 2px solid gray; text-align: center;margin: 14px 0px 0px 0px;">
                <input type="text" class="p_amnt_inp_5">
                </p> 
                 <p style="color: gray;padding: 16.4px 0px;    border-bottom: 2px solid gray; text-align: center;margin: 14px 0px 0px 0px;">
                <input type="text" class="p_amnt_inp_6">
                </p> 
                <p style="color: gray;padding: 16.4px 0px;    border-bottom: 2px solid gray; text-align: center;margin: 14px 0px 0px 0px;">
                <input type="text" class="p_amnt_inp_7">
                </p>
                <p style="color: gray;padding: 20px 0px;    border-bottom: 2px solid gray; text-align: center;" class="p_amnt">&nbsp;</p>
                
                </div>

            </div>




<div class="ph_btns">	
<a href="#" class="ph_back gh_back_btn_3"><span class="ph_back_icon">Back</span></a>		
<a href="#" class="ph_can gh_can_btn_3"><span class="ph_can_icon">Cancal</span></a>	
<a href="#" class="ph_next gh_next_btn_3"><span class="ph_next_icon">Next</span></a>
</div>
</div>
</div>

<?php 
$query = "SELECT * FROM `accounts` WHERE User_id = '$user';";
$run = mysqli_query($con,$query);
$ress = mysqli_fetch_array($run);
$wallet_no = $ress['Currency_address'];

?>

<!-- GH POPUP 4 -->
<div class="ph_pop gh_pop_4" style="display: none; width: 700px;">
<div class="ph_title"><span class="ph_title_icon">Request to cash out Mavro</span></div>	
<div class="ph_content">
<div style="margin: 10px 0px; font-weight: 600; font-size: 13px;">
Comfirm contents of your request for sale of marvo
</div>
<div style="margin: 10px 0px;">
<span style="display: inline-block; font-size: 17px; font-weight: 700;">To Account</span>
<span style="display: block; font-size: 14px; margin: 10px 0px;">PLEASE TRANSFER TO BITCOIN WALLET</span>	

<span style="display: ; font-size: 14px; margin: 10px 0px;"><br>
<span style="display: ;">Wallet No.:<span><?php echo $wallet_no; ?></span></span>	
</span>

<span style="display: ; font-size: 14px; margin: 10px 0px;"><br><br>
<!-- <span style="display:;">Mobile No.:<span>+9183728379</span></span><br><br> -->
<span>TOGETHER WE CHANGE THE WORLD</span><br>
<div>Total Amount: <input type="text" name="Total_gh_amount" id="Total_gh_amount" class="Total_gh_amount" value="0" style="border: none; background: none;" readonly="1"></div>	
</span>
</div>
<div style="margin: 10px 0px; color: grey; font-size: 13px;">
Attention if you are a manger and want to place request for your participant, be aware that SMS-code is valid only for 10 minutes and will come only to participant's phone number. That means you will have to contact participant to find out the SMS-code. Choose time to place the request so you are able to call and reach the participant. If the present moment of time is not convenient for the participant click CANCEL. 	
</div>
<div style="margin: 20px 0px 15px 0px; color: grey; font-size: 13px;">
"Don't forget to share your happiness with other system participant after receiving help and send us an appropriate video to the winletters24@gamil.com and we will put it on the web-page MUTUAL HELP.	
</div>
<div class="ph_btns">	
<a href="#" class="ph_back gh_back_btn_4"><span class="ph_back_icon">Back</span></a>		
<a href="#" class="ph_can gh_can_btn_4"><span class="ph_can_icon">Cancal</span></a>	
<a href="#" class="ph_next gh_next_btn_4"><span class="ph_next_icon">Next</span></a>
</div>
</div>
</div>

<!-- GH BOX 5 -->

<div class="ph_pop gh_pop_5" style="display: none; width: 350px;">
<div class="ph_title"><span class="ph_title_icon">Attention</span></div>	
<div class="ph_content">
<div> <img src="Images/messager_info.gif" style="margin: 0px 3px 0px 0px;"/>Your request was added.<br>Please wait for it to be processed</div>
<div class="ph_btns" align="center">
<a href="#" class="ph_next gh_next_btn_5" style="cursor:not-allowed;">
    <!-- <span class="ph_next_icon"> -->
        <input type="submit" name="GH" value="OK" style="border: none; padding: 10px 30px; box-sizing: border-box;" class="ok_gh">
    <!-- </span> -->
</a>
</div>
</div>
</div>
</form>
<?php GH(); ?>

<!-- GH/PH details -->
<!-- <i class="material-icons" style="font-size:48px;color:red">highlight_off</i> -->
<div class="ph_pop ph_details" style="display: none; width: 850px;">
<div class="ph_title" style="padding: 2px 10px;box-sizing: border-box;cursor: pointer;"><span style="color: white; font-size: 12px;">Detailed assignment information</span>
<i class="material-icons ph_details_close" style="font-size:19px;color:#f1d782; float: right;">highlight_off</i>
</div>	
<div class="ph_content" style="height: 450px; overflow: auto;">
<div class="ph_or_det" id="detail_ph_id"></div>
<!-- <div style="margin: 10px 0px; font-size: 17px;">Order Z1<?php echo $row['PH_id']; ?></div>
<div style="margin: 10px 0px; font-size: 14px;">
<span>Participant of MMM has requested assistance in the amount of: 0.012324 BTC</span><br> 
<span style="font-weight: 600;">You have to provide help before 09-19-2018, according to BTC details provided further:</span>   
</div>
<div style="border-radius: 7px;padding: 7px;border: 1px solid gray;margin: 20px 0">
<div style="margin: 10px 0px; font-size: 14px;">
1BW4jJRTof42JkgBeQ1xvowQ1rE2Jqo2Xo<br>
Manual on how to use Bitcoin    
</div>  
<div style="margin: 10px 0px; font-size: 12px;">
After providing help, please press the "I have provided help" button and attach your payment confirmation document (check scan, receipt scan or online transaction screen shot) where it says Browse File.  
</div>  

<div style="margin: 20px 0px; color: red; font-size: 14px;">
ATTENTION!<br>
Make money transfer only to those bank details which are specified on the order details page! If you are asked to make transfer to other bank details or wallet addresses ("card is blocked!", etc.) - do not get fooled. Make a report to support immediately! These are almost certainly fraudsters. On the other hand, sometimes a person has actually been hacked and they are trying to prevent loss. If they ask you to not send payment at all, this is a possibly what is happening. Send a message to recipient asking for further details or evidence. Exercise caution and wisdom.   
</div>
<div style="margin: 20px 0px; color: red; font-size: 14px;">
Receiver: khan (*****)<br>
Reciever's guider: Alef (*****)<br>
Sender: Alef (*****)<br>
Sender's guider: (*****)<br>
</div>

<div style="margin: 20px 0px; color: red; font-size: 14px;">
ATTENTION!!! 

1) SENDER SHOULD PROVIDE HELP WITH THE AMOUNT OF MONEY THAT IS SPECIFIED IN THE ORDER. COMMISSION IS TO BE PAID BY THE SENDER 

2) IF THE PAYMENT WILL NOT BE MADE BY 2018-10-03T06:35:41.073 YOUR ACCOUNT WILL BE BLOCKED AND YOU WILL NOT BE ABLE TO PARTICIPATE IN THE SYSTEM. YOUR ORDER WOULD BE REDIRECTED TO ANOTHER PARTICIPANT.    


</div>
</div>

<div>P.S. In case the order did not come for the full amount indicated in your request, don't worry! Orders for the remaining sum will be received within 10 days of the filing of your request. :-))</div>
 -->
<div class="ph_btns" align="right">	
	
<a href="#" class="ph_can ph_details_can_btn"><span class="ph_can_icon">Cancal</span></a>	

</div>
</div>
</div>

<!-- GH Details -->
<div class="ph_pop gh_details" style="display: none; width: 850px;">
<div class="ph_title" style="padding: 2px 10px;box-sizing: border-box;cursor: pointer;"><span style="color: white; font-size: 12px;">Detailed assignment information</span>
<i class="material-icons gh_details_close" style="font-size:19px;color:#f1d782; float: right;">highlight_off</i>
</div>
<div class="ph_content" style="height: 450px; overflow: auto;">
<div class="ph_or_det" id="detail_gh_id"></div>

<!-- <div style="margin: 10px 0px; font-size: 17px;">Order Z463567</div>
<div style="margin: 10px 0px; font-size: 14px;">
<span>Participant of MMM has requested assistance in the amount of: 0.012324 BTC</span><br> 
<span style="font-weight: 600;">You have to provide help before 09-19-2018, according to BTC details provided further:</span>	
</div>
<div style="border-radius: 7px;padding: 7px;border: 1px solid gray;margin: 20px 0">
<div style="margin: 10px 0px; font-size: 14px;">
1BW4jJRTof42JkgBeQ1xvowQ1rE2Jqo2Xo<br>
Manual on how to use Bitcoin	
</div>	
<div style="margin: 10px 0px; font-size: 12px;">
After providing help, please press the "I have provided help" button and attach your payment confirmation document (check scan, receipt scan or online transaction screen shot) where it says Browse File.	
</div>	

<div style="margin: 20px 0px; color: red; font-size: 14px;">
ATTENTION!<br>
Make money transfer only to those bank details which are specified on the order details page! If you are asked to make transfer to other bank details or wallet addresses ("card is blocked!", etc.) - do not get fooled. Make a report to support immediately! These are almost certainly fraudsters. On the other hand, sometimes a person has actually been hacked and they are trying to prevent loss. If they ask you to not send payment at all, this is a possibly what is happening. Send a message to recipient asking for further details or evidence. Exercise caution and wisdom.	
</div>
<div style="margin: 20px 0px; color: red; font-size: 14px;">
Receiver: khan (*****)<br>
Reciever's guider: Alef (*****)<br>
Sender: Alef (*****)<br>
Sender's guider: (*****)<br>
</div>

<div style="margin: 20px 0px; color: red; font-size: 14px;">
ATTENTION!!! 

1) SENDER SHOULD PROVIDE HELP WITH THE AMOUNT OF MONEY THAT IS SPECIFIED IN THE ORDER. COMMISSION IS TO BE PAID BY THE SENDER 

2) IF THE PAYMENT WILL NOT BE MADE BY 2018-10-03T06:35:41.073 YOUR ACCOUNT WILL BE BLOCKED AND YOU WILL NOT BE ABLE TO PARTICIPATE IN THE SYSTEM. YOUR ORDER WOULD BE REDIRECTED TO ANOTHER PARTICIPANT.	
</div>
</div>

<div>P.S. In case the order did not come for the full amount indicated in your request, don't worry! Orders for the remaining sum will be received within 10 days of the filing of your request. :-))</div>
 -->
<div class="ph_btns" align="right">	
<a href="#" class="ph_can gh_details_can_btn"><span class="ph_can_icon">Cancal</span></a>	
</div>
</div>

</div>


<!-- GH/PH Message -->
<div class="ph_pop gh_msg" style="display: none; width: 850px;">
<div class="ph_title"><span class="ph_title_icon chat_icon">Chat</span>
<i class="material-icons gh_msg_close" style="font-size:19px;color:#f1d782; float: right;cursor: pointer;">highlight_off</i>
</div>	
<div class="ph_content" style="padding: 3px 5px; height: 450px;overflow-y: scroll;">
<form name="form_ph_msg" method="POST" enctype="multipart/form-data">
<div style="display: flex;flex-direction: row;">
<div style="width: 80%; border: 1px solid black; padding: 0px 5px; height: 470px;">
<h2>Order: <span id="gh_msg_order_id">T139761426</span></h2>
<div style="width: 100%;height: 300px;overflow: scroll;background-color: white" id="gh_message_inbox">
</div>	
<div style="margin: 10px 0px;">
<textarea name="input_gh_msg" style="resize: none;" rows="2" cols="85"></textarea>
	
</div>

<div align="right" style="margin: 10px 0px;">
    <a href="#" class="ph_next gh_msg_can_btn"><input type="submit" name="gh_msg_submit" value="Send" style="border: none; padding: 10px 30px; box-sizing: border-box;" class="ok_gh"></a>                  
</div>

<input type="hidden" name="input_gh_msg_phid" id="input_gh_msg_phid" value="" />
<input type="hidden" name="input_gh_msg_orderid" id="input_gh_msg_orderid" value="" />
</div>
<div style="width: 100px;padding: 5px;" align="center"><input type="file" name="image_gh_msg"></div>
</div>
</form><?php ghMsgSubmit(); ?>
</div>
</div>



<!-- PH msg -->
<div class="ph_pop ph_msg" style="display: none; width: 850px;">
    
    <div class="ph_title"><span class="ph_title_icon chat_icon">Chat</span>
        <i class="material-icons ph_msg_close" style="font-size:19px;color:#f1d782; float: right;cursor: pointer;">highlight_off</i>
    </div>	
    <div class="ph_content" style="padding: 3px 5px; height: 450px;overflow-y: scroll;">
    <form name="form_ph_msg" method="POST" enctype="multipart/form-data">
        <div style="display: flex;flex-direction: row;">
            <div style="width: 80%; border: 1px solid black; padding: 0px 5px; height: 470px;">
            <h2>Order: <span id="ph_msg_order_id">T139761426</span></h2>
            <div style="width: 100%;height: 300px;overflow: scroll;background-color: white" id="ph_message_inbox">asfsaf</div>	
            <div style="margin: 10px 0px;">
                <textarea name="input_ph_msg" style="resize: none;" rows="2" cols="85"></textarea>	
            </div>
            <div align="right" style="margin: 10px 0px;">
                <a href="#" class="ph_next ph_msg_can_btn"><input type="submit" name="ph_msg_submit" value="Send" style="border: none; padding: 10px 30px; box-sizing: border-box;" class="ok_gh"></a>                	
            </div>
            <input type="hidden" name="input_ph_msg_phid" id="input_ph_msg_phid" value="" />
            <input type="hidden" name="input_ph_msg_orderid" id="input_ph_msg_orderid" value="" />
        </div>	
        <div style="width: 100px;padding: 5px;" align="center"><input type="file" name="image_ph_msg"></div>
    </div>
    </form><?php phMsgSubmit(); ?>  
    </div>      
</div>


<!-- GH/PH Req Details -->
<!-- PH Req Details -->

<!-- PH Req Details -->
<div class="ph_pop ph_req_details" style="display: none; width: 850px;">
<div class="ph_title" align="center"><span class="ph_title_icons" style="color: white;">Detailed information about order</span>
<i class="material-icons ph_req_det_close" style="font-size:19px;color:#f1d782; float: right;cursor: pointer;">highlight_off</i>
</div>	
<div class="ph_content" style="padding: 10px; height: 450px;overflow-y: scroll;">

<div id="txtHint"></div>


<div  align="center" style="margin: 10px 0px;font-weight: 800; font-size: 19px;">Account information is not available (
BitCoin)</div>

<div style="font-size: 16px; font-weight: 700;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Marvo Wallets&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BTC</div>
<hr width="100%">

<div  align="center" style="margin: 10px 0px;font-weight: 800; font-size: 19px;">Order List</div>

<div id="ph_order_detail_id"></div>
<!-- <div class="ph_order">
    <div class="number ph_number">
        <a href="javascript:void(0)" style="text-decoration: none; color: black;"><img src="Images/play.png" alt="" class="ph_order_img" width="40%;"><span class="num">Number:</span><span class="numba">R1241241241241</span></a>
    </div>
<div class="order_content">
    <a href="javascript:void(0)" style="text-decoration: none; color: black;">
    <span class="confirm">Confirmed by CRO (Request to   Provide help Z1394219482481)</span>
    <div class="cona">
        <span class="datetxt">Date of creating:</span>
        <span class="datenum">23/23/19</span>
    </div>
    <div class="conb">
        <span class="name">You</span>
        <span class="bank">Bitcoin</span>
    </div>
    </a>
    <div class="conc">
        <a href="javascript:void(0)" style="text-decoration: none; color: black;">
        <span class="datetxt"><i class="ileft">&gt;</i>34USD<i class="iright">&gt;</i></span>
        <span class="datenum"></span></a>
        <a href="javascript:void(0)" style="font-size: 10px; text-decoration: none;color: black;">Confirmation: 
        <img src="Images/png.png" alt=""></a>                                           
    </div>
    <div class="cond">
        <span class="name">Trenton</span>
        <span class="bank">Bitcoin</span>
    </div>
    <div class="condprintimg">
        <img src="Images/printout.png" class="">
    </div>
</div>
    <a href="javascript:void(0)" class="msg_ph_box"  style="text-decoration: none; color: black;">Messages: 1</a>
    <a href="javascript:void(0)" class="open_ph_details" id="<?php echo $res['PH_id']; ?>" onclick="showPh_ord_det(this.id)">Details &gt;&gt;</a>
</div> -->

</div>



</div>


<!-- GH Req Details -->
<div class="ph_pop gh_req_details" style="display: none; width: 850px;">
<div class="ph_title" align="center"><span class="ph_title_icons" style="color: white;">Detailed information about order</span>
<i class="material-icons gh_req_det_close" style="font-size:19px;color:#f1d782; float: right;cursor: pointer;">highlight_off</i>
</div>	
<div class="ph_content" style="padding: 10px; height: 450px;overflow-y: scroll;">

<div id="gh_detail_request_pop"></div>
<!-- <div class="gh_req" style="display: block;">
<a href="javascript:void(0)">
<div class="rtitle_2"><span>Request to Get help Z3374246761 </span></div>
</a>
<div class="req_text" align="left">
<a href="javascript:void(0)" style="text-decoration: none; color: black; line-height: 13px;font-size: 11px;">
Participant:Akram <br>Amount:40000USD<br>Balance: 0 <br>
Date: 10/06/19<br>Status: Orders Created(+)<br><br></a>
<a style="padding: 2px 6px 1px;background: #fff;border: 1px solid #999;border-radius: 6px;cursor: pointer;font-size: 10px;text-decoration: none;color: #0645AD;float:left; display: none;" href="javascript:void(0)" class="open_LOH">Write a Letter of happiness</a>
 <a style="padding: 2px 6px 1px;background: #fff;border: 1px solid #999;border-radius: 6px;cursor: pointer;font-size: 10px;text-decoration: none;color: #0645AD;float:right" href="javascript:void(0)" >Details &gt;&gt;</a>
</div>		
</div> -->

<div  align="center" style="margin: 10px 0px;font-weight: 800; font-size: 19px;">Account information is not available (
BitCoin)</div>
<div style="font-size: 16px; font-weight: 700;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Marvo Wallets&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BTC</div>
<hr width="100%">
<div  align="center" style="margin: 10px 0px;font-weight: 800; font-size: 19px;">Order List</div>
<div id="gh_detail_order_pop"></div>
<!-- <div class="gh_order" style="display: block; margin: 11px 0px 0px 0px;">
<div class="number gh_number">
<a href="javascript:void(0)" style="text-decoration: none; color: black;"><img src="Images/play.png" alt="" width="40%;">
<span class="num">Number:</span><span class="numba">R3177615468</span>
</a>
</div>
<div class="order_content">
<a href="javascript:void(0)" style="text-decoration: none; color: black;">
<span class="confirm">Confirmed by CRO (Request to   Provide help Z3374246761)</span>
<div class="cona">
<span class="datetxt">Date of creating:</span>
<span class="datenum">10/06/19</span>
</div>
<div class="conb">
<span class="name">You</span>
<span class="bank">Bitcoin</span>
</div>
</a>
<div class="conc">
<a href="javascript:void(0)" style="text-decoration: none; color: black;">
<span class="datetxt"><i class="ileft">&gt;</i>40000USD<i class="iright">&gt;</i></span>
<span class="datenum"></span></a>
<a href="javascript:void(0)" style="font-size: 10px; text-decoration: none;color: black;">Confirmation: 
<img src="Images/png.png" alt=""></a>                                           
</div>
<div class="cond">
<span class="name">Trenton</span>
<span class="bank">Bitcoin</span>
</div>
<div class="condprintimg">
<img src="Images/printout.png" class="">
</div>
</div>
<a href="javascript:void(0)" class="msg_gh_box" style="text-decoration: none; color: black;">Messages: 1</a>
<a href="javascript:void(0)" class="open_gh_details">Details &gt;&gt;</a>
</div> -->



</div>
</div>


<!-- LOH -->
<div class="ph_pop LOH" style="display: none; width: 700px;">
<div class="ph_title" style="padding: 2px 10px;box-sizing: border-box;cursor: pointer;"><span style="color: white; font-size: 12px;">Detailed assignment information</span>
<i class="material-icons LOH_close" style="font-size:19px;color:#f1d782; float: right;">highlight_off</i>
</div>	
<div class="ph_content" style="height: 450px; overflow: auto;">

<div style="font-size: 14px; font-size: 800;">
	Dear Participant<br><br>
According to the System rules, wihin three days after receiving assistanc, You must write a "Letter of Happiness" which will be posted in the section "testimonials" (share your happiness with other as well).
<ul style="margin: 10px 10px;">
<li>Your name(nickname is allowed)</li>	
<li>Status (Participant, 10+Guider, etc.)</li>
<li>Residence (for example, "I'm from London" or "I'm from sao paolo")</li>
<li>The amount and date of the given assistance.</li>
<li>The amount of received assistance.</li>
</ul>

Please note you are give only 3 attepms to write the letter, if you fail to comply you will be blocked. (Forever and ever) so please, don't ignore moderator's requirements (if he makes them) and do not send him and endlessly the same text. for example "Together we change the world". <br><br>

If you attach a video (that shows how happy you are getting help), it will be really wonderful, and you can even be awarded with a bonus for your video and effort. You can read about it below. Good luck in your writing. If you want to attach some suitable picture (payment document or your selfie where you are wearing MMM t-shirt:you are welcome).<br><br><br>

Your Message


</div>

<form name="feedback_form" action="", method="POST">
<div style="margin: 10px 0px;">
<textarea style="resize: none;" rows="20" cols="85" name="feedback_letter" class="LOH_text"></textarea>	
</div>

<div style="font-size: 14px; font-size: 800;">
File <br><br>
<ul style="margin: 10px 10px;">
<li>To meet all the requirements to the letter you should introduce yourself and tell about your status, where you live, the amount and date of the PH, the amount of the GH.</li>	
<li>The little of the video has to be "MMM PAYS".</li>
</ul>

Insert a link to your video on Youtube. <br>
As you can see, the requirements are very simple.Anyway, one can even make some efforts for such bonuses! Isn't it ? Atleast a little bit on the whole, let's get down to work. Long live MMM! We wish your every success in getting the bonus!. <br><br>

Your Video<br><br>
<input type="url" name="feedback_url" style="width: 100%"><br><br>
<input type="checkbox" name="feedback_check">  I WANT TO GET BONUS FOR VIDEO!!!!
<input name="input_feedback_amount" id="input_feedback_amount" type="hidden" value="" />
<input name="input_feedback_user_id" id="input_feedback_user_name" type="hidden" value="<?php echo $user_email; ?>" />
<input name="input_feedback_gh_id" id="input_feedback_gh_id" type="hidden" value="" />
</div>

<div class="ph_btns" align="right">		
<a href="#" class="ph_can LOH_can_btn"><span class="ph_can_icon">Cancal</span></a>
<a href="#" class="ph_next LOH_next_btn"><span class="ph_next_icon"><input type="submit" name="feedback_submit" value="OK" style="border: none; background: none;"></span></a>	
</div>
</form>
<?php feedbackSubmit(); ?>
</div>
</div>

<!-- Alert Box -->
<div class="ph_pop alert_ph" style="display: none; width: 290px;">
<div class="ph_title"><span class="ph_title_icon">Alert</span></div> 
<div class="ph_content">
<div>Already Provide help Pending.....</div>
<div class="ph_btns" align="center">
<a href="#" class="ph_next alert_ok_ph"><span class="ph_next_icon">Ok</span></a>
<!-- <a href="#" class="ph_next"><span class="ph_next_icon"></a> -->
<!-- <a href="#" class="ph_can gh_con_can_btn"><span class="ph_can_icon">Cancal</span></a> -->
</div>
</div>

</div>
<!-- GH alert -->
<div class="ph_pop alert_gh" style="display: none; width: 290px;">
<div class="ph_title"><span class="ph_title_icon">Alert</span></div> 
<div class="ph_content">
<div>Already Get help Pending.....</div>
<div class="ph_btns" align="center">
<a href="#" class="ph_next alert_ok_gh"><span class="ph_next_icon">Ok</span></a>
<!-- <a href="#" class="ph_next"><span class="ph_next_icon"></a> -->
<!-- <a href="#" class="ph_can gh_con_can_btn"><span class="ph_can_icon">Cancal</span></a> -->
</div>
</div>

</div>
<!-- GH more box -->
<div class="ph_pop alert_gh_or" style="display: none; width: 290px;">
<div class="ph_title"><span class="ph_title_icon">Alert</span></div> 
<div class="ph_content">
<div>You have not Available Amount</div>
<div class="ph_btns" align="center">
<a href="#" class="ph_next alert_ok_gh_or"><span class="ph_next_icon">Ok</span></a>
<!-- <a href="#" class="ph_next"><span class="ph_next_icon"></a> -->
<!-- <a href="#" class="ph_can gh_con_can_btn"><span class="ph_can_icon">Cancal</span></a> -->
</div>
</div>

</div>
<!-- end Alert box -->


<!-- End News Box -->
<!-- </div> -->



<!-- End Con-Pop -->
</div>
<!-- PH/GH processs End -->

</div>

<?php 
$news = "SELECT * FROM news;";
$qq = mysqli_query($con,$news);
$dilog = "";
while ($nrun = mysqli_fetch_array($qq)) {
    if($nrun['Dialog'] == "Yes"){
        $dilog = "display:block";
?>
<!-- News Box -->
<div class="ph_pop news_box" style="display: none; width: 800px;position: absolute;left: 280px; top: 10px;<?php echo $dilog; ?>">
    <div class="ph_title"><span class="ph_title_icon">News</span>
    <!-- <i class="material-icons news_box_close" style="font-size:19px;color:#f1d782; float: right;cursor: pointer;">highlight_off</i> -->
    <a href="#" class="news_box_close">x</a>
    </div> 

<div class="ph_content" style="height: 450px;  overflow: auto;">
    <div style="font-size: 16px; font-weight: 700;margin: 10px 0px;" align="center">***<span>(<?php echo$nrun['News_date'];?>)</span>--<span><?php echo$nrun['News_title'];?></span>***</div>    
    <div style="margin: 0px; ">Dear Participants</div>
    <p style="line-height: 30px;"><?php echo$nrun['News'];?></p>
    <p><b>MMM Administor</b><br><br>
    <b><?php echo$nrun['regards'];?></b></p>
    <?php } } ?>
    <div class="ph_btns" align="right">
    <!-- <a href="#" class="ph_next news_box_ok"><span class="ph_next_icon">Ok</span></a> -->
    <!-- <a href="#" class="ph_next"><span class="ph_next_icon"></a> -->
    <!-- <a href="#" class="ph_can news_box_can"><span class="ph_can_icon">Cancal</span></a> -->
    </div>
</div>
</div>



<?php 
$news = "SELECT * FROM news;";
$qq = mysqli_query($con,$news);
$dilog = "";
while ($nrun = mysqli_fetch_array($qq)) {
    if($nrun['Dialog'] == "YES"){
        $dilog = "display:block";
?>
<!-- News Box -->
<div class="ph_pop news_box" style="display: none; width: 800px;position: fixed;left: 280px; top: 10px;<?php echo $dilog; ?>">
<div class="ph_title"><span class="ph_title_icon">News</span>
<!-- <i class="material-icons news_box_close" style="font-size:19px;color:#f1d782; float: right;cursor: pointer;">highlight_off</i> -->
<a href="#" class="news_box_close">x</a>
</div> 

<div class="ph_content" style="height: 450px;  overflow: auto;">
<div style="font-size: 16px; font-weight: 700;margin: 10px 0px;" align="center">***<span>(<?php echo$nrun['News_date'];?>)</span>--<span><?php echo$nrun['News_title'];?></span>***</div>    
<div style="margin: 0px; ">Dear Participants</div>
<p style="line-height: 30px;"><?php echo$nrun['News'];?></p>
<p><b>MMM Administor</b><br><br>
<b><?php echo$nrun['regards'];?></b></p>
<?php } } ?>
<div class="ph_btns" align="right">
<!-- <a href="#" class="ph_next news_box_ok"><span class="ph_next_icon">Ok</span></a> -->
<!-- <a href="#" class="ph_next"><span class="ph_next_icon"></a> -->
<!-- <a href="#" class="ph_can news_box_can"><span class="ph_can_icon">Cancal</span></a> -->
</div>
</div>

</div>







<script type="text/javascript">
	$(document).ready(function(){



// PH req Details





	});
</script>


</body>
</html>