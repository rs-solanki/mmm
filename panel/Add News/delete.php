<?php include('../Inc/conn.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete News</title>
</head>
<body>

<div style="padding: 80px; box-sizing: border-box;">
<?php
$id = $_GET['title'];
?>
<form method="POST" style="padding: 100px;">
<input type="text" name="" value="<?php echo $id ;?>" style="width: 100%;"><br><br>	
<input type="submit" name="Delete">
</form>
<?php  
$id = $_GET['title'];
if(isset($_POST['delete'])){

$q = "DELETE * FROM  news  WHERE News_title = '$id'";
$run = mysqli_query($con,$q);

if($run){

    echo "<script>alert('Delete');</script>";
    echo '<script>window.open("add news.php","_self");</script>';
}

else{
echo "<script>alert('News Not Delete');</script>";
    echo '<script>window.open("add news.php","_self");</script>';

}


}
        
?>


	
</div>


</body>
</html>