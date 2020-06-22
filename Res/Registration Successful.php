<?php
include('Header bar.php');
session_start();
if(isset($_POST['Des'])){
    session_destroy();
}
include('Include/conn.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Successful</title>
	<link rel="stylesheet" type="text/css" href="Css/succ.css">
</head>
<body>

<div class="content">
<h2 class="heading">Successful :))</h2>
    
 <h2 style="text-align: center;">WELCOME TO MMM! <?php echo $_SESSION['username']; ?>:-))</h2>
                <p style="font-weight: 700;">What to do ?</p>
                <p>Follow the instructions:</p>
                <ul style="font-size: 14px; line-height: 25px; color: grey">
                <li style="margin-bottom: 20px;">You will recieve a link  recover your password by E-mail 0r SMS.It depends on what you specified during registration, E-mail or phone number.(Check spam on your email.If is not in your inbox! And also try uploading the page.)</li>
                    <li style="margin-bottom: 20px;">Go to this link and enter your new, permanet password.(Which you will invent yourself.:-))</li>
                    <li>Then click "Login" button in the manu of the website again and enter not only your E-mail/phone, but the new password.Have you worked it out? In the same way you will be able to continue to get into your Vitual account(through "Login").</li>
                
                </ul>
                <p>In the Vitual (personal account)first specify your contact information:phone number.etc.if you haven't done it yet.Generally.before starting to work with your VA.it is better to learn instructions for its use beforehand.Although.of course.there is nothing particularly complicated. you can learn it using a trial and error method:)).but you'd better read the instructions first.:-))</p>
                 <h3 style="text-align: center;">Good Luck!</h3>
                   



</div>


 <?php
    include('Footer.php');
    // include('function/refel.php');
    
 ?>
</body>
</html>