<?php
$conn = mysqli_connect('localhost','root','','mmm');

$topic = $_POST['topic'];
$title = $_POST['title'];
$msg = $_POST['msg'];
$file = $_FILES['img'];
$submit = $_POST['Save'];

if($submit){
    
$filename = $_FILES['img']['name'];
$tempname = $_FILES['img']['tmp_name'];
$folder = "T_Img/".$filename;
 move_uploaded_file($tempname, $folder); 
    
if($msg != "" && $filename != "" && $topic != "" && $title != ""){


$q = "INSERT INTO `Tickets` (`Topics`, `Title`, `Msg`, `Img`) VALUES ( '$topic','$title','$msg','$folder')";
 
 $data = mysqli_query($conn, $q);

 if($data){

    echo "<script>alert('Save Ticket');</script>";
 }

}
else{
    echo "<script>alert('Ticket Not Save');</script>";
}



}





?>