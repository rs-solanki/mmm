<?php


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

if($roo >= 1){

echo '<script>alert("Not Refferal");</script>';


}

elseif($roww == 0) {
  
$q2 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$your_guider_nameee','$user_email','','0','','0','','','','None','$type_c','$amount','$bonus_2','$growth12','','$ph_date','','','Bonus', '')";

$runn = mysqli_query($con,$q2);

}



elseif($roww > 0 || $participantss != $your_guider_nameee) {
 
$q2 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$your_guider_nameee','$user_email','','0','','0','','','','None','$type_c','$amount','$bonus_2','$growth13','','$ph_date','','','Bonus', '')";

$runn = mysqli_query($con,$q2);


}


else{
echo '<script>alert("Not Refferal Again");</script>';


}




?>