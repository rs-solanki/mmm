<?php
include('Header bar.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>CONTACT</title>
	<link rel="stylesheet" type="text/css" href="Css/contact.css">
</head>
<body>
<div class="content">
	<h2 class="heading">contact</h2>
	<div class="container">
  <form action="/action_page.php">

  <div class="row">
    <div class="col-25">
      <label for="fname">Theme*:</label>
    </div>
    <div class="col-75">
     <select class="feedback_themes" name="theme">
<option value="0" disabled="disabled" selected="selected">Select theme</option>
<option value="i_am_newcomer">I am new here. Contact me.</option>
<option value="edit_phone">I want to change my phone in PO</option>
<option value="appeal_to_administration">Letter to Administration</option>
</select>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="subject">Text message*:</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label for="lname">Your name*:</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="Your name..">
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label for="country">Status:</label>
    </div>
    <div class="col-75">
      <select id="country" name="country">
        <option value="non-member">Non-member</option>
        <option value="member">Member</option>
      </select>
    </div>
  </div>

<div class="row">
    <div class="col-25">
      <label for="lname">Phone:</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="Phone..">
    </div>
  </div>

<div class="row">
    <div class="col-25">
      <label for="lname">Email*:</label>
      <span style="display: block; margin-top: -10px; font-size: 12px; color: grey;">Your “reply-to” email address</span>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="Email..">
    </div>
  </div>

<div class="row">
    <div class="col-25">
      <label for="lname">Skype:</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname">
    </div>
  </div>

<div class="row">
    <div class="col-25">
      <label for="lname">Image Captcha:</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="34d8sfn">
    </div>
  </div>







  <div class="row">
    <input type="submit" value="Submit">
  </div>

  
  </form>
</div>






</div>
<?php
 include('Footer.php');
 ?>
</body>
</html>