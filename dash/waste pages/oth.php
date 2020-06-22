<?php
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


if($position8 == "Guider" && $indir <= 6){
  $q3 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$main_name8','$user_email','','0','','0','','','','None','$type_c','$amount','$bonus_3','$growth135','','$ph_date','','','Bonus', '')";
$uss = mysqli_query($con,$q3);

}
else{

}


?>