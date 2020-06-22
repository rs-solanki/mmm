<?php 
include('../Inc/conn.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../Css/page%20style.css"/>  
    <link rel="stylesheet" href="../Css/add%20news%20style.css"/>  
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <title>Add News</title>
    </head>
<body style="background-color: #80808057;">
    <div class="container" style="height: auto;">
    <div class="main" style="">
    <div class="header"></div>    
        
        
    <div class="table" style="height: auto;background-color: white;">
      <table cellspacing="0" cellpadding="0" width="100%" border="0" id="table109" height="auto">
         <tr style="padding: 0px;">
    <td height="" width="400px" bgcolor="#333333" colspan="6">
    <b><font face="Verdana" size="2" color="#FFFFFF">UPDATE NEWS</font></b></td>
         
         <td height="" width="422" bgcolor="#333333">
				<p align="center"><b><font face="Arial" size="2">
				<a href="../index.php">
				<font size="2" color="#FFFFFF" face="Verdana">GO BACK TO MAIN MENU</font></a></font></b></p></td>
         
         <td height="" width="133" bgcolor="#333333" colspan="2">
					<p align="center"><b>
					<font face="Verdana" size="2" color="#FFFFFF">
					<a href="../login.html">
					<font color="#FFFFFF" face="Verdana" size="2">
					<span style="text-decoration: none">Logout</span></font></a></font></b></p></td>
    </tr>   
        </table>
        <div class="add_news_btn"><a href="new%20add%20news.php">Add News</a></div>

<?php 
$q = "SELECT * FROM news;";
$row = mysqli_query($con,$q);
while ($res = mysqli_fetch_array($row)) {
    

?>
<!-- <form method="POST"> -->
        <div class="newsbar" id="newsbar">
        <div class="news_sno"><span><?php echo $res['News_id']; ?></span></div>
            <div class="news_heading"><h4> <?php echo $res['News_title']; ?> <span> -----</span></h4><h5>	
<?php echo $res['News']; ?></h5></div>
            <div class="news_date"><?php echo $res['News_date']; ?><br>
             Dailog:<?php echo $res['Dialog']; ?>   
            </div>
            <div class="news_edit"><a href="edit%20news%20btn.php?title=<?php echo $res['News_title'];?>">Edit</a></div>
            <div class="news_del"><a href="delete.php?title=<?php echo $res['News_title']; ?>"><input type="submit" name="delete" value="Delete" style="background: none;"></a></div>
        
    </div> 
<!-- </form> -->
<?php } ?>
        
    </div>   
    
    <div class="footer">
        
    </div>    
    </div>
    
    </div>
   <!--  <script>
    function del_news(){
         swal("DELETE", "Your News Successfully deleted", "success");
        var news =document.getElementById('newsbar').style.display="none";
       
    }
    
    </script> -->
    </body>
</html>