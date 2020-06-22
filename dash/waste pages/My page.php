<?php
include('Include/conn.php');
include('Include/user_details.php');

?>
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="Css/My page.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
     <script src="Js/jquery-3.3.1.min.js"></script>
     <script type="text/javascript" src="Js/sideDown.js"></script>
     
</head>

<body>
    <div class="body">
      <?php include('Include/header.php');?>
        <div class="name_bar">
         <div class="headng_of_page">
          <div>My Page</div>
          </div>
            <div class="work_area">
            <div class="My_info">
                
            <div class="my_info_area">
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
                
            <div class="My_data">
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
            <div class="footer_btns">
             <div class="s_c_btn">
           <a href="#" class="save_ac">
        <span class="save_ac_btn"><span class="save_ac_btn_icon">Save</span></span>    
        </a> 
          <a href="#" class="cancel_ac ">
        <span class="cancel_ac_btn"><span class="cancel_ac_btn_icon">Cancel</span></span>    
        </a> 
          </div>
            
            
            </div>
        </div>
        
    </div>
    
      <div data-brackets-id="3730" class="reffer_panel_windows" id="reffer_windows_panel" style="">
            <span data-brackets-id="3731" style="font-weight: bold; color: white;">Referrals Link</span>   
           <div data-brackets-id="3732" class="reffer_box">
               <div data-brackets-id="3733" class="reffer_code">
               <input data-brackets-id="3734" type="text" value="http://localhost/3/registration_main.php?invite=<?php echo $user_email; ?>" readonly="">
               </div>
               <a data-brackets-id="3735" href="#" id="close_link">
               <span data-brackets-id="3736">Close</span>
               </a>
               </div>
           </div>
    <div class="create_key_box">
    <span class="heading_key"  style="font-weight: bold; color: white;">Key (GA) was created</span>
    <div class="key_area">
    <div style="padding: 30px;"><span style="color: red;">Be sure to save this key (GA)! Without it you will be hard to get to your account</span><br>That's the key code:<br><span class="your_key_code" style="font-weight: 700;">BJJGSHJSJ6567467GJHHFGH6567Gh</span></div>    
    <a href="#" id="close_key_box"><span>Close</span></a>    
    </div>
    </div>
    
    </body> 
        
</html>
