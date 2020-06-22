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
<a href="#" class="btn avail"><span class="avail_icon">Available for withdrawal</span></a>
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
                      $qeury = "SELECT * FROM `ph` WHERE  Participant = '$user_name';";
                      $table = mysqli_query($con, $qeury);
                      $rows= mysqli_num_rows($table);
                      $color = "red";
                      $release_date = "";
                      $current_date = date('Y-m-d'); // 31-08-2019

                      while ($result = mysqli_fetch_assoc($table)) {
                             $amount = $result['Amount'];
                             $bonus = $result['Bonus'];
                             $growth = $result['Growth'];
                             $balance = $result['Balance'];
                             $status = $result['Status'];
                             $type = $result['Type'];
                             $ph_date = date('Y-m-d', strtotime($result['PH_date'])); // 29-08-2019

                                

              ?>

              <?php
                    // For Growth
                    $date1=date_create($ph_date); // 29-08-2019
                    // date_format($date3,'d-m-Y');
                    $date2=date_create($current_date); // 31-08-2019
                    $diff=date_diff($date1,$date2);
                    $growth_days = $diff->format("%a");// 2 days
                    // $growth_val = $amount + $growth_days;
                     $pre_value = (float)((float)$result['Amount'] * $growth_days) / 100;
                    $growth_val = (float)$result['Amount'] + (float)$pre_value; 


                    // For Locking 15 days
                    $release_date = date('Y-m-d', strtotime($ph_date. ' + 15 days'));
      
                    $date3=date_create($current_date); // 31-08-2019 
                    $date4=date_create($release_date); 
                    // date_format($date4, 'd-m-Y');
                    $diff2=date_diff($date3,$date4);
                    $remain_days = $diff2->format("%a");

                    // For Locking 30 days
                    $release_date2 = date('Y-m-d', strtotime($ph_date. ' + 30 days'));
      
                    $date32=date_create($current_date); // 31-08-2019 
                    $date42=date_create($release_date2); 
                    // date_format($date4, 'd-m-Y');
                    $diff22=date_diff($date32,$date42);
                    $remain_days2 = $diff22->format("%a")


             ?>
    
       <tr>
            <td>A<?php echo $result['Marvo_id']; ?></td>
            <td><?php echo $result['Type']; ?></td>
            <td><?php echo $ph_date; ?></td>
            
            <!-- Resele Date -->
            <?php 
                  if( $growth == 50 || $growth == 100 && $bonus == 'Registration Bonus'){ 
                    $release_date = date('Y-m-d', strtotime($ph_date. ' + 30 days')); 
            ?> 

            <td><?php echo $release_date; ?></td>

           <?php
                } elseif ($growth == 0.013 && $result['record_type'] == 'Reg' || $growth == 0.026 && $result['record_type'] == 'Reg' || $bonus == "Video Bonus") {
                    $release_date = date('Y-m-d', strtotime($ph_date. ' + 30 days')); 
           ?> 
                <td><?php echo $release_date; ?></td>

           <?php
              } elseif ( $status == 0 && $balance == "admin" || $bonus == 'MMM EXTRA' || $bonus == "Guider Bonus") {
                $release_date = date('Y-m-d', strtotime($ph_date. ' + 1 days')); 
              
           ?>     

            <td><?php echo $release_date; ?></td>

           <?php
               } elseif ($status == 30 && $balance == "admin") {
                  $release_date = date('Y-m-d', strtotime($ph_date. ' + 30 days'));
           ?> 

             <td><?php echo $release_date; ?></td>


           <?php
               } elseif ($status == 14 && $balance == "admin") {
                  $release_date = date('Y-m-d', strtotime($ph_date. ' + 15 days'));

           ?>  
              <td><?php echo $release_date; ?></td>

            <?php 
              }else{ $release_date = date('Y-m-d', strtotime($ph_date. ' + 15 days'));     
            ?>   

            <td><?php echo $release_date; ?></td>

            <?php } ?> 

             <!-- End Reselise Date -->

            <td><?php echo $result['Amount']; ?> <?php echo $result['Type_c'] ?></td>
            <td><a href="#"><?php echo $result['Bonus']; ?></a></td>
            <td>Z<?php echo $result['PH_id']; ?></td>
            <!-- Growth -->
            <?php
            if($bonus == "Registration Bonus" || $balance == "admin"){
              $growth_val = $amount;
                if($remain_days2 == 0 || $current_date>$release_date){
                  $color = "green";

            ?>
           <?php } else { $color = "red" ;}?>

            <td style="color: <?php echo $color; ?>"><?php echo $growth_val; ?> <?php echo $result['Type_c'] ?></td>

           <?php
              } elseif ($bonus == "Refferal Bonus" || $bonus == "Guider Bonus" || $bonus == "MMM EXTRA") {
                $growth_val = $growth;
                if($result['Type'] == 'Confirm'){
                  $color = "green";
           ?> 
           <?php } else { $color = "red" ;}?>
              <td style="color: <?php echo $color; ?>"><?php echo $growth_val; ?> <?php echo $result['Type_c'] ?></td>

           <?php
               } elseif ($bonus == "Video Bonus") {
                 $growth_val = $growth;
                 if($remain_days2 == 0 || $current_date>$release_date){
                  $color = "green";
           ?>    
              <?php } else { $color = "red" ;}?>
                      <td style="color: <?php echo $color; ?>"><?php echo $growth_val; ?> <?php echo $result['Type_c'] ?></td>
          <?php 
                } else{
                  
           ?>
                <td style="color: <?php echo $color; ?>"><?php echo $growth_val; ?> <?php echo $result['Type_c'] ?></td>

           <?php } ?> 
          
            <!-- End Growth -->
            <!-- Locking  -->
            <?php 
                  if( $growth == 50 && $bonus == 'Registration Bonus' || $growth == 100 && $bonus == 'Registration Bonus' || $growth == 0.013 && $bonus == 'Registration Bonus' || $growth == 0.026 && $bonus == 'Registration Bonus' || 
                     $bonus == "Video Bonus"){ 
                    if($current_date > $release_date){
                      $remain_days2 = 0;

                      
            ?> 

            <?php 
                  }
            ?>
            <td style="font-weight: 600;"><?php echo "Amount at the date of defrost.<br> Left until defrost: <br>(".$remain_days2. ")Days" ?></td>

           <?php 
            } elseif ($bonus == "Refferal Bonus" || $balance == "admin" || $bonus == "Guider Bonus" || $bonus == "MMM EXTRA") {
                    $remain_days_bonus = "";
           ?>         
                  <td style="font-weight: 600;"><?php echo  $remain_days_bonus; ?></td>
          <?php 
              } else{
                if($current_date > $release_date){
                  $remain_days = 0;
          ?>
        <?php } ?>
              <td style="font-weight: 600;"><?php echo "Amount at the date of defrost.<br> Left until defrost: <br>(".$remain_days.")Days" ?></td>

           <?php }  ?>   

            <!-- End Locking -->
           <?php if ($result['record_type']=="Main"){ ?>
           <td><a href="#" onclick="fillFutureTable(<?php echo $result['PH_id'] ?>);" class="myfuture">Future</a></td>
           <td><a href="#">Comment</a></td>
           <?php } else { ?>
           <td><a href="#" class="myfuture1">Future</a></td>
           <td><a href="#">Comment</a></td> 
           <?php } ?>
        </tr>
             <?php } ?>
</tbody>             
</table>
</div>
<div style="position: fixed;bottom: 0; width: 100%; height: 40px;background: white; border-top: 1px solid black; padding-top: 5px;">
<span style="color: green;"><b>Green</b></span> -- avaliable for withdrawal; <span style="color: Blue;"><b>Blue</b></span> -- Frozen; <span style="color: red;"><b>Red</b></span> -- Not confirmed	
</div>
<div class="mask" style="display: none;">
  <div class="ph_pop future_box" style="display: none; width: 400px;">
  <div class="ph_title"><span class="ph_title_icon">Future Growth</span>
    <a href="#" class="future_close">x</a>
  </div> 
  <div class="ph_content" style="height: 300px;overflow: auto;" id="ph_future_growth">
  
  </div>
</div>

<!-- withdrawal -->
<div class="ph_pop availbox" style="display: none; width: 600px;">
  <div class="ph_title"><span class="ph_title_icon">Available Withdrawal</span>
    <a href="#" class="future_close">x</a>
  </div> 
  <div class="ph_content" style="height: 100px;overflow: auto;" id="ph_future_growth">
  <span></span>
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

$(".avail").click(function(){
  $(".availbox").show();
      $(".mask").show();
});


  });

</script>

</body>
</html>