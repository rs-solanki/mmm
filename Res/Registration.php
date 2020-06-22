<?php
include('Header bar.php');
error_reporting(0);
session_start();
include('Include/conn.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>MMMGlobal Registration</title>
	<link rel="stylesheet" type="text/css" href="Css/reg.css">
	<script src="Asset/capthca.js"></script>
	<link rel="stylesheet" type="text/css" href="Css/regitration main page.css">
	 <link rel="stylesheet" href="Css/captcha%20reg.css"/>
   
  <script src="build/js/intlTelInput.js"></script>
  <script type="text/javascript" src="Js/form valid.js"></script>
</head>
<body onload="Captcha();">
<div class="content">
<h2 class="heading">REGISTRATION</h2>	
<div class="other_country">
Are you from another country? Click <a href="#" class="other_countries_toggle">
here.
</a>
</div>

<p>You may register by filling in the form;</p>
<p>Or you may ask MMM guiders to help you. The list of MMM guiders is below the form.</p>
<p>It’s up to you. :-))</p>
<p>But you can choose only one option. Either the form or the list. :-))</p>
<div class="registration">


<form class="register-feedback-form" action="" method="POST" onsubmit="return(form_valid());">
<input name="structure" value="1004" type="hidden">
<input name="country" value="25" type="hidden">
<input name="prom_referrer" value="" type="hidden">
<input name="lang" value="en" type="hidden">
<input name="country_code" value="IN" type="hidden">
<input name="site_id" value="8" type="hidden">
<div class="line">
<div class="left">
<label>
Name *:
</label>
<p>
(a nickname is possible) </p>
</div>
<div class="right"><input name="firstname" type="text" id="fname">
<span style="display: inline-block;color: red;margin-top: 5px;" id="name_er"></span>
</div>
</div>
<div class="line">
<div class="left">
<label>
E-mail *:
</label>
<p>
(for example, example@gmail.com) </p>
</div>
<div class="right"><input name="email" type="email" id="email" >
<span style="display: inline-block;color: red;margin-top: 5px;" id="email_er"></span>
</div>
</div>
<div class="line">
<div class="left">
<label>
Mobile phone number :
</label>
<p>
(for example, +91(7577) 995-002) </p>
</div>
<div class="right"><input   id="phone" data-required="" name="phone" type="text" ></div>
</div>
<div class="line">
<div class="left">
<label>Country:</label>
<div class="right" style="margin-top: -10px;margin-bottom: 20px;">
<select style="width: 400px;padding: 6px;" name="Country" id="con">
	<option value="0" selected="selected">--Select Country--</option>
	<option value="Afghanistan">Afghanistan</option>
	<option value="Albania">Albania</option>
	<option value="Algeria">Algeria</option>
	<option value="American Samoa">American Samoa</option>
	<option value="Andorra">Andorra</option>
	<option value="Angola">Angola</option>
	<option value="Anguilla">Anguilla</option>
	<option value="Antartica">Antarctica</option>
	<option value="Antigua and Barbuda">Antigua and Barbuda</option>
	<option value="Argentina">Argentina</option>
	<option value="Armenia">Armenia</option>
	<option value="Aruba">Aruba</option>
	<option value="Australia">Australia</option>
	<option value="Austria">Austria</option>
	<option value="Azerbaijan">Azerbaijan</option>
	<option value="Bahamas">Bahamas</option>
	<option value="Bahrain">Bahrain</option>
	<option value="Bangladesh">Bangladesh</option>
	<option value="Barbados">Barbados</option>
	<option value="Belarus">Belarus</option>
	<option value="Belgium">Belgium</option>
	<option value="Belize">Belize</option>
	<option value="Benin">Benin</option>
	<option value="Bermuda">Bermuda</option>
	<option value="Bhutan">Bhutan</option>
	<option value="Bolivia">Bolivia</option>
	<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
	<option value="Botswana">Botswana</option>
	<option value="Bouvet Island">Bouvet Island</option>
	<option value="Brazil">Brazil</option>
	<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
	<option value="Brunei Darussalam">Brunei Darussalam</option>
	<option value="Bulgaria">Bulgaria</option>
	<option value="Burkina Faso">Burkina Faso</option>
	<option value="Burundi">Burundi</option>
	<option value="Cambodia">Cambodia</option>
	<option value="Cameroon">Cameroon</option>
	<option value="Canada">Canada</option>
	<option value="Cape Verde">Cape Verde</option>
	<option value="Cayman Islands">Cayman Islands</option>
	<option value="Central African Republic">Central African Republic</option>
	<option value="Chad">Chad</option>
	<option value="Chile">Chile</option>
	<option value="China">China</option>
	<option value="Christmas Island">Christmas Island</option>
	<option value="Cocos Islands">Cocos (Keeling) Islands</option>
	<option value="Colombia">Colombia</option>
	<option value="Comoros">Comoros</option>
	<option value="Congo">Congo</option>
	<option value="Congo">Congo, the Democratic Republic of the</option>
	<option value="Cook Islands">Cook Islands</option>
	<option value="Costa Rica">Costa Rica</option>
	<option value="Cota D'Ivoire">Cote d'Ivoire</option>
	<option value="Croatia">Croatia (Hrvatska)</option>
	<option value="Cuba">Cuba</option>
	<option value="Cyprus">Cyprus</option>
	<option value="Czech Republic">Czech Republic</option>
	<option value="Denmark">Denmark</option>
	<option value="Djibouti">Djibouti</option>
	<option value="Dominica">Dominica</option>
	<option value="Dominican Republic">Dominican Republic</option>
	<option value="East Timor">East Timor</option>
	<option value="Ecuador">Ecuador</option>
	<option value="Egypt">Egypt</option>
	<option value="El Salvador">El Salvador</option>
	<option value="Equatorial Guinea">Equatorial Guinea</option>
	<option value="Eritrea">Eritrea</option>
	<option value="Estonia">Estonia</option>
	<option value="Ethiopia">Ethiopia</option>
	<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
	<option value="Faroe Islands">Faroe Islands</option>
	<option value="Fiji">Fiji</option>
	<option value="Finland">Finland</option>
	<option value="France">France</option>
	<option value="France Metropolitan">France, Metropolitan</option>
	<option value="French Guiana">French Guiana</option>
	<option value="French Polynesia">French Polynesia</option>
	<option value="French Southern Territories">French Southern Territories</option>
	<option value="Gabon">Gabon</option>
	<option value="Gambia">Gambia</option>
	<option value="Georgia">Georgia</option>
	<option value="Germany">Germany</option>
	<option value="Ghana">Ghana</option>
	<option value="Gibraltar">Gibraltar</option>
	<option value="Greece">Greece</option>
	<option value="Greenland">Greenland</option>
	<option value="Grenada">Grenada</option>
	<option value="Guadeloupe">Guadeloupe</option>
	<option value="Guam">Guam</option>
	<option value="Guatemala">Guatemala</option>
	<option value="Guinea">Guinea</option>
	<option value="Guinea-Bissau">Guinea-Bissau</option>
	<option value="Guyana">Guyana</option>
	<option value="Haiti">Haiti</option>
	<option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
	<option value="Holy See">Holy See (Vatican City State)</option>
	<option value="Honduras">Honduras</option>
	<option value="Hong Kong">Hong Kong</option>
	<option value="Hungary">Hungary</option>
	<option value="Iceland">Iceland</option>
	<option  value="India">India</option>
	<option value="Indonesia">Indonesia</option>
	<option value="Iran">Iran (Islamic Republic of)</option>
	<option value="Iraq">Iraq</option>
	<option value="Ireland">Ireland</option>
	<option value="Israel">Israel</option>
	<option value="Italy">Italy</option>
	<option value="Jamaica">Jamaica</option>
	<option value="Japan">Japan</option>
	<option value="Jordan">Jordan</option>
	<option value="Kazakhstan">Kazakhstan</option>
	<option value="Kenya">Kenya</option>
	<option value="Kiribati">Kiribati</option>
	<option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
	<option value="Korea">Korea, Republic of</option>
	<option value="Kuwait">Kuwait</option>
	<option value="Kyrgyzstan">Kyrgyzstan</option>
	<option value="Lao">Lao People's Democratic Republic</option>
	<option value="Latvia">Latvia</option>
	<option value="Lebanon">Lebanon</option>
	<option value="Lesotho">Lesotho</option>
	<option value="Liberia">Liberia</option>
	<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
	<option value="Liechtenstein">Liechtenstein</option>
	<option value="Lithuania">Lithuania</option>
	<option value="Luxembourg">Luxembourg</option>
	<option value="Macau">Macau</option>
	<option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
	<option value="Madagascar">Madagascar</option>
	<option value="Malawi">Malawi</option>
	<option value="Malaysia">Malaysia</option>
	<option value="Maldives">Maldives</option>
	<option value="Mali">Mali</option>
	<option value="Malta">Malta</option>
	<option value="Marshall Islands">Marshall Islands</option>
	<option value="Martinique">Martinique</option>
	<option value="Mauritania">Mauritania</option>
	<option value="Mauritius">Mauritius</option>
	<option value="Mayotte">Mayotte</option>
	<option value="Mexico">Mexico</option>
	<option value="Micronesia">Micronesia, Federated States of</option>
	<option value="Moldova">Moldova, Republic of</option>
	<option value="Monaco">Monaco</option>
	<option value="Mongolia">Mongolia</option>
	<option value="Montserrat">Montserrat</option>
	<option value="Morocco">Morocco</option>
	<option value="Mozambique">Mozambique</option>
	<option value="Myanmar">Myanmar</option>
	<option value="Namibia">Namibia</option>
	<option value="Nauru">Nauru</option>
	<option value="Nepal">Nepal</option>
	<option value="Netherlands">Netherlands</option>
	<option value="Netherlands Antilles">Netherlands Antilles</option>
	<option value="New Caledonia">New Caledonia</option>
	<option value="New Zealand">New Zealand</option>
	<option value="Nicaragua">Nicaragua</option>
	<option value="Niger">Niger</option>
	<option value="Nigeria">Nigeria</option>
	<option value="Niue">Niue</option>
	<option value="Norfolk Island">Norfolk Island</option>
	<option value="Northern Mariana Islands">Northern Mariana Islands</option>
	<option value="Norway">Norway</option>
	<option value="Oman">Oman</option>
	<option value="Pakistan">Pakistan</option>
	<option value="Palau">Palau</option>
	<option value="Panama">Panama</option>
	<option value="Papua New Guinea">Papua New Guinea</option>
	<option value="Paraguay">Paraguay</option>
	<option value="Peru">Peru</option>
	<option value="Philippines">Philippines</option>
	<option value="Pitcairn">Pitcairn</option>
	<option value="Poland">Poland</option>
	<option value="Portugal">Portugal</option>
	<option value="Puerto Rico">Puerto Rico</option>
	<option value="Qatar">Qatar</option>
	<option value="Reunion">Reunion</option>
	<option value="Romania">Romania</option>
	<option value="Russia">Russian Federation</option>
	<option value="Rwanda">Rwanda</option>
	<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
	<option value="Saint LUCIA">Saint LUCIA</option>
	<option value="Saint Vincent">Saint Vincent and the Grenadines</option>
	<option value="Samoa">Samoa</option>
	<option value="San Marino">San Marino</option>
	<option value="Sao Tome and Principe">Sao Tome and Principe</option>
	<option value="Saudi Arabia">Saudi Arabia</option>
	<option value="Senegal">Senegal</option>
	<option value="Seychelles">Seychelles</option>
	<option value="Sierra">Sierra Leone</option>
	<option value="Singapore">Singapore</option>
	<option value="Slovakia">Slovakia (Slovak Republic)</option>
	<option value="Slovenia">Slovenia</option>
	<option value="Solomon Islands">Solomon Islands</option>
	<option value="Somalia">Somalia</option>
	<option value="South Africa">South Africa</option>
	<option value="South Georgia">South Georgia and the South Sandwich Islands</option>
	<option value="Span">Spain</option>
	<option value="SriLanka">Sri Lanka</option>
	<option value="St. Helena">St. Helena</option>
	<option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
	<option value="Sudan">Sudan</option>
	<option value="Suriname">Suriname</option>
	<option value="Svalbard">Svalbard and Jan Mayen Islands</option>
	<option value="Swaziland">Swaziland</option>
	<option value="Sweden">Sweden</option>
	<option value="Switzerland">Switzerland</option>
	<option value="Syria">Syrian Arab Republic</option>
	<option value="Taiwan">Taiwan, Province of China</option>
	<option value="Tajikistan">Tajikistan</option>
	<option value="Tanzania">Tanzania, United Republic of</option>
	<option value="Thailand">Thailand</option>
	<option value="Togo">Togo</option>
	<option value="Tokelau">Tokelau</option>
	<option value="Tonga">Tonga</option>
	<option value="Trinidad and Tobago">Trinidad and Tobago</option>
	<option value="Tunisia">Tunisia</option>
	<option value="Turkey">Turkey</option>
	<option value="Turkmenistan">Turkmenistan</option>
	<option value="Turks and Caicos">Turks and Caicos Islands</option>
	<option value="Tuvalu">Tuvalu</option>
	<option value="Uganda">Uganda</option>
	<option value="Ukraine">Ukraine</option>
	<option value="United Arab Emirates">United Arab Emirates</option>
	<option value="United Kingdom">United Kingdom</option>
	<option value="United States">United States</option>
	<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
	<option value="Uruguay">Uruguay</option>
	<option value="Uzbekistan">Uzbekistan</option>
	<option value="Vanuatu">Vanuatu</option>
	<option value="Venezuela">Venezuela</option>
	<option value="Vietnam">Viet Nam</option>
	<option value="Virgin Islands (British)">Virgin Islands (British)</option>
	<option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
	<option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
	<option value="Western Sahara">Western Sahara</option>
	<option value="Yemen">Yemen</option>
	<option value="Yugoslavia">Yugoslavia</option>
	<option value="Zambia">Zambia</option>
	<option value="Zimbabwe">Zimbabwe</option>

