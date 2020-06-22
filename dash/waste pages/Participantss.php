<?php
include('Include/conn.php');
include('Include/user_details.php');
?>
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="Css/Participant.css">
    
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="Css/respon%20parti.css"/>
    <script src="js/jquery-3.3.1.min.js"></script>
    
    <script src="Js/partcipant.js"></script>
<title>Participant</title>
</head>

<body>
    <div class="body">
               <?php include('Include/header.php');?>
      <div class="name_bar">
       
          <div class="work_area">
              
          <div class="member_list" id="member_list">
              
          <div class="header_name">
            <div class="panel-title">Groups</div>
              <div class="icon_bar_2">
              <a href="#" id="hideside" onclick="closeSide_bar();"></a>
              </div>
              </div>
              <?php

$particapnt = "SELECT * FROM  registration WHERE Invite_email = '$user'";
      $run_parti = mysqli_query($con,$particapnt);
      $rows = mysqli_num_rows($run_parti);
      $pati_row = mysqli_fetch_array($run_parti);


              ?>



              <div class="panel_body">
              <ul class="member_tree">
            <li id="parent_tree" class=""><div class="tree_node"><span class="icon_m caret"><span class="member_number"><?php echo $user_name; ?> (<?php echo $rows; ?>)</span></span></div>

     <?php 

$select = "SELECT * FROM `registration` WHERE Invite_email = '$user' ;";
$run = mysqli_query($con,$select);
// $row = mysqli_fetch_array($run);

$row = mysqli_num_rows($run);

 for ($j = 0 ; $j < $row ; ++$j)
 {
 

 $res = mysqli_fetch_array($run);



?>            








       <ul class="nested" style="list-style: none;">
      <li><div class="tree_node"><span class="icon_m caret"><span class="member_number"><?php echo $res['User_name']; ?> (<?php echo 0; ?>)</span></span></div></li>  
       </ul>



<?php } ?>



</li> 
     


                  
            </ul>
              
              </div>
              
              </div>
              
              <div class="member_info">
               <div class="hide_bar" id="hide_bar">
              <div class="icon_bar">
               <div class="icon_logo">
                <a href="#" id="sidebar" onclick="openSide_bar();"></a>  
                </div>
               </div>
              </div>
                  <div class="data_toolbar">
                  <div class="search_bar">
                      <a href="#" class="search_manu">
                      <span class="search_btn"><span class="search_text">Search<span class="droarrow"></span></span></span>
                      </a><input type="text" placeholder="Search Participant" class="pin"><span class="search_iconn">&nbsp;</span>
                      </div>
                  </div>
                  <div class="participant_name">
                  <div class="participant_area">
                      <div class="data_header">
                        <table border="0" cellspacing="0" cellpadding="0" style="height: 22px;">
                                                <tbody>
                                                    <tr>
                                                        <td field="t" class=""><div class="datagrid-cell" style="width: 74px; text-align: left;"><span>Position</span><span class="datagrid-sort-icon">&nbsp;</span></div></td>
                                                        <td field="n" class=""><div class="datagrid-cell" style="width: 241px; text-align: left;"><span>Account Name</span><span class="datagrid-sort-icon">&nbsp;</span></div></td>
                                                        <td field="e" class=""><div class="datagrid-cell" style="width: 201px; text-align: left;"><span>Email</span><span class="datagrid-sort-icon">&nbsp;</span></div></td>
                                                        <td field="m"><div class="datagrid-cell" style="width: 95px; text-align: left;"><span>Cell number</span><span class="datagrid-sort-icon">&nbsp;</span></div></td>
                                                        <td field="note"><div class="datagrid-cell" style="width: 95px; text-align: left;"><span>Level</span><span class="datagrid-sort-icon">&nbsp;</span></div></td>
                                                        <td field="p" style="display: none;"><div class="datagrid-cell" style="width: 151px; text-align: left;"><span>Guider</span><span class="datagrid-sort-icon">&nbsp;</span></div></td>
                                                        <td field="ic"><div class="datagrid-cell" style="width: 95px; text-align: left;"><span>Country</span><span class="datagrid-sort-icon">&nbsp;</span></div></td>
                                                        <td field="ir"><div class="datagrid-cell" style="width: 95px; text-align: left;"><span>Current Help Amount</span><span class="datagrid-sort-icon">&nbsp;</span></div></td>
                                                        <td field="r"><div class="datagrid-cell" style="width:181px; text-align: left;"><span>Referrer</span><span class="datagrid-sort-icon">&nbsp;</span></div></td>
                                                        <td field="s"><div class="datagrid-cell" style="width: 74px; text-align: left;"><span>Status</span><span class="datagrid-sort-icon">&nbsp;</span></div></td>
                                                        <td field="d"><div class="datagrid-cell" style="width: 80px; text-align: left;"><span>Date of Joining</span><span class="datagrid-sort-icon">&nbsp;</span></div></td>

                                                    </tr>
                                                </tbody>
                                            </table>
                      </div>
                      <table class="table_info" style="margin-left: -2px;">
                      <tr><td><div style="width: 74px; text-align: left; height: auto;" class="datagrid-cell">Member</div></td>
                        <td field="n"><div style="width: 239px; text-align: left; height: auto;" class="datagrid-cell ">Rajat upadhyay</div></td>
                          <td field="e"><div style="width: 199px; text-align: left; height: auto;" class="datagrid-cell ">Cktiwari4022@gmail.com</div></td>
                          <td field="m"><div style="width: 94px; text-align: left; height: auto;" class="datagrid-cell ">(+91)7355707844</div></td>
                          <td field="note"><div style="width: 94px; text-align: left; height: auto;" class="datagrid-cell ">6</div></td>
                          <td field="ic"><div style="width: 94px; text-align: left; height: auto;" class="datagrid-cell ">INDIA</div></td>
                          <td field="ir"><div style="width: 94px; text-align: left; height: auto;" class="datagrid-cell "> <?php echo $resy['User_name'];?> </div></td>
                          <td field="r"><div style="width:179px; text-align: left; height: auto;" class="datagrid-cell ">Tiwarisrk@gmail.com</div></td>
                          <td field="s"><div style="width: 73px; text-align: left; height: auto;" class="datagrid-cell ">Register</div></td>
                          <td field="d"><div style="width: 79px; text-align: left; height: auto;" class="datagrid-cell ">03.12.2018</div></td>
                          
                        </tr>
                      
                      </table>
                      
                      </div>
                  </div>
            
              </div>
          </div>
        </div>
    </div>
      
<script type="text/javascript">
  
var toggler = document.getElementsByClassName("caret");
var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");
  });
}

</script>

    </body> 
        
</html>
