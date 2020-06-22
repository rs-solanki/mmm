function openPh(){
var statu = document.getElementByClassName('status').value;	

if(statu == "" || statu == "Processed"){
var op = document.getElementByClassName('ph_pop_1').style.display = 'block';
var op2 = document.getElementByClassName('con_pop').style.display = 'block';
alert("opeb");
}
else{
	alert("Pending");
}


}