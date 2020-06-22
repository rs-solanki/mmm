
$(document).ready(function(){

// Ph box
$(".o_ph").click(function(){


if($(".status").text() == "Processed" || $(".status").text() == ""){
$(".ph_pop_1").show();
$(".con_pop").show();

}

else{
	$(".con_pop").show();
  $(".alert_ph").show();

}
$(".ph_next_btn").click(function(){
var $chek = $(".checkbox");
 if($chek.prop("checked") == true){
$(".ph_pop_1").hide();
// $(".mask").hide();
$(".ph_pop_2").show();

 	return true;
 }else{
 	alert("Check Checkbox");
 	return false;
 }
});

$(".ph_can_btn").click(function(){
$(".ph_pop_1").hide();
$(".con_pop").hide();
 location.reload(true);

});

// ph box 2

$(".ph_back_btn_2").click(function(){
$(".ph_pop_2").hide();
$(".ph_pop_1").show();


});
});

$(".ph_can_btn_2").click(function(){
$(".ph_pop_2").hide();
$(".con_pop").hide();
 location.reload(true);

});

// Ph box 3

$(".ph_next_btn_2").click(function(){
//alert (123);
 $(".ph_pop_3").show();
$(".ph_pop_2").hide();
$(".con_pop").show();

      


});





$(".ph_next_btn_3").click(function(){
var $radio = $(".ph_method");
var $radio_2 = $(".ph_method_2");
var $btc = $(".for_btc");
var $sys =  $(".ph_method_sys");
var $sys_2 =  $(".ph_method_sys_2");
var $marvo = $(".marvo_30");
var $red = $(".wrn");
if($radio.prop("checked") != true && $('.for_btc').css('display') != 'none' ){
	alert("Choose Currency");
	return false;
}
if($radio_2.prop("checked") != true && $('.for_usd').css('display') != 'none' ){
	alert("Choose Currency");
	return false;
}
if($marvo.prop("checked") != true){
	alert("Choose Marvo Types ");
	return false;
}

if($sys.prop("checked") != true && $('.for_btc').css('display') != 'none'){
	alert("Choose System Currency ");
	return false;
}
if($sys_2.prop("checked") != true && $('.for_usd').css('display') != 'none'){
	alert("Choose System Currency ");
	return false;
}

if($red.prop("checked") != true){
	alert("Accept read warning ");
	return false;
}

else{
	$(".ph_pop_3").hide();
	$(".ph_pop_4").show();
}

});

$(".ph_can_btn_3").click(function(){
	$(".ph_pop_3").hide();
	$(".con_pop").hide();
	 location.reload(true);
});

$(".ph_back_btn_3").click(function(){
	$(".ph_pop_3").hide();
	$(".ph_pop_2").show();
	$(".con_pop").show();
});

// Ph box 4

$(".ph_next_btn_4").click(function(){
var $input_cur = $(".input_cur_value").val();
var $get_b = $(".get_bonus");

if($input_cur == ""){
alert("Enter Amount");
return false;
}

if($get_b.prop("checked") != true){
alert("Checkbox Check");
return false;
}
else{
	$(".ph_pop_4").hide();
	$(".ph_pop_5").show();
}



});

$(".ph_can_btn_4").click(function(){
     $(".ph_pop_4").hide();
     $(".con_pop").hide();
      location.reload(true);

});

$(".ph_back_btn_4").click(function(){
     $(".ph_pop_4").hide();
     $(".ph_pop_3").show();

});

// PH box 5

$(".ph_can_btn_5").click(function(){
	$(".ph_pop_5").hide();
	$(".con_pop").hide();
	 location.reload(true);
});

$(".ph_back_btn_5").click(function(){
	$(".ph_pop_5").hide();
	$(".ph_pop_4").show();
});

$(".ph_next_btn_5").click(function(){
	$(".ph_pop_5").hide();
	$(".ph_pop_6").show();
  var $amount_put =  $(".seleceted_am").val();
  $(".amont_Of_total") = $amount_put;
});

// PH box 6
$(".ph_next_btn_6").click(function(){ 
  var $Payment_method = $(".Payment_method");
  var $Payment_method_2 = $(".Payment_method_2");
  var $wrn_6 = $(".wrn_6");
  if($wrn_6.prop("checked") != true){
	 alert("Accept Read The WARNING !!");
	 return false;
  }else{
	 $(".ph_pop_6").hide();
	 $(".ph_pop_7").show();
  }
});


$(".ph_back_btn_6").click(function(){
$(".ph_pop_6").hide();
$(".ph_pop_5").show();
});

$(".ph_can_btn_6").click(function(){
$(".ph_pop_6").hide();
$(".con_pop").hide();
location.reload(true);
});

// Ph box 7
$(".ph_next_btn_7").click(function(){
	$(".ph_pop_7").hide();
	$(".con_pop").hide();
	location.reload(true);

});




// GH POP 
$(".o_gh").click(function(){

if($(".status_gh").text() == "Processed" || $(".status_gh").text() == "" || $(".open_LOH_status").text() == 'Processed'){
	
  $(".con_pop").show();
  $(".gh_pop_1").show();

}


else{
	$(".con_pop").show();
  $(".alert_gh").show();
return false;
}

// if($(".status").text() == "Proccessed"){
//  $(".con_pop").show();
//   $(".gh_pop_1").show();
// }


// else{
// 	$(".con_pop").show();
//   $(".alert_gh_or").show();
//   $(".gh_pop_1").hide();
// return false;
// }





});


$(".gh_next_btn_1").click(function(){
var $account_1 = $(".ac_1");
var $account_2 = $(".ac_2");
if($account_2.prop("checked") != true){


}else{
  window.location.href = "Account.php"
}
if($account_1.prop("checked") != true){


}else{
  $(".gh_pop_1").hide();
  $(".gh_pop_2").show();
}

});


$(".gh_can_btn_1").click(function(){
  $(".con_pop").hide();
  $(".gh_pop_1").hide();
  location.reload(true);
});

// GH POP 2
$(".gh_back_btn_2").click(function(){
  $(".gh_pop_2").hide();
  $(".gh_pop_1").show();
});

$(".gh_can_btn_2").click(function(){
  $(".con_pop").hide();
  $(".gh_pop_2").hide();
  location.reload(true);
});

$(".gh_next_btn_2").click(function(){
// var $slecet_ac_name = $(".select_ac_name").val();

if($(".select_ac_name").val() == 0){
  alert("Go to Account Page And Add Account");
  return false;
}else{
  $(".gh_pop_2").hide();
  $(".gh_pop_2_2").show();
}


});


// GH BOX 2.2

$(".gh_back_btn_2_2").click(function(){
$(".gh_pop_2").show();
$(".gh_pop_2_2").hide();
});

$(".gh_can_btn_2_2").click(function(){
$(".con_pop").hide();
$(".gh_pop_2_2").hide();
location.reload(true);
});

$(".gh_next_btn_2_2").click(function(){
$(".gh_pop_2_2").hide();
$(".gh_pop_3").show();
});

// Change Currency System
$(".select_currency_gh").change(function(){
           var selectedCountry_1 = $(this).children("option:selected").val();

            if(selectedCountry_1 == "BTC"){
           $(".with_curen").text("BitCoin(BTC)");
            $(".with_curen_1").text("BTC");
            $(".mini_with").text("0.01");
             
        }

        if(selectedCountry_1 == "USD"){
            $(".with_curen").text("Dollar(USD)");
            $(".with_curen_1").text("USD");
            $(".mini_with").text("50");
             
        }
});


// GH BOX 3
$(".gh_back_btn_3").click(function(){
  $(".gh_pop_3").hide();
  $(".gh_pop_2_2").show();
});

$(".gh_can_btn_3").click(function(){
  $(".con_pop").hide();
  $(".gh_pop_3").hide();
  location.reload(true);
});

$(".gh_next_btn_3").click(function(){

// if($(".p_amnt_total").text() >= 49 || $(".p_amnt_total").text() >= 0.001){
// $(".alert_gh_or").show();
// $(".gh_pop_3").hide();


// }else{

  $(".gh_pop_3").hide();
  $(".gh_pop_4").show();
  // }
});

// GH BOX 4

$(".gh_back_btn_4").click(function(){
  $(".gh_pop_3").show();
  $(".gh_pop_4").hide();
});

$(".gh_can_btn_4").click(function(){
  // $(".gh_pop_3").hide();
  $(".gh_pop_4").hide();
  $(".con_pop").hide();
  location.reload(true);
});

$(".gh_next_btn_4").click(function(){
  $(".gh_pop_4").hide();
  $(".gh_pop_5").show();
  
});

// GH BOX 5

$(".gh_next_btn_5").click(function(){
  $(".gh_pop_5").hide();
  $(".con_pop").hide();
  location.reload(true);
});


// Select Amount
$(".select_amount_btn").click(function(){

  var selectedCountry = $(".select_currency").val();
  var $input_cur_1 = $(".input_cur_value").val();
  if (selectedCountry=="USD")
  {
    if (parseFloat($input_cur_1) > 5000 || parseFloat($input_cur_1) < 50)
    {
      alert ("Invalid USD value.");
      return false;
    }
        
    if (parseFloat($input_cur_1) % 10 != 0)
    {
      alert ("Invalid USD value.");
      return false;
    }
  }
  else if (selectedCountry=="BTC")
  {
    if (parseFloat($input_cur_1) > 1)
    {
      alert ("Invalid BTC more than one.");
      return false;
    }

    if (parseFloat($input_cur_1) < 0.01)
    {
      alert ("Invalid BTC less than .01");
      return false;
    }

    if (1)
    {
      var x = (parseFloat($input_cur_1) % 0.002);
      //alert(x.toFixed(3));
      if (x.toFixed(3)==.001)
      {
        alert ("Invalid BTC value.");
        return false;
      }  
    }
  }
  
  $(".lom").show();
  $(".selected_amnt").text($input_cur_1);
  $(".seleceted_am").val($input_cur_1);

  var $txt_put = $(".seleceted_am").val();
  $(".amont_Of_total").text($txt_put);
});



// GH/PH details

$(".open_ph_details").click(function(){
   $(".ph_details").show();
   $(".con_pop").show();
});

$(".open_gh_details").click(function(){
  $(".gh_details").show();
   $(".con_pop").show();
});


$(".gh_details_can_btn").click(function(){
  $(".con_pop").hide();
  $(".gh_details").hide();
});


$(".ph_details_can_btn").click(function(){
  $(".con_pop").hide();
  $(".ph_details").hide();
});

$(".ph_details_close").click(function(){
  $(".con_pop").hide();
  $(".ph_details").hide();
});

$(".gh_details_close").click(function(){
  $(".con_pop").hide();
  $(".gh_details").hide();
});

// GH/PH MSG
$(".msg_ph_box").click(function(){ //alert (123);
//$("#ph_msg_order_id").text();
$(".ph_msg").show();
$(".con_pop").show();

});

$(".ph_msg_close").click(function(){
  $(".ph_msg").hide();
$(".con_pop").hide();
});

$(".msg_gh_box").click(function(){
$(".gh_msg").show();
$(".con_pop").show();
  
});

$(".gh_msg_close").click(function(){
  $(".gh_msg").hide();
$(".con_pop").hide();
});

// PH/GH Confirm Order

//$(".ph_number").on('click',{param1: "Hello", param2: "World"}, cool_function);

// PH Comfirm
$(".ph_number").click(function(){ 
  $(".ph_o_c").slideToggle("slow");
});




$(".c_of_pay").click(function(){ 
$(".ph_gh_con_ord_container").show();
$(".ph_con_or").show();

});

$(".con_ph_can_btn").click(function(){
$(".ph_gh_con_ord_container").hide();
$(".ph_con_or").hide();
location.reload(true);

});

// $(".con_ph_next_btn").click(function(){
//   $(".ph_con_or_1").show();
// });


$(".con_ph_next_btn").click(function(){
var $con_img = $(".c_img").val();
var $change_img = $(".ph_order_img");
if($con_img == ""){
  alert("Please Add Image");
  return false;
}
else{
var $textarea = $("#textarea").val();
$(".textarea_value").text($textarea);
$(".ph_con_or_1").show();
$(".ph_con_or").hide();
}

});

$(".con_ph_can_btn_1").click(function(){
   $(".ph_gh_con_ord_container").hide();
$(".ph_con_or_1").hide();
location.reload(true);
});

$(".con_ph_next_btn_1").click(function(){
   $(".ph_gh_con_ord_container").hide();
$(".ph_con_or_1").hide();
location.reload(true);
});




// GH confirmation

$(".gh_number").click(function(){
  $(".gh_o_c").slideToggle("slow");
});

$(".gh_confirm_pop").click(function(){
  $(".ph_gh_con_ord_container").show();
  $(".gh_con_or").show();
});

$(".gh_con_can_btn").click(function(){
  $(".ph_gh_con_ord_container").hide();
  $(".gh_con_or").hide();
  location.reload(true);
});

$(".gh_con_ok_btn").click(function(){
  $(".ph_gh_con_ord_container").hide();
  $(".gh_con_or").hide();
  location.reload(true);
});

// open_LOH



$(".open_LOH").click(function(){
  $(".LOH").show();
  $(".con_pop").show();
});

$(".LOH_close").click(function(){
    $(".LOH").hide();
  $(".con_pop").hide();
  location.reload(true);
});


$(".LOH_can_btn").click(function(){
    $(".LOH").hide();
  $(".con_pop").hide();
  location.reload(true);
});

$(".LOH_next_btn").click(function(){
    var $LOH_text = $(".LOH_text").val();
    if($LOH_text != "")
    {
      //alert("Happiness of letter has submited");
      //$(".LOH").hide();
      //$(".con_pop").hide();

      $(".gh_req").css("background","linear-gradient(to bottom,rgba(255,255,255,1) 0%,rgba(241,241,241,1) 43%,rgba(225,225,225,1) 56%,rgba(246,246,246,1) 100%);");
      //location.reload(true);
    }
    else{
      alert("Please Fill Write Letter");
      return false;
    }
    $(".open_LOH").hide();
});

function totalWithdrawalAmt()
{
  var amt = parseFloat($(".p_amnt_inp").val());
  if (isNaN(amt)) amt=0;

  var amt1 = parseFloat($(".p_amnt_inp_1").val());
  if (isNaN(amt1)) amt1=0;
  
  var amt2 = parseFloat($(".p_amnt_inp_2").val());
  if (isNaN(amt2)) amt2=0;

  var amt5 = parseFloat($(".p_amnt_inp_5").val());
  if (isNaN(amt5)) amt5=0;

  var tot = amt+amt1+amt2+amt5;
  //alert (tot);
  $(".p_amnt_total").text(tot);
  $("#Total_gh_amount").val(tot);
}
// GH Payment option
$(".p_amnt_btn").click(function(){
var $amount_gh = $(".p_amnt").text();
$(".p_amnt_inp").val($amount_gh);
totalWithdrawalAmt();
});

$(".p_amnt_btn_1").click(function(){
var $amount_gh_1 = $(".p_amnt_1").text();
$(".p_amnt_inp_1").val($amount_gh_1);
totalWithdrawalAmt();
});
$(".p_amnt_btn_2").click(function(){
var $amount_gh_2 = $(".p_amnt_2").text();
$(".p_amnt_inp_2").val($amount_gh_2);
totalWithdrawalAmt();
});
$(".p_amnt_btn_3").click(function(){
var $amount_gh_3 = $(".p_amnt_3").text();
$(".p_amnt_inp_3").val($amount_gh_3);

});
$(".p_amnt_btn_4").click(function(){
var $amount_gh_4 = $(".p_amnt_4").text();
$(".p_amnt_inp_4").val($amount_gh_4);

});
$(".p_amnt_btn_5").click(function(){
var $amount_gh_5 = $(".p_amnt_5").text();
$(".p_amnt_inp_5").val($amount_gh_5);
totalWithdrawalAmt();
});
$(".p_amnt_btn_6").click(function(){
var $amount_gh_6 = $(".p_amnt_6").text();
$(".p_amnt_inp_6").val($amount_gh_6);

});

$(".p_amnt_btn_7").click(function(){
var $amount_gh_7 = $(".p_amnt_7").text();
$(".p_amnt_inp_7").val($amount_gh_7);

});








// Change Currency functions
$(".select_currency").change(function(){
           var selectedCountry = $(this).children("option:selected").val();

            if(selectedCountry == "BTC"){
             $("#btc_c").prop("disabled", true);
              $("#btc_c").prop("checked", true);
              $(".for_usd").hide();
              $(".for_btc").show();
              $(".selct_currency").text("BitCoin(BTC)");
               $(".chage_btw").text("0.01 to 1 BTC");
                $(".bonus_20").text("0.005");
            $(".bonus_50").text("0.013");
            $(".bonus_100").text("0.026");
            $(".usd_to_usd").text("0.025 -0.11");
            $(".usd_50").text("0.12 -0.5");
          $(".usd_100").text("0.51 -1 ");
          $(".fab").show();
          $(".selected_total_ammount").text("BTC");
          var $selected = $(".seleceted_am").val();
          $(".selected_total_ammount").text($selected + "BTC");
          $(".marvo_type").text("Marvo-BTC");
          // $(".mini_with").text("0.01");
             
        }

        if(selectedCountry == "USD"){
             $("#usd_c").prop("disabled", true);
              $("#usd_c").prop("checked", true);
              $(".for_usd").show();
              $(".for_btc").hide();
              $(".selct_currency").text("Dollar(USD)");
              $(".chage_btw").text("$50 to $5000");
               $(".bonus_20").text("$20");
            $(".bonus_50").text("$50");
            $(".bonus_100").text("$100");
            $(".fab").hide();
            $(".usd_to_usd").text("$100-$499");
            $(".usd_50").text("$500-$3100");
          $(".usd_100").text("$3200-$4000");
          $(".selected_total_ammount").text("USD");
          var $selected = $(".seleceted_am").val();
          $(".selected_total_ammount").text($selected + "USD");
          $(".marvo_type").text("Marvo-USD");
             // $(".mini_with").text("50");
        }
});

// Alert box
$(".alert_ok_ph").click(function(){
$(".con_pop").hide();
$(".alert_ph").hide();
location.reload(true);

});

$(".alert_ok_gh").click(function(){
$(".con_pop").hide();
$(".alert_gh").hide();
location.reload(true);

});

$(".alert_ok_gh_or").click(function(){
$(".con_pop").hide();
$(".alert_gh_or").hide();
location.reload(true);

});

// PH req details
$(".open_ph_req_del").click(function(){
  $(".con_pop").show();
  $(".ph_req_details").show();
});

$(".ph_req_det_close").click(function(){
  $(".con_pop").hide();
  $(".ph_req_details").hide();
  location.reload(true);
});

// GH req Details
$(".open_gh_req_del").click(function(){//alert (132);
  $(".con_pop").show();
  $(".gh_req_details").show();
});

$(".gh_req_det_close").click(function(){
  $(".con_pop").hide();
  $(".gh_req_details").hide();
  location.reload(true);
});
    
  // confirmation
  $(".cls_confirm").click(function(){
    $(".confirmation_box").show();
  });
  $(".confirmation_box_can").click(function(){
    $(".confirmation_box").hide();
  });

  // news box
  $(".news_box_close").click(function(){
    $(".con_pop").hide();
    $(".news_box").hide();
  });


});