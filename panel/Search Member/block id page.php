<?php
include('../Inc/conn.php');
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../Css/page%20style.css"/>  
     <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <title>Block And Unblock ID</title>
    <style>body{background-color: lightgray;}</style>
    </head>
<body>
    <div class="container" style="height: auto;">
    <div class="main">
    <div class="header"></div>    
    <div class="table" style="display: flex; flex-direction: row; height: 0px;">
    <div style="background-color: black; color: white; height: 20px; width:70%;">BLOCK/UN-BLOCK ID</div>    
    <div style="background-color: black; color: white; height: 20px; width:20%;"><a href="Search%20Member.php" style="color: white;">Go To Main Menu</a></div>
        <div style="background-color: black; color: white; height: 20px; width:10%;"><a href="./index.html" style="color: white;">Logout</a></div>   
        </div>
        
         <div style="background-color:white; width: 100%; height: 400px; padding: 40px 200px; box-sizing: border-box; display: flex;
                     flex-direction: row;">
             
<?php
$id = $_GET['email'];

$qeury = "SELECT * FROM `registration` WHERE E_mail = '$id'";
$table = mysqli_query($con, $qeury);
$run = mysqli_fetch_array($table);
?>

             <div style="width: 30%; background-color:gainsboro; text-align: right; height: 340px;">
             <p>Member ID :</p><p>Member Name:</p><p>Membership:</p><p>Registration Date:</p><p>Email ID:</p><p>ID Status:</p><p>Remark	</p>
             </div>
             <div style="width: 70%; background-color:gainsboro ; padding-left: 10px; height: 340px;">
             <p><input type="text" name="txtmcode" size="20" value="<?php echo $run['User_id']; ?>"></p>
             <p><?php echo $run['User_name']; ?></p><p style="color: gainsboro;">&nbsp;</p>
                 <p><?php echo $run['Reg_date']; ?></p>
                 <p><?php echo $run['E_mail']; ?></p>
                 <p><select size="1" name="cmbstatus">
								<option value="N">BLOCK</option>
								<option value="Y">OPEN</option>
								</select></p>
                 <p><textarea rows="4" name="txtremark" cols="44"></textarea></p>
                 <p><input type="submit" value="Confirm" name="B1">  <input type="button" value="Cancel" name="B2" onclick="history.go(-1)"></p>
             </div>
    </div>    
    <div class="footer"></div>    
    </div>
    
    </div>
    </body>
</html>