</select>	


</div>		
</div>
</div>
<div class="line">
<div class="left">
<label>
Password* :
</label>
<p>
(enter your password) </p>
</div>
<div class="right">
<input name="password" id="password_input" type="password" >
<span id="password_input_simple_text" style="margin-top: 5px; color: red; display: inline-block;"></span>
</div>
</div>
<div class="line">
<div class="left">
<label>
Confirm Password* :
</label>
<p>
(re-enter your password) </p>
</div>
<div class="right">
<input name="password_confirm" id="con_pass" type="password"   ><br>
<label id="password_match" class="password_label" style="display:inline-block;color: green; margin-top: 5px;">
</label>
<!-- <label id="password_is_not_match" class="password_label" style="display: inline-block; color: red; margin-top: 5px;">
Password is not match </label> -->
</div>
</div>
<div class="line">
<div class="left">
<label>
Invite:
</label>
<p>
(It is optional. Fill this field in if someone invited you. Otherwise you may leave the field empty) </p>
</div>
<div class="right">
<?php 

$inv = "";

if ($_GET['invite'] == "") {
	$inv = "MMMglobal@gmail.com";
}
else{
	$inv = $_GET['invite'];
}

?>	
<input name="invite" type="text" value="<?php echo $inv;?>" id="invi" readonly>

