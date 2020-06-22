function form_valid(){

 var password = document.getElementById('password_input').value;
 var con_password = document.getElementById('con_pass').value;
 var weak_pass = document.getElementById('password_input_simple_text');
var match_not_pass = document.getElementById('password_is_not_match');
var match_pass = document.getElementById('password_match');
var name = document.getElementById('fname').value;
var email = document.getElementById('email').value;
var mobile = document.getElementById('phone').value;
var name_ceck = "";
var email_chek = /^[A-Za-z0-9_]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/ ;
var mobilr_chek = /^[789][0-9]{9}$/;
var cap = document.getElementById('mainCaptcha').value;
var enter_cap = document.getElementById('txtInput').value;
var agree = document.getElementById('agree');
var con = document.getElementById('con').value;

if(name != ""){
	document.getElementById('name_er').innerHTML = "";
	
}else{
	document.getElementById('name_er').innerHTML = "Please Enter Name";
	
	return false;
}

if(email != ""){
document.getElementById('email_er').innerHTML = "";

}else{
	document.getElementById('email_er').innerHTML = "Enter E-mail";
	return false;
}


if(email_chek.test(email)){
document.getElementById('email_er').innerHTML = "";

}else{
	document.getElementById('email_er').innerHTML = "E-mail Invalid";
	return false;
}

if(mobile != ""){

}else{
	alert("Enter Mobile Number");
	return false;
}

if(con != 0){

}else{
	alert("Select Country");
	return false;
}




if(password != ""){

}else{
	alert("Enter password");
	return false;
}
if(password.length > 7){
	 document.getElementById('password_input_simple_text').innerHTML ="";

}else{
	 document.getElementById('password_input_simple_text').innerHTML ="Password must contain at least 8 characters!"
	 return false;
}

if(password == con_password){	
 document.getElementById('password_match').innerHTML = "";

}else{
 document.getElementById('password_match').innerHTML = "password not match";	
 document.getElementById('password_match').style.color = "red";
	return false;
}

if(enter_cap != ""){

}else{
	document.getElementById('cap_er').innerHTML = "Enter Code";
	return false;
}

if(cap == enter_cap){

}else{
document.getElementById('cap_er').innerHTML = "Invalid Code";
	return false;
}

if(agree.checked == true){
 
   return true;

}else{
	alert("Check Checkbox");
	return false;
}





 }