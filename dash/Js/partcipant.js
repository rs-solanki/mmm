//$(document).ready(function(){
//  $("#sidebar").click(function(){
//    $("#member_list").show();
//      
//  });
//    
//  $("#hideside").click(function(){
//    $("member_list").hide();
//  });
//    
//});

function openSide_bar(){
    var ele = document.getElementById('hide_bar').style.display="none";
     var eleer = document.getElementById('member_list').style.display="block";    
}

function closeSide_bar(){
    var ele_2 = document.getElementById('hide_bar').style.display="block";
    var elee_2 = document.getElementById('member_list').style.display="none";
    
}