<?php 
date_default_timezone_set('Asia/Kolkata'); 

function PH(){
global $con;
global $user_name;
global $user_email;
global $your_guider_nameee;
global $your_guider_email;
$ok = $_POST['ph_ok'];

$ph_id = sprintf('%05d',rand(1,9999999999));
$marvo_id = sprintf('%05d',rand(1,9999999999));
$order_id = sprintf('%05d',rand(1,9999999999));
$participant = $user_name;
$select_cur = $_POST['select_currencys'];
$payment_mood = $_POST['payment_mode'];
$amount = $_POST['amount_bln'];
$balance = $_POST['seleceted_am'];
$balance = $amount; 
$status = "Orders Created(+)";
$type_c = $_POST['type_c'];
$ph_date= date('d-m-Y');
$order_date = date('d/m/y h:i:s');
$type = "Unconfirm";
$bonus = "MARVO 30%";
$bonus_1 = "Registration Bonus";
$bonus_2 = "Refferal Bonus";
$order_date = date('d/m/y h:i:s');

$select = "SELECT Id FROM `ph` order by Id desc limit 1";
$run = mysqli_query($con,$select);
if (mysqli_num_rows($run))
{
$res = mysqli_fetch_array($run);
$id_last = $res['Id'] + 1;
}
else
$id_last="1";

// Registration Bonus

$reg = "SELECT * FROM ph WHERE Bonus = 'Registration Bonus' AND Participant_email = '$user_email'";
$run_q = mysqli_query($con,$reg);
$t_r = mysqli_num_rows($run_q);

if($t_r == 0){


if($amount >= 100 && $amount <= 499 && $type_c == "USD"){

$marvo_id_2 = sprintf('%05d',rand(1,9999999999));
$ph_id_2 = sprintf('%05d',rand(1,9999999999));
$growth = 20;


echo $q = "INSERT INTO `ph` VALUES ('1','$ph_id_2','$marvo_id_2','','$type','$select_cur','$payment_mood','$participant','$user_email','','0','','0','','','','None','$type_c','$growth','$bonus_1','$growth','','$ph_date','','','Reg', '')";
//exit();
$run = mysqli_query($con,$q);

}


if($amount >= 500 && $amount <= 3100 && $type_c == "USD"){

$marvo_id_2 = sprintf('%05d',rand(1,9999999999));
$ph_id_2 = sprintf('%05d',rand(1,9999999999));
$growth = 50;

$q = "INSERT INTO `ph` VALUES ('','$ph_id_2','$marvo_id_2','','$type','$select_cur','$payment_mood','$participant','$user_email','','0','','0','','','','None','$type_c','$growth','$bonus_1','$growth','','$ph_date','','','Reg', '')";

$run = mysqli_query($con,$q);

}


if($amount >= 3200 && $amount <= 5000 && $type_c == "USD"){

$marvo_id_2 = sprintf('%05d',rand(1,9999999999));
$ph_id_2 = sprintf('%05d',rand(1,9999999999));
$growth = 100;

$q = "INSERT INTO `ph` VALUES ('','$ph_id_2','$marvo_id_2','','$type','$select_cur','$payment_mood','$participant','$user_email','','0','','0','','','','None','$type_c','$growth','$bonus_1','$growth','','$ph_date','','','Reg', '')";

$run = mysqli_query($con,$q);

}

// BitCoin Bonus
if($amount >= 0.025 && $amount <= 0.11 && $type_c == "BTC"){

$marvo_id_3 = sprintf('%05d',rand(1,9999999999));
$ph_id_3 = sprintf('%05d',rand(1,9999999999));
$growth =  0.005;

$q = "INSERT INTO `ph` VALUES ('','$ph_id_3','$marvo_id_3','','$type','$select_cur','$payment_mood','$participant','$user_email','','0','','0','','','','None','$type_c','$growth','$bonus_1','$growth','','$ph_date','','','Reg', '')";

$run = mysqli_query($con,$q);

}


if($amount >= 0.12 && $amount <= 0.5 && $type_c == "BTC"){

$marvo_id_3 = sprintf('%05d',rand(1,9999999999));
$ph_id_3 = sprintf('%05d',rand(1,9999999999));
$growth =  0.013;

$q = "INSERT INTO `ph` VALUES ('','$ph_id_3','$marvo_id_3','','$type','$select_cur','$payment_mood','$participant','$user_email','','0','','0','','','','None','$type_c','$growth','$bonus_1','$growth','','$ph_date','','','Reg', '')";

$run = mysqli_query($con,$q);


}


if($amount >= 0.51 && $amount <= 1 && $type_c == "BTC"){

$marvo_id_3 = sprintf('%05d',rand(1,9999999999));
$ph_id_3 = sprintf('%05d',rand(1,9999999999));
$growth =  0.026;

$q = "INSERT INTO `ph` VALUES ('','$ph_id_3','$marvo_id_3','','$type','$select_cur','$payment_mood','$participant','$user_email','','0','','0','','','','None','$type_c','$growth','$bonus_1','$growth','','$ph_date','','','Reg', '')";

$run = mysqli_query($con,$q);



}

}else{

}
// End Registration bonus

if(isset($ok)){
  
  $select = "SELECT Id FROM `ph` order by Id desc limit 1";
  $run = mysqli_query($con,$select);
  if (mysqli_num_rows($run))
  {
  $res = mysqli_fetch_array($run);
  $id_last = $res['Id'] + 1;
  }

  $growth12 = $_POST['amount_bln']*10/100;

  $active  = 'Active';

 $q = "INSERT INTO `ph` VALUES ('$id_last','$ph_id','$marvo_id','$order_id','$type','$select_cur','$payment_mood','$participant','$user_email','','0','','0','','','','None','$type_c','$amount','$bonus','$amount','$balance','$ph_date','$order_date','$status','Main', '')";

 $run = mysqli_query($con,$q);

//update in Participant

 $q_2 = "UPDATE registration SET Ph_amount = $amount, Type_c = '$type_c' WHERE E_mail = '$user_email' ";
//exit();
 $up_part = mysqli_query($con,$q_2);

// Refferal Bonus

 $ac = "UPDATE registration SET Status = '$active' WHERE E_mail = '$user_email';";
 $gett = mysqli_query($con,$ac);



  $qus = "SELECT * FROM ph WHERE Participant = '$your_guider_nameee' AND Participant_email = '$user_email';";
  $rn = mysqli_query($con,$qus);
  $roo = mysqli_num_rows($rn);
  $rsl = mysqli_fetch_array($rn);
  $participantss = $rsl['Participant'];
  $Participant_email = $rsl['Participant_email'];

 $qi = "SELECT * FROM ph WHERE Participant = '$your_guider_nameee';";
 $ri = mysqli_query($con,$qi);
 $fet = mysqli_fetch_array($ri);
// $direct = $fet['Participant_email'];
 $roww = mysqli_num_rows($ri);
 $growth13 = $_POST['amount_bln']*7/100;

if($roo == 0){

 $q2 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$your_guider_nameee','$user_email','','0','','0','','','','None','$type_c','$amount','$bonus_2','$growth12','','$ph_date','','','Bonus', '')";

 $runn = mysqli_query($con,$q2);

 }


elseif($roww > 0) {
 
 $q2 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$your_guider_nameee','$user_email','','0','','0','','','','None','$type_c','$amount','$bonus_2','$growth13','','$ph_date','','','Bonus', '')";

 $runn = mysqli_query($con,$q2);

}


else{

 $q2 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$your_guider_nameee','$user_email','','0','','0','','','','None','$type_c','$amount','$bonus_2','$growth12','','$ph_date','','','Bonus', '')";

 $runn = mysqli_query($con,$q2);

}
//  End Refferal Bonus
// Guider Bonus
$bonus_3 = "Guider Bonus";
$growth13 = $_POST['amount_bln']*5/100;
$growth131 = $_POST['amount_bln']*3/100;
$growth132 = $_POST['amount_bln']*1/100;
$growth133 = $_POST['amount_bln']*0.5/100;
$growth134 = $_POST['amount_bln']*0.3/100;
$growth135 = $_POST['amount_bln']*0.01/100;

$qqq = "SELECT * FROM registration WHERE E_mail = '$user_email'";
$runns = mysqli_query($con,$qqq);
$rusee = mysqli_fetch_array($runns);
$Invte = $rusee['Invite_email'];
$indir = $rusee['Indir'];

$qqq2 = "SELECT * FROM registration WHERE E_mail = '$Invte'";
$runns2 = mysqli_query($con,$qqq2);
$rusee2 = mysqli_fetch_array($runns2);
$Invte2 = $rusee2['Invite_email'];


$qqq3 = "SELECT * FROM registration WHERE E_mail = '$Invte2'"; // Level 1
$runns3 = mysqli_query($con,$qqq3);
$rusee3 = mysqli_fetch_array($runns3);
$main_name = $rusee3['User_name'];
$position = $rusee3['Position'];
$Invte3 = $rusee3['Invite_email'];

$qqq4 = "SELECT * FROM registration WHERE E_mail = '$Invte3'"; // Level 2
$runns4 = mysqli_query($con,$qqq4);
$rusee4 = mysqli_fetch_array($runns4);
$main_name4 = $rusee4['User_name'];
$position4 = $rusee4['Position'];
$Invte4 = $rusee4['Invite_email'];

$qqq5 = "SELECT * FROM registration WHERE E_mail = '$Invte4'"; // Level 3
$runns5 = mysqli_query($con,$qqq5);
$rusee5 = mysqli_fetch_array($runns5);
$main_name5 = $rusee5['User_name'];
$position5 = $rusee5['Position'];
$Invte5 = $rusee5['Invite_email'];

$qqq6 = "SELECT * FROM registration WHERE E_mail = '$Invte5'"; // Level 4
$runns6 = mysqli_query($con,$qqq6);
$rusee6 = mysqli_fetch_array($runns6);
$main_name6 = $rusee6['User_name'];
$position6 = $rusee6['Position'];
$Invte6 = $rusee6['Invite_email'];

$qqq7 = "SELECT * FROM registration WHERE E_mail = '$Invte6'"; // Level 5
$runns7 = mysqli_query($con,$qqq7);
$rusee7 = mysqli_fetch_array($runns7);
$main_name7 = $rusee7['User_name'];
$position7 = $rusee7['Position'];
$Invte7 = $rusee7['Invite_email'];

$qqq8 = "SELECT * FROM registration WHERE E_mail = '$Invte7'"; // Level 6
$runns8 = mysqli_query($con,$qqq8);
$rusee8 = mysqli_fetch_array($runns8);
$main_name8 = $rusee8['User_name'];
$position8 = $rusee8['Position'];
$Invte8 = $rusee8['Invite_email'];

$qqq9 = "SELECT * FROM registration WHERE E_mail = '$Invte8'"; // Level 7
$runns9 = mysqli_query($con,$qqq9);
$rusee9 = mysqli_fetch_array($runns9);
$main_name9 = $rusee9['User_name'];
$position9 = $rusee9['Position'];
$Invte9 = $rusee9['Invite_email'];

$qqq10 = "SELECT * FROM registration WHERE E_mail = '$Invte9'"; // Level 8
$runns10 = mysqli_query($con,$qqq10);
$rusee10 = mysqli_fetch_array($runns10);
$main_name10 = $rusee10['User_name'];
$position10 = $rusee10['Position'];
$Invte10 = $rusee10['Invite_email'];

$qqq11 = "SELECT * FROM registration WHERE E_mail = '$Invte10'"; // Level 9
$runns11 = mysqli_query($con,$qqq11);
$rusee11 = mysqli_fetch_array($runns11);
$main_name11 = $rusee11['User_name'];
$position11 = $rusee11['Position'];
$Invte11 = $rusee11['Invite_email'];

$qqq12 = "SELECT * FROM registration WHERE E_mail = '$Invte11'"; // Level 10
$runns12 = mysqli_query($con,$qqq12);
$rusee12 = mysqli_fetch_array($runns12);
$main_name12 = $rusee12['User_name'];
$position12 = $rusee12['Position'];
$Invte12 = $rusee12['Invite_email'];

$qqq13 = "SELECT * FROM registration WHERE E_mail = '$Invte12'"; // Level 11
$runns13 = mysqli_query($con,$qqq13);
$rusee13 = mysqli_fetch_array($runns13);
$main_name13 = $rusee13['User_name'];
$position13 = $rusee13['Position'];
$Invte13 = $rusee13['Invite_email'];

$qqq14 = "SELECT * FROM registration WHERE E_mail = '$Invte13'"; // Level 12
$runns14 = mysqli_query($con,$qqq14);
$rusee14 = mysqli_fetch_array($runns14);
$main_name14 = $rusee14['User_name'];
$position14 = $rusee14['Position'];
$Invte14 = $rusee14['Invite_email'];

$qqq15 = "SELECT * FROM registration WHERE E_mail = '$Invte14'"; // Level 13
$runns15 = mysqli_query($con,$qqq15);
$rusee15 = mysqli_fetch_array($runns15);
$main_name15 = $rusee15['User_name'];
$position15 = $rusee15['Position'];
$Invte15 = $rusee15['Invite_email'];

$qqq16 = "SELECT * FROM registration WHERE E_mail = '$Invte15'"; // Level 14
$runns16 = mysqli_query($con,$qqq16);
$rusee16 = mysqli_fetch_array($runns16);
$main_name16 = $rusee16['User_name'];
$position16 = $rusee16['Position'];
$Invte16 = $rusee16['Invite_email'];

$qqq17 = "SELECT * FROM registration WHERE E_mail = '$Invte16'"; // Level 15
$runns17 = mysqli_query($con,$qqq17);
$rusee17 = mysqli_fetch_array($runns17);
$main_name17 = $rusee17['User_name'];
$position17 = $rusee17['Position'];
$Invte17 = $rusee17['Invite_email'];






if($position == "Guider"){

$q3 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$main_name','$user_email','','0','','0','','','','None','$type_c','$amount','$bonus_3','$growth13','','$ph_date','','','Bonus', '')";
$uss = mysqli_query($con,$q3);
}

else{
  
}


if($position4 == "Guider" && $indir == 2){
  $q3 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$main_name4','$user_email','','0','','0','','','','None','$type_c','$amount','$bonus_3','$growth131','','$ph_date','','','Bonus', '')";
$uss = mysqli_query($con,$q3);

}
else{

}


if($position5 == "Guider" && $indir == 3){
  $q3 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$main_name5','$user_email','','0','','0','','','','None','$type_c','$amount','$bonus_3','$growth132','','$ph_date','','','Bonus', '')";
$uss = mysqli_query($con,$q3);

}
else{

}


if($position6 == "Guider" && $indir == 4){
  $q3 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$main_name6','$user_email','','0','','0','','','','None','$type_c','$amount','$bonus_3','$growth133','','$ph_date','','','Bonus', '')";
$uss = mysqli_query($con,$q3);

}
else{

}


if($position7 == "Guider" && $indir == 5){
  $q3 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$main_name7','$user_email','','0','','0','','','','None','$type_c','$amount','$bonus_3','$growth134','','$ph_date','','','Bonus', '')";
$uss = mysqli_query($con,$q3);

}
else{

}


if($position8 == "Guider" && $indir == 6){
  $q3 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$main_name8','$user_email','','0','','0','','','','None','$type_c','$amount','$bonus_3','$growth135','','$ph_date','','','Bonus', '')";
$uss = mysqli_query($con,$q3);

}
else{

}

if($position9 == "Guider" && $indir == 7){
  $q3 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$main_name9','$user_email','','0','','0','','','','None','$type_c','$amount','$bonus_3','$growth135','','$ph_date','','','Bonus', '')";
$uss = mysqli_query($con,$q3);

}
else{

}

if($position10 == "Guider" && $indir == 8){
  $q3 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$main_name10','$user_email','','0','','0','','','','None','$type_c','$amount','$bonus_3','$growth135','','$ph_date','','','Bonus', '')";
$uss = mysqli_query($con,$q3);

}
else{

}

if($position11 == "Guider" && $indir == 9){
  $q3 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$main_name11','$user_email','','0','','0','','','','None','$type_c','$amount','$bonus_3','$growth135','','$ph_date','','','Bonus', '')";
$uss = mysqli_query($con,$q3);

}
else{

}

if($position12 == "Guider" && $indir == 10){
  $q3 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$main_name12','$user_email','','0','','0','','','','None','$type_c','$amount','$bonus_3','$growth135','','$ph_date','','','Bonus', '')";
$uss = mysqli_query($con,$q3);

}
else{

}


if($position13 == "Guider" && $indir == 11){
  $q3 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$main_name13','$user_email','','0','','0','','','','None','$type_c','$amount','$bonus_3','$growth135','','$ph_date','','','Bonus', '')";
$uss = mysqli_query($con,$q3);

}
else{

}

if($position14 == "Guider" && $indir == 12){
  $q3 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$main_name14','$user_email','','0','','0','','','','None','$type_c','$amount','$bonus_3','$growth135','','$ph_date','','','Bonus', '')";
$uss = mysqli_query($con,$q3);

}
else{

}

if($position15 == "Guider" && $indir == 13){
  $q3 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$main_name15','$user_email','','0','','0','','','','None','$type_c','$amount','$bonus_3','$growth135','','$ph_date','','','Bonus', '')";
$uss = mysqli_query($con,$q3);

}
else{

}

if($position16 == "Guider" && $indir == 14){
  $q3 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$main_name16','$user_email','','0','','0','','','','None','$type_c','$amount','$bonus_3','$growth135','','$ph_date','','','Bonus', '')";
$uss = mysqli_query($con,$q3);

}
else{

}

if($position17 == "Guider" && $indir == 15){
  $q3 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$main_name17','$user_email','','0','','0','','','','None','$type_c','$amount','$bonus_3','$growth135','','$ph_date','','','Bonus', '')";
$uss = mysqli_query($con,$q3);

}
else{

}

// End Marvo

if($run){
echo '<script>alert("PH ADDED");</script>';
echo '<script>window.open("Dash.php","_self");</script>';

}else{

  echo '<script>alert("PH Not ADD");</script>';
  echo '<script>window.open("Dash.php","_self");</script>';
}

}



// function end
}



?>