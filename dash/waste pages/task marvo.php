//Marvo 
$q1 = "SELECT * FROM ph WHERE Participant_email = '$user' AND record_type = 'Main'";
$run1 = mysqli_query($con,$q1);
$result = mysqli_fetch_array($run1);
$Amount = $result['Amount'];
$growth12 = $result['Amount']*2.67/100;
$type_c = $result['Type_c'];
$type = $result['Type'];

$q2 = "SELECT * FROM user_task WHERE user_name = '$user' AND Status = 'Confirm'";
$run2 = mysqli_query($con,$q2);
$result2 = mysqli_fetch_array($run2);
$rows = mysqli_num_rows($run2);

$marvo_id = sprintf('%05d',rand(1,9999999999));
$ph_id = sprintf('%05d',rand(1,9999999999));
$bonus_2 = "MMM EXTRA";
$ph_date= date('d-m-Y');

if($rows == 7){

$q3 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$user_name','$user','','0','','0','','','','None','$type_c','$Amount','$bonus_2','$growth12','','$ph_date','','','Bonus', '')";

 $runn = mysqli_query($con,$q3);

 $q3 = "UPDATE user_task SET Growth = '2.67%' WHERE user_name = '$user'";
 $runns = mysqli_query($son,$q3);

}else{

}

if($rows == 14){

$q3 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$user_name','$user','','0','','0','','','','None','$type_c','$Amount','$bonus_2','$growth12','','$ph_date','','','Bonus', '')";

 $runn = mysqli_query($con,$q3);

 $q3 = "UPDATE user_task SET Growth = '2.67%' WHERE user_name = '$user'";
 $runns = mysqli_query($son,$q3);

}else{

}

if($rows == 21){

$q3 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$user_name','$user','','0','','0','','','','None','$type_c','$Amount','$bonus_2','$growth12','','$ph_date','','','Bonus', '')";

 $runn = mysqli_query($con,$q3);

 $q3 = "UPDATE user_task SET Growth = '2.67%' WHERE user_name = '$user'";
 $runns = mysqli_query($son,$q3);

}else{

}

if($rows == 28){

$q3 = "INSERT INTO ph VALUES ('','$ph_id','$marvo_id','','$type','','','$user_name','$user','','0','','0','','','','None','$type_c','$Amount','$bonus_2','$growth12','','$ph_date','','','Bonus', '')";

 $runn = mysqli_query($con,$q3);

 $q3 = "UPDATE user_task SET Growth = '2.67%' WHERE user_name = '$user'";
 $runns = mysqli_query($son,$q3);

}else{

}

