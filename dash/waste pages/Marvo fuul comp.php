<?php
include('Include/conn.php');
include('Include/user_details.php');
// include('ref.php');
if($user_status=="Block")
  header('location:/dash/Soppurt.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Marvo</title>
	<link rel="stylesheet" type="text/css" href="Css/marvo.css">
	<script type="text/javascript" src="Js/jquery-3.3.1.min.js"></script>

  <script type="text/javascript">
    function fillFutureTable(str) {
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
                if (this.readyState == 4 && this.status == 200) {
                    //alert (this.responseText);
                    document.getElementById("ph_future_growth").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","Include/dash_ajax_call.php?param_phid="+str,true);
            xmlhttp.send();
        }
    }
  </script>

</head>
<body>
<?php include('Include/header.php'); ?>
<div class="body">

<div class="tool_bar">
<a href="#" class="btn"><span class="info_icon">Transaction <?php echo $amount;?></span></a>
</div>

 <table style="width: 100%; border-collapse: collapse;" class="heading_table">
                  <thead>        
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
                           </thead> 
               <tbody>

<?php

$qeury = "SELECT * FROM `ph` WHERE (record_type='Main' OR record_type='Reg' OR record_type='Bonus') AND Participant = '$user_name';";
$table = mysqli_query($con, $qeury);
$rows= mysqli_num_rows($table);
if($rows != 0){
?>

 <?php
    $current_date = date('Y-m-d');

    while ($result = mysqli_fetch_assoc($table)) {
      $release_date="";
      $ph_date = date('Y-m-d', strtotime($result['PH_date']));
      $active_date = date('Y-m-d', strtotime($result['PH_date']. ' + 1 days'));
      
      if($result['record_type']=="Bonus" && $current_date>=$active_date)
        $release_date = date('Y-m-d', strtotime($active_date. ' + 30 days'));
      else if ($current_date>=$active_date)
        $release_date = date('Y-m-d', strtotime($active_date. ' + 14 days'));
      
      
      //exit();
      //echo $release_date ."-". $current_date;exit();
      //echo $current_date ."-". $result['PH_date'];exit();
      
      $date1=date_create($current_date); //("2013-03-15");
      $date2=date_create($release_date); //("2013-12-12");
      $diff=date_diff($date1,$date2);
      $remain_days = $diff->format("%a");
 
      $date3=date_create($active_date); //("2013-03-15");
      $date4=date_create($current_date); //("2013-12-12");
      $diff2=date_diff($date3,$date4);
      $growth_days = $diff2->format("%a");
      $growth_days++;
?>
  

         <tr class="data_row">
           <td>A<?php echo $result['Marvo_id'] ?></td> 
           <td><?php echo $result['Type'] ?></td>
           <td><?php echo $ph_date ?></td>
           <td><?php echo $release_date; ?></td>
           <td><?php echo $result['Amount'] ?>  <?php echo $result['Type_c'] ?></td>
           <td><a href="#"><?php echo $result['Bonus'] ?></a></td>

<?php 


?>

           <td>Z<?php echo $result['PH_id'] ?></td>



           <?php if (empty($release_date)){ ?>
              <td style="color: red;"><?php echo $result['Growth'] ?><?php echo $result['Type_c'] ?></td>
              <td></td>
           <?php } else{
              $pre_value = (float)((float)$result['Amount'] * $growth_days) / 100;
              $growth_val = (float)$result['Amount'] + (float)$pre_value;  
              if ($result['record_type'] == "Reg" || $result['record_type'] == "Bonus")
                $growth_val = $result['Amount'];

              if ($remain_days == 0)
              {
            ?>
                <td style="color: green;"><?php echo $growth_val ?><?php echo $result['Type_c'] ?></td>
              <?php } else { ?>
                  <td style="color: red;"><?php echo $growth_val ?><?php echo $result['Type_c'] ?></td>
               <?php } ?>   
                
            <td style="font-weight: 700;"><?php echo "Amount at the date of defrost.<br> Left until defrost: <br>(" . $remain_days. ")Days" ?></td>

          <?php } ?>

           <?php if ($result['record_type']=="Main"){ ?>
           <td><a href="#" onclick="fillFutureTable(<?php echo $result['PH_id'] ?>);" class="myfuture">Future</a></td>
           <td><a href="#">Comment</a></td>
           <?php } else { ?>
           <td><a href="#" class="myfuture1">Future</a></td>
           <td><a href="#">Comment</a></td> 
           <?php } ?>

         </tr>



<?php
   
    }

}else{


}

?>
</tbody>
</table>
</div>
<div style="position: fixed;bottom: 0; width: 100%; height: 40px;background: white; border-top: 1px solid black; padding-top: 5px;">
<span style="color: green;"><b>Green</b></span> -- avaliable for withdrawal; <span style="color: Blue;"><b>Blue</b></span> -- Frozen; <span style="color: red;"><b>Red</b></span> -- Not confirmed	
</div>
<div class="mask">
  <div class="ph_pop future_box" style="display: none; width: 400px;">
  <div class="ph_title"><span class="ph_title_icon">Future Growth</span>
    <a href="#" class="future_close">x</a>
  </div> 
  <div class="ph_content" style="height: 300px;overflow: auto;" id="ph_future_growth">
  
  </div>
</div>
</div>
 
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $(".myfuture").click(function(){
      $(".future_box").show();
      $(".mask").show();
    });

$(".future_close").click(function(){
  $(".future_box").hide();
      $(".mask").hide();
});


  });

</script>
</body>
</html>