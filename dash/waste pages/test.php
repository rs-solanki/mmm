 <?php
session_start();
// User Details 
include('conn.php');

      $user = $_SESSION['username'];
      $get_user = "SELECT * FROM  registration WHERE E_mail = '$user'";
      $run_user = mysqli_query($con,$get_user);
      $row = mysqli_fetch_array($run_user);

      $user_name = $row['User_name'];
      $user_email = $row['E_mail'];
      $user_mobile = $row['Mobile_number'];
      $user_reg_date = $row['Reg_date'];
      $user_country = $row['Country'];
      $your_guider_email = $row['Invite_email'];
      $guider_email = $row['Guider_email'];
      $guider_mobile = $row['Guider_mobile'];

 $get_your_guider = "SELECT * FROM  registration WHERE E_mail = '$your_guider_email'";
      $run_your_guider = mysqli_query($con,$get_your_guider);
      $row_2 =mysqli_fetch_array($run_your_guider);


      $your_guider_level = $row_2['Level'];
      
      $level = "Participant";

    
$your_guider_guider_email = $row_2['Invite_email'];









      ?>

      <?php
 


      ?>