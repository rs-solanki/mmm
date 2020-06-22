<?php
include('Include/conn.php');
include('Include/user_details.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>loking</title>
	<style type="text/css">
		table th,td{padding: 10px; box-sizing: border-box;}
		body{background: white;margin: 0px; padding: 0px;}
	</style>
</head>
<body>
<table width="100%" style="border-collapse: collapse;" border="1">
<tr>
                                    <th>ID</th>
                                    <th>Type</th>
                                    <th>Date of creating</th>
                                    <th>Release date</th>
                                    <th>Principle amount</th>
                                    <th>Wallet</th>
                                    <th>Description</th>
                                    <th>On Current Date</th>
                                    <th>On Realease Date</th>
                                    <th>Future</th>
                                    <th>Comment</th>
                                </tr>	

<?php

$qeury = "SELECT * FROM `ph` WHERE (record_type='Main' OR record_type='Reg' OR record_type='Bonus') AND Participant = '$user_name';";
$table = mysqli_query($con, $qeury);
$rows= mysqli_num_rows($table);

 while ($result = mysqli_fetch_assoc($table)) {
   
?>
<?php

$color = "red";
$release_date = "";
$current_date = date('d-m-Y');
$ph_date = $result['PH_date'];

// if($result['Growth'] == 50 && $result['Growth'] == 100 && $result['Bonus'] == "Registration Bonus" || $result['Growth']  == 0.013   && $result['Growth']  == 0.026 && $result['Bonus'] == "Registration Bonus")
// {
//       $release_date = date('d-m-Y', strtotime($ph_date. ' + 30 days'));	
// }
// else{
// 	     $release_date = date('d-m-Y', strtotime($ph_date. ' + 15 days'));
//     }

// For Growth Date
      $date3=date_create($ph_date); 
      $date4=date_create($current_date); 
      $diff2=date_diff($date3,$date4);
      $growth_days = $diff2->format("%a");
      $growth_val = $amount + $growth_days;

// if($result['Bonus'] == "Registration Bonus")
// {
//   	$growth_val = $result['Amount'];
// 	   // $color = "green";
// }
// else{
//   $growth_val;
// }
      // For Lokcing Period 
      $date1=date_create($current_date); 
      $date2=date_create($release_date); 
      $diff=date_diff($date1,$date2);
      $remain_days = $diff->format("%a"); 


?>

                                    <tr>
                                    <th>A<?php echo $result['Marvo_id'] ?></th>
                                    <th><?php echo $result['Type'] ?></th>
                                    <th><?php echo$result['PH_date'];?></th>

<?php
if($result['Growth'] == 50 && $result['Growth'] == 100 && $result['Bonus'] == "Registration Bonus" || $result['Growth']  == 0.013   && $result['Growth']  == 0.026 && $result['Bonus'] == "Registration Bonus")
{
      $release_date = date('d-m-Y', strtotime($ph_date. ' + 30 days')); 
?>

                                    <th><?php echo $release_date; ?></th>

<?php 
}else{ $release_date = date('d-m-Y', strtotime($ph_date. ' + 15 days'));
?>    
                                     <th><?php echo $release_date; ?></th>

<?php } ?>                                
                                    <th><?php echo $result['Amount'] ?>  <?php echo $result['Type_c'] ?></th>
                                    <th><?php echo $result['Bonus'] ?></th>
                                    <th><?php echo$result['PH_id'];?></th>

<?php 
if($remain_days == 0 || $current_date>$release_date && $result['Bonus'] == "Registration Bonus"){
	$color = "green";
    $growth_val = $result['Amount'];

?>

                                    <th style="color: <?php echo $color; ?>"><?php echo $growth_val; ?></th>


<?php 
}else{
  $growth_val;

?>

  <th style="color: <?php echo $color; ?>"><?php echo $growth_val; ?></th>

<?php  } ?>


<?php
if($current_date > $release_date){
	$remain_days = 0;


?>
                                    <th><?php echo 'Left Days: '.$remain_days.''; ?></th>
<?php  
}
else{
 

 ?>

<th><?php echo 'Left Days: '.$remain_days.''; ?></th>
<?php } ?>

                                    <th>Future</th>
                                    <th>Comment</th>
                                </tr>

<?php }  ?>





</table>
</body>
</html>