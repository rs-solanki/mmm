<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
//print_r($_GET);exit();
$ph_id = intval($_GET['param_phid']);

$con = mysqli_connect('localhost','root','','mmm');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM  ph WHERE record_type='Main' AND PH_id = '".$ph_id."'";
$result = mysqli_query($con,$sql);
$counter=1;
while($row = mysqli_fetch_array($result)) {
	$type = $row['Type_c'];
	$html_txt = '<table  class="future_table"  style="width: 100%; border-collapse: collapse;">';
	$html_txt .= '<tr>
					<th style="background:white;padding:5px">Date</th>
					<th style="background:white;">Days</th>
					<th style="background:white;">Growth</th>
				  </tr>';
	$amt = (float)$row['Amount']; $next_date="";$days=1;
	for($counter=0; $counter<=30; $counter++)
	{
		if ($next_date == "")
		{			
			$next_date = date('d-m-Y', strtotime($row['PH_date']. ' + 0 days'));	
			$growth_val = $row['Amount'];
		}
		$html_txt .= '<tr>
				    <th>'.$next_date.'</th>
				    <th>'.$counter.'</th>
				    <th>'.$growth_val.'-<span>'.$type.'</span></th>
					</tr>';				  
		$pre_value = (float)((float)$amt * $days) / 100;
        $growth_val = (float)$amt + (float)$pre_value;		  
		//$amt = number_format($growth_val,2);
		$next_date = date('d-m-Y', strtotime($next_date. ' + 1 days'));
		$days++;		  
?>

<?php }
	$html_txt .='</table>';
} ?>

<?php
mysqli_close($con);
echo $html_txt;
?>
</body>
</html>