<?php 


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


?>