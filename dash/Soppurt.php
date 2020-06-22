 <?php
include('Include/conn.php');
include('Include/user_details.php');
include('function/function.php');
// include('get.php');
?> 
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Css/Support.css">
   
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="Css/res%20supp.css"/>
    <title>Support</title>
     <script src="js/jquery-3.3.1.min.js"></script>
   
    <!-- <style type="text/css">#show_btn:visited .opecticket{display: block;}</style> -->
    <script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
                document.getElementById("txtHint").style.display = "block";
            }
        };
        xmlhttp.open("GET","Include/get.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

</head>

<body>
   <?php include('Include/header.php');?>
    <div class="body">
              
      <div class="name_bar">
        <div class="headng_of_page" style="margin-top: 50px;">
          <div>Tickets List </div>
          </div>
          <div class="work_area">
          <div class="create_ticket" align="center" style="height: 520px; overflow: auto;">
              <div class="create_btn">
              <a href="#" id="create"><span class="on"><span class="ic">Create</span></span></a>
              </div>
              <div class="tickets-name-area">


<?php 

$select = "SELECT * FROM `tickets` WHERE User_id = '$user_name';";
$run = mysqli_query($con,$select);
// $row = mysqli_fetch_array($run);

$row = mysqli_num_rows($run);

 for ($j = 0 ; $j < $row ; ++$j)
 {
 
 $res = mysqli_fetch_array($run);

// echo '<a href="Soppurt.php?id='.$res['Ticket_id'].'&title='.$res['Title'].'&topic='.$res['Topics'].'&msg='.$res['Msg'].'&date='.$res['Msg_date'].'&cro_name='.$res['CRO_name'].'&reply='.$res['CRO_reply'].'" id="show_btn" class="accordion" style="text-decoration:none;">';

?>


<a href="#" id="<?php echo $res['Ticket_id']; ?>" class="accordion" style="text-decoration:none;"  onclick="showUser(this.id)">
<div class="ticket_number viewT" id="" style="margin-bottom:20px;">
<h3  style="padding: 0px 5px; font-size: 16px;">T<?php echo $res['Ticket_id']; ?>:<?php echo $res['Title']; ?></h3>
</div>
</a>

<?php } ?>

  
              </div>
              <div class="pagination">
              <table>
             <tr>
            <td>
            <select>
            <option selected>10</option>
            <option>20</option>
            <option>30</option>
            <option>40</option>    
            </select>     
            </td>  
            <td><div class="pagination-btn-separator"></div></td>  
            <td>
            <a href="#" class="page_back"><span class="back_page"></span></a>     
            </td> 
             <td>
            <a href="#" class="page_back"><span class="back_page"></span></a>     
            </td>      
             <td></td>
            <td><div class="pagination-btn-separator"></div></td>
           
        <td><span style="padding-left: 6px;">Page</span></td>
                 <td> <input class="pagination-num" type="text" value="1" size="2"></td>
                 <td><span style="padding-right: 6px;">of 1</span></td> 
                 <td><div class="pagination-btn-separator"></div></td>
                 
                 
                  <td>
            <a href="#" class="page_back"><span class="next_page"></span></a>     
            </td> 
                  <td>
            <a href="#" class="page_back"><span class="next_page"></span></a>     
            </td> 
                 
                 
                 
            </tr>     
                  
             </table>
              
              </div>
              </div>
              <div class="show_ticket">

              <div class="show_ticket_area" id="txtHint" style="display: none;">


                  </div>

    
              
              </div>


          </div>
        </div>
    </div>



    <div class="panel_window" id="open_panel_window">
     <form method="POST" action=""  enctype="multipart/form-data"> 
    <div class="panel_header">
        <div class="panel_title">Create request</div>
        <div class="panel_icon"></div>
        <div class="panel_close_icon"><a href="#" id="closepanel"></a></div>
        </div>
        <div class="ticket_add_panel">
        <table align="center" width="100%;">
            <tbody>
            <tr><th colspan="4" style="padding-top: 20px; padding-bottom: 10px;">Here, you may ask a question that will be sent to one of the administrators or
                                            <br>
                                            to a CRO co-worker.
                                            <br>
                                            As soon as your request is taken for consideration, you will be informed about the decision.<br>
                                            <br>
                                            Attention!<br>
                                            Before sending a request, carefully watch video instructions and read FAQs. Questions with direct answers in video instructions will be deleted ruthlessly.<br>
                                            Once again, about fixing errors in the PO - we are aware that there are still some and will continue to improve the site.  Updates are done daily, around 16:00 Greenwich Time Zone. If something does not work, please, try after 16:00-17:00 GMT.</th></tr>
            <tr>
            <td align="right"><span class="translate">Excase</span>*</td>    
            <td align="left" colspan="3"><span class="combo" style="width: 374px;">



                                                <select  id="ContentPlaceHolder1_ddlexcise" class="combo ddlexcise" style="width: 520px;" name="topic">
	<option value="Select a topic">Select a topic</option>
	<option value="Other questions">Other questions</option>
	<option value="重启后有经济困难">重启后有经济困难</option>
	<option value="Help receiver does not confirm receipt of funds">Help receiver does not confirm receipt of funds</option>
	<option value="The participant informed that funds weren''t received">The participant informed that funds weren''t received</option>
	<option value="I have provided help, but the contribution was not confirmed">I have provided help, but the contribution was not confirmed</option>
	<option value="Administration's mistake or error">Administration's mistake or error</option>
	<option value="My account was hacked/stolen">My account was hacked/stolen</option>
	<option value="Problems with recipient's requisitesc">Problems with recipient's requisitesc</option>
	<option value="Sender attached false screenshot of payment.">Sender attached false screenshot of payment.</option>
	<option value="I have paid the order but it has been cancelled.">I have paid the order but it has been cancelled.</option>
	<option value="I got help, but the order has been cancelled.">I got help, but the order has been cancelled.</option>
	<option value="Remove wrong request">Remove wrong request</option>
	<option value="Administration's mistake or error">Administration's mistake or error</option>
	<option value="My account was hacked/stolen">My account was hacked/stolen</option>
	<option value="The problems with providing help">The problems with providing help</option>
	<option value="Problems with the creation of the withdrawal orders">Problems with the creation of the withdrawal orders</option>
	<option value="Сhange email">Сhange email</option>
	<option value="Сhange phone number">Сhange phone number</option>
	<option value="Identity verification">Identity verification</option>
	<option value="IRegistration (referral, guider’s) bonus hasn’t been credited.">IRegistration (referral, guider’s) bonus hasn’t been credited.</option>
	<option value="Change of guider">Change of guider</option>

</select>



                                                <span class="combo-arrow _expend" id="ddlexpend" data-expendid="ddlexcise" style="display:none; position: relative; left: -22px; height: 16px; top: 1px; cursor: pointer"></span>

                                                <script type="text/javascript">
                                                    $(document).on('click', '._expend', function () {
                                                        var getclass = $(this).attr('data-expendid');


                                                        $("." + getclass + "").simulate('mousedown');
                                                    })
                                                </script>

                                            </span></td>    
            </tr>
            <tr>
                <td align="right"><span class="translate">Title</span>*</td>
                <td align="left" colspan="3">
                <input  type="text" id="ContentPlaceHolder1_txttitle" style="width: 520px;" name="title" maxlength="25">
                    
                </td>
                
            </tr>
            <tr>
            <td align="right" valign="top" nowrap=""><span class="translate">Your message</span> *</td> 
            <td align="left" colspan="3">
          <textarea  rows="2" cols="20" id="ContentPlaceHolder1_txtmessage"  style="height: 150px; width: 520px;" name="msg"></textarea></td>    
            </tr>
            <tr>
            <td align="right" valign="top"><span class="translate">Files</span></td>
            <td align="left" colspan="3">
             <!--  <div class="qq-upload-button" style="position: relative; overflow: hidden; direction: ltr;">


                                                        <span>Browse file



                                        <input type="file" id="ContentPlaceHolder1_FileUpload1" style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0;" name="file">
                                                    </span></div>  -->
                                                    <input type="file" name="Img">
            </td>    
            </tr>    
            </tbody>
            
            </table>
        <div class="footer_save">
        <a href="#" class="save">
        <!-- <span class="save_btn">Save</span>     -->
        <input type="submit" name="Save">
        </a>    
        </div>
        </div>
      </form>
    <?php
    add_ticket();

    ?>
    </div>





    <script>
    $(document).ready(function(){
  $(".viewT").click(function(){
    $(".opecticket").show();
  });
  
});
    
         $(document).ready(function(){
  $("#create").click(function(){
    $("#open_panel_window").show();
  });
  
});
        
        
         $(document).ready(function(){
  $("#closepanel").click(function(){
    $("#open_panel_window").hide();
  });
  
});
    
    </script>
<!-- <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.document.getElementsByClassName('panel');
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script> -->


    </body> 
        
</html>
