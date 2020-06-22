<?php
include('../Inc/conn.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../Css/page%20style.css"/>  
     <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <title>Reply</title>
    <style>body{padding: 0px; margin: 0px; }</style>    
    </head>
<body>
    <div class="container" style="padding: 0px;">
    <div class="main" style="padding: 0px;">
    <div class="header"></div>  
    <?php
    $email = $_GET['email'];
$qeury = "SELECT * FROM registration WHERE E_mail = '$email'";
$table = mysqli_query($con, $qeury);
$run = mysqli_fetch_array($table);


    ?>
    <form method="POST">    
    <div class="table" style="border: 1px solid black; box-sizing: border-box; padding: 10px 20px; height: 340px;">
    <b>Mobile:</b> <input type="text" name="txtmobile" size="39" value="<?php echo $run['Mobile_number']; ?>"><br> <br>   
    <b>Email:</b>&nbsp;  <input type="text" name="txtemail" size="39" value="<?php echo $run['E_mail']; ?>"><br>  <br>
    <b>Subject:</b> <input type="text" name="txtsubject" size="39" value="Reply From ny-ff.com">  
        <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Welcome to ny-ff.com</p>
        
        <b style="display: block;">Message:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea rows="6" name="txtmessage" cols="43"> Your login details are  : 
 User ID : suhuan
 Password : plus3456
 Security Code : plus3456
 Regards 
        www.ny-ff.com </textarea><br><br>
        <input type="submit" value="Send" name="B1" style="margin-left: 70px;">
    
    </div>    </form>
    <div class="footer"></div>    
    </div>
    
    </div>
    </body>
</html>