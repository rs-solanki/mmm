<?php
include('Include/conn.php');
include('Include/user_details.php');
if($user_status=="Block")
  header('location:/dash/Soppurt.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>My Page</title>
	<link rel="stylesheet" type="text/css" href="Css/my details.css">
	<script type="text/javascript" src="Js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="Js/sideDown.js"></script>
</head>
<body>
<?php include('Include/header.php'); ?>
<div class="body">
<div class="title_bar"><span style="color: white; font-weight: 600; font-size: 13px;">My Page</span></div>	

<!-- Main Container -->
<div class="Container">
<!-- My data	 -->
<div class="my_info">
<div style="height: 600px;">
<div class="my_info_area" style="">
           <div class="gs"> <span>General information (click on the name, then enter the data and then hit "Save" down on the bottom left hand side.)</span>   </div>
                
                
             <table>
              <tr><td><div class="datagrid">Create the ending of your Referral link by clicking here:</div></td><td><div class="datagrid_2"></div></td></tr>  
                
      

                 <tr><td><div class='datagrid'>First Name</div></td><td><div class='datagrid_2'><input type='text' class='text' value="<?php echo $user_name; ?>" ></div></td></tr>  
                 
                 <tr><td><div class='datagrid'>Last Name</div></td><td><div class='datagrid_2'><input type='text' class='text' value="<?php  echo  $guider_email; ?>"></div></td></tr>  
                 
                  <tr><td class='dc'><div class='atagrid'>Status</div></td><td class='dc'><div class='datagrid_2'></div></td></tr> 
                 
                  <tr><td class='dc'><div class='datagrid' style='color: green;'>Email</div></td><td class='dc'><div class='datagrid_2'><input type='email' style='width: 300px; border: none;font-weight: 700; color: green;    background-color: #efefef;' value='<?php echo $user_email ?>'></div></td></tr>  
                 
                  <tr><td  class='dc'><div class='datagrid' style='color: green;'>Call Number</div></td><td class='dc'><div class='datagrid_2'><input type='number' style='width: 300px;  border: none; font-weight: 700; color: green;    background-color: #efefef;' value="<?php echo $user_mobile; ?>"></div></td></tr>
 
                  <tr><td  class="dc"><div class="datagrid">Country</div></td><td class="dc"><div class="datagrid_2"><span><?php echo $user_country; ?></span></div></td></tr>  

                  <tr><td  class='dc'><div class='datagrid'>Registration date</div></td><td class='dc'><div class='datagrid_2'><span><?php echo $user_reg_date; ?></span></div></td></tr>  

                  <tr><td><div class="datagrid">Date of birth</div></td><td><div class="datagrid_2"></div></td></tr>               
            </table>   
            <div class="gs"> <span>Contacts</span>   </div>
                
                <table>
            <tr><td><div class="datagrid">Skype</div></td><td><div class="datagrid_2"><input type="text" class="text"></div></td></tr> 
            <tr><td><div class="datagrid">Yahoo! Messenger</div></td><td><div class="datagrid_2"><input type="text" class="text"></div></td></tr> 
            <tr><td><div class="datagrid">Website</div></td><td><div class="datagrid_2"><input type="text" class="text"></div></td></tr> 
            <tr><td><div class="datagrid">Facebook</div></td><td><div class="datagrid_2"><input type="text" class="text"></div></td></tr> 
            <tr><td><div class="datagrid">Google</div></td><td><div class="datagrid_2"><input type="text" class="text"></div></td></tr> 
            <tr><td><div class="datagrid">Twitter</div></td><td><div class="datagrid_2"><input type="text" class="text"></div></td></tr> 
                   
            </table> 
             <div class="gs"> <span>Personal information</span>   </div>   
            <table>
            <tr><td><div class="datagrid">Information</div></td><td><div class="datagrid_2"><input type="text" class="text"></div></td></tr> 
            <tr><td><div class="datagrid">Our Contacts</div></td><td><div class="datagrid_2"><input type="text" class="text"></div></td></tr> 
            <tr><td><div class="datagrid">Status</div></td><td><div class="datagrid_2"><span><?php echo $user_level; ?></span></div></td></tr>     
                
            </table>
                
            <div class="gs"> <span style="color: black; font-weight: bold;">Guider / Your direct guider</span>   </div>    
             <table>
                 <tr><td><div class="datagrid">First Name</div></td><td><div class="datagrid_2"><input type="text" class="text" value="<?php echo $your_guider_name; ?>" ></div></td></tr> 
            <tr><td><div class="datagrid">Last Name</div></td><td><div class="datagrid_2"><input type="text" class="text" ></div></td></tr> 
                 <tr><td><div class="datagrid">Status</div></td><td><div class="datagrid_2"><span><?php echo $your_guider_Level; ?></span></div></td></tr> 
            <tr><td><div class="datagrid">Email</div></td><td><div class="datagrid_2"><input type="email" style="width: 300px; border: none;" value="<?php echo $your_guider_Email; ?>"> </div></td></tr>  
                 
                  <tr><td><div class="datagrid">Call Number</div></td><td><div class="datagrid_2"><input type="number" style="width: 300px;  border: none;" value="<?php echo $your_guider_mobile; ?>"></div></td></tr>      
            </table>  
             <div class="gs"> <span style="color: black; font-weight: bold;">Guider / Your guider`s guider.</span>   </div>  
            <table>
             <tr><td><div class="datagrid">First Name</div></td><td><div class="datagrid_2"><input type="text" class="text" value="<?php echo $guider_guider_name; ?> "></div></td></tr> 
            <tr><td><div class="datagrid">Last Name</div></td><td><div class="datagrid_2"><input type="text" class="text"></div></td></tr> 
                 <tr><td><div class="datagrid">Status</div></td><td><div class="datagrid_2"><span><?php echo $guider_guider_Level; ?></span></div></td></tr> 
            <tr><td><div class="datagrid">Email</div></td><td><div class="datagrid_2"><input type="email" style="width: 300px; border: none;" value="<?php echo  $guider_guider_Email; ?>"> </div></td></tr>  
                 
                  <tr><td><div class="datagrid">Call Number</div></td><td><div class="datagrid_2"><input type="number" style="width: 300px;  border: none;" value="<?php echo $guider_guider_mobile; ?>"></div></td></tr>         
            </table>    
            </div> 	
</div>	
</div>
<!-- Setting	 -->
<div class="my_data">
	
<div class="headng_of_page">
          <div>Your Data</div>
          </div> 
               
            <div class="setting_info">
            <div class="setting bar"><span class="icon_pancil"><span class="name">Setting</span></span> </div> 
            <div class="setting_area"> 
            <div class="border_bar">
            Time Zone: &nbsp;&nbsp;&nbsp;<select style="width: 150px;"><option>(UTC)Russia Time Zone</option></select>
            </div>
            <div class="border_bar">
            Language: &nbsp;&nbsp;&nbsp;&nbsp;<select style="width: 150px;"><option>English</option></select>
            </div>
             <div class="border_bar">
            Currency: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select style="width: 150px;"><option>Bitcoin(BTC)</option></select>
            </div> 
            <div class="border_bar">
            <input type="checkbox" value=""> Show refferral name instead of full name
            </div> 
             <div class="border_bar">
            <input type="checkbox" value=""> Hide Mobile in Orders
            </div>
             <div class="border_bar">
            <center> <a href="#" class="save_ac">
        <span class="save_ac_btn"><span class="save_ac_btn_icon">Save</span></span>    
        </a> </center>
            </div>     
            </div>      
            <div class="guider bar"><span class="icon_pancil"><span class="name">Guider</span></span></div>
            <div class="guide_view">
            <div style="margin: 10px; font-weight: 600; font-size: 15px;">Your current Guider<br>
            <span class="change_guider"><?php echo $your_guider_email; ?></span>    
            </div>    
            </div>    
            <div class="reffrer bar"><span class="icon_pancil"><span class="name">Reffrerls</span></span></div>
            <div class="refferal_view">
            <div>
            Your Referrar<br>
            <span style="display: inline-block;font-size: 15px;font-weight: 700;"><?php  echo $your_guider_email; ?></span><br><br>
            We recommand you to create an INVITE, this will help to attract referrals.(The top Field of Information) <br><br> 
             <a href="#" class="save_ac" id="open_my_link">
        <span class="save_ac_btn"><span style="font-size: 12px;">Show my referral link</span></span>    
        </a>    
            </div>    
            </div> 
                   
            <div class="other bar"><span class="icon_pancil"><span class="name">Other</span></span></div>  
            <div class="other_view">
            <div>
              <a href="#" class="save_ac" id="create_key_btn">
        <span class="save_ac_btn"><span class="save_ac_btn_icon"><span class="change" style="display: none;">Re-</span>Create(GA) Key</span></span>    
        </a><br><br>  <a href="#" class="save_ac" id="remove_key" style="display: none;">
        <span class="save_ac_btn"><span class="remove_ac_btn_icon" style="font-size: 14px;">Remove (GA) Key</span></span>    
        </a> 
        
            </div>    
            </div>    
            </div>

</div>

</div>
<!-- End Container -->
<div class="con_ref_link" style="position: fixed;width: 100%; height: 100%; background: #00000052; z-index: 1000;top: 0; display: none;">
<div class="ref_box" style="width: 700px;border: 1px solid #8E846B;border-radius: 5px;height: 105px;z-index: 10002;padding: 5px;
    border: 1px solid #8E846B;border-radius: 5px;display: none;background: #fff url(Images/grey.png) repeat 50% 50%; margin: 10% auto;">
<div style="color: white; font-size: 13px;">Referrals Link</div>
<div style="background: white; box-sizing: border-box; padding: 10px; height: 80px;">
<input type="text" name="" value="localhost/3/registration_main.php?invite=<?php echo $user_email; ?>" style="width: 100%;">
<div align="right" style="margin: 10px 0px;">
  <a href="#" class="close_ref_box"><span>Close</span></a>
</div>  
</div>  
</div>  
</div>


<footer>
<div class="s_c_btn">
           <a href="#" class="save_ac">
        <span class="save_ac_btn"><span class="save_ac_btn_icon">Save</span></span>    
        </a> 
          <a href="#" class="cancel_ac ">
        <span class="cancel_ac_btn"><span class="cancel_ac_btn_icon">Cancel</span></span>    
        </a> 
          </div>	
</footer>
<!-- End Body -->
</div>

</body>
</html>