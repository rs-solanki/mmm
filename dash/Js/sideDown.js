$(document).ready(function(){
  $(".setting").click(function(){
    $(".setting_area").slideToggle("slow");
       $(".guide_view").slideUp("slow");
         $(".refferal_view").slideUp("slow");
  });
    
     $(".guider").click(function(){
    $(".guide_view").slideToggle("slow");
         $(".setting_area").slideUp("slow");
           $(".refferal_view").slideUp("slow");
          $(".other_view").slideUp("slow");
  });
     $(".reffrer").click(function(){
    $(".refferal_view").slideToggle("slow");
         $(".guide_view").slideUp("slow");
         $(".setting_area").slideUp("slow");
          $(".other_view").slideUp("slow");
  });
    
    $(".other").click(function(){
    $(".other_view").slideToggle("slow");
         $(".guide_view").slideUp("slow");
         $(".setting_area").slideUp("slow");
        $(".refferal_view").slideUp("slow");
  });
    
    
    
    
    $("#open_my_link").click(function(){
  $("#reffer_windows_panel").show();
});
    
      $("#close_link").click(function(){
  $("#reffer_windows_panel").hide();
});
    
      $("#create_key_btn").click(function(){
  $(".create_key_box").show();
});

     $("#close_key_box").click(function(){
  $(".create_key_box").hide();
});

// Show Reffer
$("#open_my_link").click(function(){
  $(".con_ref_link").show();
  $(".ref_box").show();
});

$(".close_ref_box").click(function(){
  $(".con_ref_link").hide();
  $(".ref_box").hide();
});

// End





    
});



