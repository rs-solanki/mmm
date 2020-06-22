<?php
include('Header bar.php');
include('Include/conn.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Testmonials</title>
	<link rel="stylesheet" type="text/css" href="Css/Testmonials.css">
</head>
<body>
<div class="content">
<h2 class="heading">LETTERS ABOUT GETTING HELP</h2>
<div class="query">
<label for="email">Filter by E-mail: <input type="email" name=""></label>	
<label for="date">Filter by Date: <input type="date" name=""></label>
<label>Has Video <input type="checkbox" name=""></label>
<label>Show Only Video <input type="checkbox" name=""></label>
<label>Sort Sum <input type="checkbox" name=""></label>
<div align="right" style="box-sizing: border-box; padding-right: 90px; margin-top: 20px;">
<input type="submit" name="" value="Search" class="search">
</div>
</div>

<?php 
            $q = "SELECT * FROM  testmonials WHERE status = 'accept'";
            $run = mysqli_query($con,$q);
            while ($res = mysqli_fetch_array($run)) {
                
        ?>

<div class="LOH">
<p class="date">Date: <b><?php echo $res['entrydate']; ?></b> № <b><?php echo $res['Id']; ?></b> </p>
<p class="amount">Assistance received: <span class="summ"><?php echo $res['Amount']; ?></span><span class="currency"> usd</span></p>	
<p class="testimonial_item_content"><?php echo $res['TestMsg']; ?></p>
<img src="<?php echo $res['Img']; ?>"><br><br>
<iframe width="620" height="315" src="https://www.youtube.com/embed/<?php echo $res['Video_link']; ?>"></iframe>

</div>

<?php  } ?>








<div class="join">join our community</div> 
</div>
<?php
include('Footer.php');
?>
</body>
</html>