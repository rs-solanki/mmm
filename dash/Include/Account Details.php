<?php
session_start();
$query = "SELECT * FROM `accounts` WHERE Account_name = '$user_name';";//exit();
$run = mysqli_query($con,$query);
 $ac = mysqli_fetch_array($run);
$Account_User_id = $ac['User_id'];
$Account_id = $ac['Account_id'];
$Account_name = $ac['Account_name'];
$Account_Select_currency = $ac['Select_currency'];
$Account_Bank_name = $ac['Bank_name'];
$Account_Currency_address = $ac['Currency_address'];
$Account_Fname = $ac['Fname'];
$Account_Lname = $ac['Lname'];
//echo $Account_id . "rs";
?>