$(document).ready(function(){

// Change Password

$(".translate").click(function(){
$(".get_new").show();
$("#mask").css("display" , "block"); 

});


$(".cancel").click(function(){
$(".get_new").hide();
$("#mask").css("display" , "none"); 

});


// login Function

$(".login").click(function(){
var $email = $("#email").val();
var $pass = $("#pass").val();

if($email != "" && $pass != ""){
$(".Attention").show();
$("#mask").css("display" , "block"); 
return false;


}else{
	alert("Please Enter Email And Password");
}


});

// Attention Function

$("#nex").click(function(){
var $check = $("#check");
var $btn = $("#nex");


 if($check.prop("checked") == true){
$(".Attention").hide();
$("#mask").css("display" , "none"); 

 }
  else{
         alert("Click Checkbox");
            	return false;
     }
});




















	});