<span style="display: none;" class="clearInvite">clear</span>
</div>
</div>
<div class="line">
<div class="left">
<label>
Your Guider’s E-mail:
</label>
<p>
(It is required if you have already had a guider or you have chosen one 
from the list below. Otherwise you may leave this field empty) </p>
</div>
<div class="right">
<!-- <input type="email" name="parent_email_1"><br><br> -->
<input name="parent_email" type="email"></div>
</div>
<div class="line">
<div class="left">
<label>
Your Guider’s Phone Number::
</label>
<p>
(It is required if you have already had a guider or you have chosen one 
from the list below. Otherwise you can leave this field empty) </p>
</div>
<div class="right"><input name="parent_phone" maxlength="17" type="number"></div>
</div>
<div class="line">
<div class="left">
<label>
How did you learn about us? </label>
</div>
<div class="right">
<select name="how_find_us" id="how_find_us" style="width: 100%; padding: 8px;">
<option selected="selected" value="1"> from friends</option>
<option value="2"> sms</option>
<option value="3"> another site</option>
<option value="4"> video advertising</option>
<option value="5"> banners</option>
<option value="6"> search engines</option>
<option value="7"> social networks</option>
<option value="8"> forums</option>
<option value="100"> others</option>
</select>
</div>
</div>
<div class="line how_find_us_other hide" style="display: none;">
<div class="left"></div>
<div class="right">
<textarea name="how_find_us_other" id="how_find_us_other" cols="50" rows="10"></textarea>
</div>
</div>
<div class="line" id="captcha-code-label">
<div class="left">
<label>
Image code *:
</label>
<p>
Enter the code from the picture <?php echo $_GET['invite'];?> </p>
</div>
<div class="right"><input type="text"  id="mainCaptcha" value="gjhgjh" disabled> <input type="hidden"/>
<input type="image" src="Images/Refresh-icon.png" style="width: 50px; margin-left: 30px; vertical-align: text-bottom;"  id="refresh" onclick="Captcha();">    
    
</div>
</div>
<div class="line">
<div class="left"></div>
<div class="right">
<input  name="captcha_code" type="text"  id="txtInput">
<span style="display: inline-block;color: red;margin-top: 5px;" id="cap_er"></span>
</div>
</div>
<div class="line">
<div class="left"></div>
<div class="right" data-form-errors-container="">
</div>
</div>
<div class="line">
<div class="left"></div>
<div class="right">
<p style="font-size:12px; line-height:18px; width:;">
<input name="agree" type="checkbox" id="agree">
Having read the <a href="#">WARNING</a>, I am well aware fully of the risks. Being in sound mind, I have decided to become a member of MMM. </p>

</div>
</div>
<div class="line">
<div class="left"></div>
<div class="right">
<button type="submit" name="regi" id="regi">
REGISTER IN MMM </button>
</div>
</div>
<?php include('function/user_insert.php');


 ?>
</form>
</div>






</div>
 <?php
    include('Footer.php');
    
    ?>
</body>
</html>