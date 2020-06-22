
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Css/style.css"/>
    <script>
   function localTime(){
     var d = new Date();
    var stin = d.toLocaleTimeString();
      var ele =  document.getElementById("ti").innerHTML = stin;
   }
        
    </script>
    <title>Administrator</title>
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    </head>
    <body onload="localTime();">
    <div class="container">
        <div class="main">
        <div class="header"><span>Administrator</span></div>
        <div class="panel">
        <div class="panel_1"><span>MMM</span></div>
        <div class="panel_2"><span id="mainnn">Time: <span id="ti" style="margin-left: 0px;"></span></span></div>    
        <div class="panel_3">
        <h2><a href="login.html">Logout</a></h2>    
        </div>
        </div>    
        <div class="table">
        <div class="table_1">
        <details open>
        <summary>ADMIN OPTION</summary>  
        <ol>
        <li><a href="Search Member/Search Member.php">Search Members</a></li>    
        <li><a href="Member Registration Report/Member Regi Report.php">Member Registration Report</a></li>
        <li><a href="Today's summary.html">Today's Summary</a></li>   
          <li><a href="admin change pass and id.php">Change Admin User & Password</a></li>   
            <li><a href="Add News/add news.php">Add News (Scrolling News)</a></li>
            <li><a href="Add TestMonials/Add TestMonials.php">Add Testimonials</a></li>
<!--
            <li><a href="#">Facebook URL Accept List</a></li>
            <li><a href="#">Sucess Facebook URL List</a></li>
            <li><a href="#">Reject Facebook URL List</a></li>
            <li><a href="#">Edit/View Member Profile</a></li>
-->
            <li><a href="Happiness GH Letter List/Happiness GH Letter List.php">Happiness GH Letter List</a></li>
            <li><a href="Accept GH Happiness Letter List/Accept GH Happiness Letter List.php">Accept GH Happiness Letter List</a></li>
            <li><a href="Reject%20Happiness%20letter%20list.php">Reject GH Happiness Letter List</a></li>
        </ol>    
        </details>
        <details style="margin-top: 10px;">
        <summary>MEMBERSHIP FEEDBACK</summary>  
        <ol>
        <li><a href="member contact report.html">Contact Report</a></li>    
        <li><a href="Send Mail To Member Inbox.php">Send Mail To Member Inbox</a></li>
        <li><a href="Mail Send Reply By Members Report.html">Mail Send Reply By Members Report</a></li>   
          <li><a href="Send Mail By Selected Members.html">Send Mail By Selected Members</a></li>   
            <li><a href="Mail Send By Members Report.php">	Mail Send By Members Report</a></li>
            <li><a href="Send SMS to All Active Members.html">Send SMS to All Active Members</a></li>
            <li><a href="Send SMS to All  InActive Members.html">	Send SMS to All InActive Members</a></li>
            
        </ol>    
        </details>  




        <details style="margin-top: 10px;" open>
        <summary>Ticket</summary>  
        <ol>
        <!-- <li><a href="Send Mail To Member Inbox.php">Send Mail To Member Inbox</a></li> -->
            <li><a href="Mail Send By Members Report.php">  Mail Send By Members Report</a></li>
            <li><a href="repied by admin.php">  Replied By Admin</a></li>
            
        </ol>    
        </details>  
            
        </div>
        <div class="table_2">
         <details open>
        <summary>BLOCK ID & IP LIST</summary>  
        <ol>
        <li><a href="admin_block_list.php">Blocked ID List</a></li>    
        <li><a href="#">IP Address List (Used More Than One Time)</a></li>
      
            
        </ol>    
        </details>       
             <details style="margin-top: 10px;" open>
        <summary>MANAGER</summary>  
        <ol>
        <li><a href="add mngr.php">Add Manager</a></li>    
        <li><a href="manager list.php">Manager List</a></li>
        <li><a href="delete manager.php">Delete Manager</a></li>       
        </ol>    
        </details>           

<details style="margin-top: 10px;" open>
        <summary>Web Task</summary>  
        <ol>
        <li><a href="Add Task.php">Add Task</a></li>    
        <li><a href="Task lists.php">Task List</a></li>
        <li><a href="user task.php">User Completed Task lists</a></li> 
             <li><a href="#">Accepted Task</a></li>  
             <li><a href="#">Rejected Task</a></li> 
        </ol>    
        </details> 


        </div>  
            
        <div class="table_3">
         <details open>
        <summary>MMM MENU PART-1</summary>  
        <ol>
        <li><a href="find SPONSOR.php">Find Sponsor</a></li>    
        <li><a href="Commitment Reports.php">Commitment Reports</a></li>        
            <li><a href="Re-Commitment Reports.php">Re-Commitment Reports</a></li>    
            <li><a href="Date wise Send-Received Reports.html">Date wise Send-Received Reports</a></li>    
            <li><a href="Pending Send-Received Request Reports.php">Pending Send-Received Request Reports</a></li>    
            <li><a href="Payments Not Accepted Paid.html">Payments Not Accepted/Paid</a></li>    
            <li><a href="Payments Not Accepted Paid.html">Payments Not Accepted/Paid (With Receipt)</a></li>    
            <li><a href="Cancel request.html">Cancel Request</a></li>    
            <li><a href="CRM.html">	CRM (Members Details)</a></li>    
           <!--  <li  style="background-color: green; color: white;"><a href="link 20.php" style="color: white;">Send Link of 20% (Manual FOR ALL)</a></li>   -->  
           <!--  <li  style="background-color: green; color: white; border-top: 1px solid white;"><a href="link 80.php" style="color: white;">Send Link of 80% (Manual FOR ALL)</a></li>   -->  
         <li  style="background-color: green; color: white; border-top: 1px solid white;"><a href="link 100 USD.php" style="color: white;">Send Link of 100% USD (Manual FOR ALL)</a></li>        
         <li  style="background-color: green; color: white; border-top: 1px solid white;"><a href="link 100 BTC.php" style="color: white;">Send Link of 100% BTC (Manual FOR ALL)</a></li>        
            <li><a href="List of Confirm Commitments.html">List of Confirm Commitments</a></li>    
            <li><a href="List of Confirm Commitments by Admin.html">List of Confirm Commitments by Admin</a></li>    
            
            
        </ol>    
        </details>
        <details style="margin-top: 10px;" open>
        <summary>MMM MENU PART-2</summary>  
        <ol>
        <li><a href="Registered but not committed.html">Registered but not committed</a></li>    
        <li style="background-color: green; color: white; border-top: 1px solid white;"><a href="Deposit Amount to Panel Wallet.php" style="color: white;">Deposit to Incentive Wallet</a></li>        
            <li><a href="admin with.php">Withdrawal By Admin</a></li>    
            <li><a href="Increase Commitment Number.html">Increase Commitment No</a></li>    
            <li><a href="Increase Assignment No.html">Increase Assignment No</a></li>    
            <li><a href="Increase Request Number.html">Increase Request No</a></li>    
            <li><a href="Cancel Commitments.html">Delete Commitment</a></li>    
            <li><a href="extand time.html">Extend Time of Assignment</a></li>    
            <li><a href="Member Report.html">Member Report</a></li>    
            
        </ol>    
        </details>    
            
        </div>    
        </div>    
            
            
            
        </div>
        </div>
    
    </body>
</html>