    <?php
session_start();
// User Details 

      $user = $_SESSION['username'];
      $get_user = "SELECT * FROM  registration WHERE E_mail = '$user'";
      $run_user = mysqli_query($con,$get_user);
      $row = mysqli_fetch_array($run_user);

      $user_id = $row['User_id'];
      $user_status = $row['Status'];
      $user_name = $row['User_name'];
      $user_email = $row['E_mail'];
      $user_mobile = $row['Mobile_number'];
      $user_reg_date = $row['Reg_date'];
      $user_country = $row['Country'];
       $user_level = $row['Level'];
      $your_guider_email = $row['Invite_email'];
      $Position = $row['Position'];

      // $guider_email = $row['Guider_email'];
      // $guider_mobile = $row['Guider_mobile'];

       $level = "Participant";
      $level_1 = "10K Guider";
      $level_2 = "1K Guider";
      $level_3 = "100K Guider";


      
      $get_your_guider = "SELECT * FROM  registration WHERE E_mail = '$your_guider_email'";
      $run_your_guider = mysqli_query($con,$get_your_guider);
      $row_2 =mysqli_fetch_array($run_your_guider);

      $your_guider_level = $row_2['Level'];
     $your_guider_guider_email = $row_2['Invite_email'];
     $your_guider_nameee = $row_2['User_name'];

    if($your_guider_level == $level){

        $get_guider_guider = "SELECT * FROM  registration WHERE E_mail = '$your_guider_guider_email'";
          $run_guider_guider = mysqli_query($con,$get_guider_guider);
      $row_3 =mysqli_fetch_array($run_guider_guider);

      $your_guider_name = $row_3['User_name'];
      $your_guider_Email = $row_3['E_mail'];
      $your_guider_Level = $row_3['Level'];
      $your_guider_mobile = $row_3['Mobile_number'];
      $three = $row_3['Invite_email'];

 $three_guider_guider = "SELECT * FROM  registration WHERE E_mail = '$three'";
          $run_guider_three_guider = mysqli_query($con,$three_guider_guider);
      $row_4 =mysqli_fetch_array($run_guider_three_guider);

    $guider_guider_name = $row_4['User_name'];
      $guider_guider_Email = $row_4['E_mail'];
      $guider_guider_Level = $row_4['Level'];
      $guider_guider_mobile = $row_4['Mobile_number'];


    }

if($your_guider_level == $level_1){


$your_guider_name = $row_2['User_name'];
      $your_guider_Email = $row_2['E_mail'];
      $your_guider_Level = $row_2['Level'];
      $your_guider_mobile = $row_2['Mobile_number'];

$get_guider_guider = "SELECT * FROM  registration WHERE E_mail = '$your_guider_guider_email'";
          $run_guider_guider = mysqli_query($con,$get_guider_guider);
      $row_3 =mysqli_fetch_array($run_guider_guider);

 $guider_guider_name = $row_3['User_name'];
      $guider_guider_Email = $row_3['E_mail'];
      $guider_guider_Level = $row_3['Level'];
      $guider_guider_mobile = $row_3['Mobile_number'];



}






else{





}
    
      


//     if($your_guider_level == $level){

//         $get_guider_guider = "SELECT * FROM  registration WHERE E_mail = '$your_guider_guider_email'";
//           $run_guider_guider = mysqli_query($con,$get_guider_guider);
//       $row_3 =mysqli_fetch_array($run_guider_guider);

//       $your_guider_name = $row_3['User_name'];
//       $your_guider_Email = $row_3['E_mail'];
//       $your_guider_Level = $row_3['Level'];
//       $your_guider_mobile = $row_3['Mobile_number'];



//       // $guider_guider = $row_3['User_name'];
//       // $guider_guider_mobile = $row_3['Mobile_number'];








//     }else{
      
// $get_guider_guider = "SELECT * FROM  registration WHERE E_mail = '$your_guider_guider_email'";
//           $run_guider_guider = mysqli_query($conn,$get_guider_guider);
//       $row_3 =mysqli_fetch_array($run_guider_guider);
      
//       $your_guider_name = $row_2['User_name'];
//       $your_guider_Email = $row_2['E_mail'];
//       $your_guider_Level = $row_2['Level'];
//       $your_guider_mobile = $row_2['Mobile_number'];
//      $guider_guider = $row_3['User_name'];
//       $guider_guider_mobile = $row_3['Mobile_number'];


//     }
// 

      

   
// Your Guider Guider Details


       

?>