<?php 
include('../Inc/conn.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../Css/page%20style.css"/>  
<link rel="stylesheet" href="../Css/edit%20news%20btn.css"/>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <title>Edit News</title>
    </head>
<body style="background-color: #80808057;">
    <div class="container" style="height: auto;">
    <div class="main">
    <div class="header"></div>  
        
        
    <div class="table" style="height: auto;">
      <table cellspacing="0" cellpadding="0" width="100%" border="0" id="table109" height="auto">
         <tr style="padding: 0px;">
    <td height="" width="400px" bgcolor="#333333" colspan="6">
    <b><font face="Verdana" size="2" color="#FFFFFF">News & Updates:</font></b></td>
         
         <td height="" width="422" bgcolor="#333333">
				<p align="center"><b><font face="Arial" size="2">
				<a href="add news.php">
				<font size="2" color="#FFFFFF" face="Verdana">GO BACK TO MAIN MENU</font></a></font></b></p></td>
         
         <td height="" width="133" bgcolor="#333333" colspan="2">
					<p align="center"><b>
					<font face="Verdana" size="2" color="#FFFFFF">
					<a href="../login.html">
					<font color="#FFFFFF" face="Verdana" size="2">
					<span style="text-decoration: none">Logout</span></font></a></font></b></p></td>
    </tr>   
        </table>
       <div class="main_area" style="background-color: white;">
        <div class="news_box" style="height: auto;">
        <div class="news_update" style="background-color: black;">News Upadte:</div> 
<?php
$title = $_GET['title'];

$q = "SELECT * FROM news WHERE News_title = '$title'";
$row = mysqli_query($con,$q);
$run = mysqli_fetch_array($row);
?>

        <form method="POST">
        <div style="font-weight: 700; margin: 10px 0px 10px 20px;">News ID: <span class="news_number" style="margin-left: 20px;"><?php echo $run['News_id'];?></span></div>    
        <div style="font-weight: 700; margin: 10px 0px 10px 20px;">Date: <input type="text" style="margin-left: 20px;" value="<?php echo $run['News_date'];?>"></div>        
        <div class="nws_heading"><span class="heading" style="font-weight: 900;">Heading:</span>  <input type="text" name="headline" size="70" style="background-color: #ADD2F1" value="<?php echo $run['News_title'];?>"></div>   
          <div class="main_news"><span class="heading_news" style="font-weight: 900;">News:</span>    <textarea name="news" rows="6" cols="40" style="color: #000000; font-family: Verdana; font-size: 10pt; background-color: #ADD2F1"><?php echo $run['News'];?></textarea></div> 
            <div class="Regards"><span class="heading_news" style="font-weight: 900;">Show in News Dialog Box:</span>  <select size="1" name="cmddgnews">
							<option selected="" value="Yes">YES</option>
							<option value="No">NO</option>
							</select></div>
            <div style="padding: 20px 90px;"><input type="submit" name="confirm" value="Confirm Edit" style="font-family: Verdana; color: #000000; font-size: 10pt; font-weight: bold" onclick="update_news();"><input type="submit" name="cancel" value="Cancel" style="font-family: Verdana; color: #000000; font-size: 10pt; font-weight: bold"></div>
            
           </div>
           </form>
 <?php 
$title = $_GET['title'];
    
 $di = $_POST['cmddgnews'];   

if(isset($_POST['confirm'])){

$q = "UPDATE `news` SET  Dialog = '$di' WHERE News_title = '$title'";

$run = mysqli_query($con,$q);

if($run){
echo '<script>alert("Edit News Successfully");</script>';
  echo '<script>window.open("add news.php","_self");</script>';

}else{
echo '<script>alert("Edit News Not Successfully");</script>';
  echo '<script>window.open("add news.php","_self");</script>';

}

}


            ?>


        </div>
        
    </div>    
    <div class="footer"></div>    
    </div>
    
    </div>
    <script>
    function update_news(){
        swal("Update News Successfully","",  "success");
    }
    
    
    </script>
    </body>
</html>