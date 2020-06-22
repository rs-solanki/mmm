<?php
include('Inc/conn.php');
$email = $_GET['email'];
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="Css/page%20style.css"/>    
    <link rel="stylesheet" href="Css/delete%20manager%20style.css"/>
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <title>Delete Manager</title>
    </head>
<body>
    <div class="container">
    <div class="main">
    <div class="header"></div>    
    <div class="table" style="height: auto;">
     <table cellspacing="0" cellpadding="0" width="100%" border="0" id="table109" height="auto">
         <tr style="padding: 0px;">
    <td height="" width="400px" bgcolor="#333333" colspan="6">
    <b><font face="Verdana" size="2" color="#FFFFFF">
DELETE MANAGER</font></b></td>
         
         <td height="" width="422" bgcolor="#333333">
				<p align="center"><b><font face="Arial" size="2">
				<a href="index.php">
				<font size="2" color="#FFFFFF" face="Verdana">GO BACK TO MAIN MENU</font></a></font></b></p></td>
         
         <td height="" width="133" bgcolor="#333333" colspan="2">
					<p align="center"><b>
					<font face="Verdana" size="2" color="#FFFFFF">
					<a href="login.html">
					<font color="#FFFFFF" face="Verdana" size="2">
					<span style="text-decoration: none">Logout</span></font></a></font></b></p></td>
    </tr>   
        </table>
           <div class="manger_delete_box">
        <div class="content_manger_delete_box">
        <div class="content_box_heading"></div>  
        <form method="post">   
         <table style="width: 100%;padding: 5px; box-sizing: border-box; border-collapse: collapse; border: 2px solid grey;" border="1">
            <tr><td>&nbsp;</td><td>&nbsp;</td></tr> 
               <tr><td>&nbsp;</td><td>&nbsp;</td></tr>

             <tr><td align="center"  style="padding: 5px;"><b>User ID</b></td><td><input type="text" size="25" maxlength="110" value="<?php echo $email; ?>"  style="width:235px;line-height:27px ;height:27px;font-family: Verdana; font-size: 10pt" name="part" id="part" list="part-list"><br>
         </td></tr>
             <tr><td>&nbsp;</td><td  style="padding: 5px;"><span class="id_not" style="font-weight: 700;">ID Not Current</span></td></tr>
             <tr><td>&nbsp;</td><td  style="padding: 5px;"><span class="user_invalid" style="color: red;">	Username Not Valid</span></td></tr>
             <tr><td>&nbsp;</td><td><input type="submit" value="Submit" name="ok"></td></tr>
       
        </table>  
        </form>     
        </div>
        </div>
         <?php 

    $ok = $_POST['ok'];
    if(isset($ok)){

            $get_user = "UPDATE  registration  SET Position = 'Memeber', Level = 'Participant' WHERE E_mail = '$email'";
              $run_user = mysqli_query($con,$get_user);
    
                if($run_user){
                            echo '<script>alert("Delete Manager");</script>';
                            echo '<script>window.open("add mngr.php","_self");</script>';
                }else{
                    echo '<script>alert("Not Delete");</script>';
                    echo '<script>window.open("add manager.php","_self");</script>';
                }


    }else{

    }

      

?>

        
        
    </div>    
    <div class="footer"></div>    
    </div>
    
    </div>
    </body>
</html>