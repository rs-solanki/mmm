<?php 
include('../Inc/conn.php');
include('../function/function.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../Css/page%20style.css"/>  
<link rel="stylesheet" href="../Css/new%20news%20add%20style%20.css"/>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <title>Add New News</title>
    </head>
<body style="background-color: #80808057;">
    <div class="container" style="height: auto;">
    <div class="main">
    <div class="header"></div>    
    <div class="table" style="height: auto; background-color: white;">
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
					<a href="../login.php">
					<font color="#FFFFFF" face="Verdana" size="2">
					<span style="text-decoration: none">Logout</span></font></a></font></b></p></td>
    </tr>   
        </table>
       <div class="main_area">
        <div class="news_box">
        <div class="news_update">News Upadte:</div> 
        <form method="POST"> 
          <div class="nws_heading"><span class="heading" style="font-weight: 900;">News ID:</span>  <input type="text" name="news_id" size="" style="background-color: #ADD2F1; width: 400px;" value=""></div> 
        <div class="nws_heading"><span class="heading" style="font-weight: 900;">Heading:</span>  <input type="text" name="headline" size="" style="background-color: #ADD2F1; width: 400px;" value=""></div>   
          <div class="main_news"><span class="heading_news" style="font-weight: 900;">News:</span>    <textarea name="news" rows="6" cols="40" style="color: #000000; font-family: Verdana; font-size: 10pt; background-color: #ADD2F1;"></textarea></div> 
            <div class="Regards"><span class="heading_news" style="font-weight: 900;">Regards:</span>  <input type="text" name="regards" size="" style="background-color: #ADD2F1; width: 400px;" value="Best Regards, MMMGLOBAL &amp; CRO Team."></div>
            <div style="padding: 20px 90px;"><input type="submit" name="add_news" value="Add News" style="font-family: Verdana; color: #000000; font-size: 10pt; font-weight: bold"></div>
            </form>
            <?php addNews(); ?>
           </div>
        </div>
        
    </div>    
    <div class="footer"></div>    
    </div>
    
    </div>
    <!-- <script>
      function add_news(){
        swal("Add News Successfully","",  "success");
    }
    
    
    </script> -->
    </body>
</html>