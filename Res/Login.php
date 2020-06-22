<!DOCTYPE html>
<html>
<head>
	<title>Login To System</title>
	<link rel="stylesheet" type="text/css" href="Css/Log.css">
	<script type="text/javascript" src="Asset/jquery-3.3.js"></script>
	<!-- <script type="text/javascript" src="Js/Login.js"></script> -->
</head>
<body>
<div id="mask"></div>	

<!-- LOGIN -->

<div class="box">
<div align="center" style="display: flex; flex-direction: row;"><div> <img src="Images/mmm.png" style="width: 80px; margin-left:40px;margin-top: 8px; "></div><div style=" margin-left: 20px;line-height: 50px;font-size: 23px;">Login to system</div>	</div>	

<div class="line">
<label>Your language:</label>	
<select id="user_lang">
<option value="ru">русский</option><option selected="selected" value="en">english</option><option value="es">español</option><option value="pt">português</option><option value="ph">pilipino</option><option value="cn">中文</option><option value="hi">हिन्दी</option><option value="id">Bahasa Indonesia</option><option value="jp">日本語</option><option value="tr">Türkçe</option><option value="ko">한국어</option></select>
</div>
<form action="Include/Into.php" method="POST">
<div class="line">
<label>E-Mail or phone number :</label>	
<input id="email" name="email" class="input_text" type="email"><br>
<p>(for example: +7 903 999-66-77)</p>
</div>


<div class="line">
<label>Password:</label>	
<input id="pass" name="password" class="input_text" type="password">
</div>

<div class="line" align="center">
<!-- <button id="log" type="submit" class="login">Login</button>	 -->
<input type="submit" name="login" value="login" id="log" class="login" style="margin-left: 40px; width: 100px;">
</div>
</form>
<div class="line">
<p ><a href="#" id="recover" class="translate">Get a new password?</a><span class="translate" style="display: block; margin-top: 5px; color: black;">If you have forgotten your old password or login to PO first time</span></p>	
</div>

<div class="line">
<p><a href="#" class="translate" id="email_by">Get a new password by email</a></p>	
</div>
</div>


<!-- Get New Password -->

<div class="get_new" id="">
<div align="center" style="display: flex; flex-direction: row;"><div> <img src="Images/mmm.png" style="width: 60px; margin-left:40px; "></div><div style=" margin-left: 20px;line-height: 50px;font-size: 23px;">Password recovery</div>	</div>	

<div>
<label>E-Mail or phone number :</label>	
<input id="email" name="email" class="input_text" type="email"><br>
<p style="margin: 0px 0px 0px 0px;">(for example: +7 903 999-66-77)</p>
</div>

<div>
<button id="send" class="send">Send a request</button>	
<button id="cancel" class="cancel">Cancel</button>
</div>
</div>

<!-- Change Password -->
<div class="change" id="">
<div align="center"><div style="margin-bottom: 20px; font-size: 23px;">Change password</div></div>	

<div>
<label>E-Mail or phone number :</label>	
<input id="email" name="email" class="input_text" type="email"><br>
<p style="margin: 4px 0px 0px 220px;">(for example: +7 903 999-66-77)</p>
</div>

<div>
<label>Recovery code:</label>	
<input id="email" name="email" class="input_text" type="text"><br>
</div>

<div>
<label>New password:</label>	
<input id="email" name="email" class="input_text" type="password"><br>
</div>

<div>
<label>Repeat new password:</label>	
<input id="email" name="email" class="input_text" type="password"><br>
</div>

<div>
<button class="send Change_sen">Change password</button>	
<button class="cancel Change_can">Cancel</button>
</div>
</div>


<!-- Attention Box -->
<div class="Attention">
<h2 style="font-size: 18px;">Attention</h2>	
<h3 style="font-size: 16px; font-weight: 100;"> <span style="font-size: 18px; font-weight: 800;">Admin</span> is your Guider . He/she has full access to your PO! Of course any financial transactions are to be undertaken by him/her only with your permission, through sms-codes which you should provide him/her every time. Thus, he/she won`t be able to steal your money. If you want to deprive your guider of the right to manage your account, open section "My page"subsection"guider" and push there" and disable the access of my guider to my PO.</h3>	
<div align="right">Don't show again:<input type="checkbox" name="" id="check">   <input type="button" name="" value="Next" class="next" id="nex"></div>

</div>

</body>
</html>