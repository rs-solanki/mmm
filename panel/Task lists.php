<?php
include('Inc/conn.php');
?>

<?php

    $limit = 2; 
    
    if (isset($_GET["page"])) {  
      $pn  = $_GET["page"];  
    }  
    else {  
      $pn=1;  
    };   
  
    $start_from = ($pn-1) * $limit;   
  
    // $sql = "SELECT * FROM registration LIMIT $start_from, $limit";   
    // $rs_result = mysqli_query($con,$sql);  
  
  ?> 
<!DOCTYPE html>
<html>
<head>
	<title>Task List</title>
	<style type="text/css">
		.pagination li{float: left; margin-left: 5px;}
	</style>
</head>
<body>
<div class="task_lists">

<?php
$query  = "SELECT * FROM `mmmtask` LIMIT $start_from, $limit";
$run = mysqli_query($con,$query);
while ($reu = mysqli_fetch_array($run)) {

?>

 <div class="task_1" style="margin: 10px auto; border: 1px solid black;padding: 10px; box-sizing: border-box;">
        <h2><span class="task_number"><?php echo $reu['Task_name'];?></h2>    
          <span><i>Social Networks &gt;<?php echo $reu['Task_title'];?>  &gt; Repost a photo of our community on your page.</i></span> 
          <span style="margin-left: 100px;">Task Code: <b><?php echo $reu['Task_code'];?></b></span>
          <br><br>

            <span style="font-weight: 600;"><?php echo$reu['Task_tag'];?></span>
            <ol style="line-height: 25px">
            <li>Follow the link <a href='<?php echo$reu['Task_link'];?>'><?php echo$reu['Task_lnk_name'];?></a> Write an original comment to the photo and attach one of the three suggested <span style="font-weight: 600;">hashTags.</span>And Your referral link.</li>
                <li>Go to your page and click on the time when the comment(photo) was posted.</li>
                <li>Copy the result link, URL</li>
                <li>Paste result link.</li>
            
            </ol>
            
</div>
<?php } ?>

<ul class="pagination" style="list-style: none;"> 
      <?php   
        $sql = "SELECT COUNT(*) FROM mmmtask";   
        $rs_result = mysqli_query($con,$sql);   
        $roww = mysqli_fetch_row($rs_result);   
        $total_records = $roww[0];   
          
        // Number of pages required. 
        $total_pages = ceil($total_records / $limit);   
        $pagLink = "";                         
        for ($i=1; $i<=$total_pages; $i++) { 
          if ($i==$pn) { 
              $pagLink .= "<li class='active'><a href='Task lists.php?page="
                                                .$i."'>".$i."</a></li>"; 
          }             
          else  { 
              $pagLink .= "<li><a href='Task lists.php?page=".$i."'> 
                                                ".$i."</a></li>";   
          } 
        };   
        echo $pagLink;   
      ?> 
      </ul> 




</body>
</html>