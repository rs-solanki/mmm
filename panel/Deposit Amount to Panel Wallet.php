<?php 
include('Inc/conn.php');
// include('Inc/reg.php');
include('function/function.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Deposit Amount to Panel Wallet</title>
	
</head>
<body>
<a href="index.php"><span style="font-size: 17px;">Back</span></a>    
<div style="padding: 30px 450px; box-sizing: border-box; border: 1px solid black;">
<h1 style="text-align: center;">Deposit Amount to Panel Wallet</h1>	
<form method="POST" action="">

 <table width="100%">
            <tr>
            <td>  Participant	:</td>
            <td><input type="text" size="25" maxlength="110" value=""  style="width:235px;border: 2px solid #af8112;line-height:27px ;height:27px;font-family: Verdana; font-size: 10pt" name="part" id="part" list="part-list"><br>
            	<datalist id="part-list">
          <?php  
$email = $_GET['new_id'];
$q = "SELECT * FROM  registration";
$run = mysqli_query($con,$q);


while ($res = mysqli_fetch_array($run)) {

?>  		
            	<option value="<?php echo $res['User_name'];?>">
            	<span><?php echo $res['E_mail'];?></span>
            
            	</option>	
            <?php } ?>
            	</datalist>

            <!-- <input type="button" name="Check" value="Check" onclick="check();"> -->
            </td>
            </tr>  
            <!-- <tr>
            <td> 	Name:</td>
            <td><input type="text" size="25" maxlength="110" value="<?php echo $name; ?>"  style="width:235px;border: 2px solid #af8112;line-height:27px ;height:27px;font-family: Verdana; font-size: 10pt"></td>
            </tr> --> 
            <tr>
            <td> Amount :</td>
            <td><input type="text" size="25" maxlength="110" value=""  style="width:235px;border: 2px solid #af8112;line-height:27px ;height:27px;font-family: Verdana; font-size: 10pt" name="Total_amount"></td>
            </tr>   
            <tr>
            <td> Select Currency:</td>
            <td>
            	<!-- <input type="text" size="25" maxlength="110" value="" readonly="" style="width:235px;border: 2px solid #af8112;line-height:27px ;height:27px;font-family: Verdana; font-size: 10pt"> -->
             <select style="width:235px;border: 2px solid #af8112;line-height:27px ;height:27px;font-family: Verdana; font-size: 10pt" name="select_currency_marvo">
             <option value="BTC">BTC</option>	
             <option value="USD">USD</option>	
             </select>
            </td>
            </tr>   
            <tr>
             <td> Select Bonus:</td>
            <td>
                <!-- <input type="text" size="25" maxlength="110" value="" readonly="" style="width:235px;border: 2px solid #af8112;line-height:27px ;height:27px;font-family: Verdana; font-size: 10pt"> -->
             <select style="width:235px;border: 2px solid #af8112;line-height:27px ;height:27px;font-family: Verdana; font-size: 10pt" name="select_bonus">
             <option value="Magic Bonus">Magic Bonus</option>   
             <option value="Gift Bonus">Gift Bonus</option>   
             <option value="Guider Sallery">Guider Sallery</option>
             <option value="Old MARVO">Old MARVO</option>
             <option value="Meeting Bonus">Meeting Bonus</option>
             <option value="Cherity Bonus">Cherity Bonus</option>
             <option value="Christmas Bonus">Christmas Bonus</option>

             </select>
            </td>   
            </tr> 
            <tr>
            <td> Select Locing Period:</td>
            <td>
                <!-- <input type="text" size="25" maxlength="110" value="" readonly="" style="width:235px;border: 2px solid #af8112;line-height:27px ;height:27px;font-family: Verdana; font-size: 10pt"> -->
             <select style="width:235px;border: 2px solid #af8112;line-height:27px ;height:27px;font-family: Verdana; font-size: 10pt" name="select_locking">
             <option value="0">None</option>   
             <option value="14">14 Days</option>   
             <option value="30">30 Days</option>   
             </select>
            </td>
            </tr>  
            <tr>
            <td align="left" style="margin-top: 20px; color: red; text-transform: uppercase;">&nbsp;</td>
            <td><input type="submit" size="25" maxlength="110" value="Submit"  style="padding: 10px 20px;" name="PH"></td>
            </tr>   
        





</table>

</form>
<?php  Deposit_with(); ?>
<script type="text/javascript">
	function check(){
var ele = document.getElementById('part').value;
var elele document.getElementById('parti').value = ele;
	}
</script>
</div>
</body>
</html>