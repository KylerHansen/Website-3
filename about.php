<!DOCTYPE html>
<html>
<head>
<title>Mikes Auto Mart</title>
<link href="styleA.css" rel="stylesheet" type="text/css"/>
<style>
#about{color:white;}
</style>
</head>

<body>
<?php require "navbar.php";?>



<div class="mainContent">
<div class="Contact">
<form autocomplete="on" action="mail.php" method="post">

<h4>Please fill out the forum and click submit. Required fields(<font color="red">*</font>)</h4>
<h2>Contact Information</h2>

<font color="red">*</font>First Name: <input name="fname" type="textbox" required><br><br>

<font color="red">*</font>Last Name: <input name="lname" type="textbox"required><br><br>

<font color="red">*</font>Email Address: <input name="email" type="textbox"required><br><br>

<font color="red">*</font>Day Phone: <input name="dphone" type="textbox"required><br><br>

Home Phone: <input name="hphone" type="textbox"><br><br>

Street Address: <input name="address" type="textbox"><br><br>

City: <input name="city" type="textbox"><br><br>

State: <input id="state" type="textbox" name="state"><br><br>

Zip Code: <input name="zip" type="textbox"><br><br>

Comments: <textarea name="message" rows="8" cols="50"></textarea><br><br>

<button type="Submit">Submit</button>
</form>
</div>


<div class="emailLinks">

<h3>Finance Manager</h3>
<p>801-555-1234</p>
<a href="mailto:MikesFinances@MikesAutoMart.com">SarahJohnson@MikesAutoMart.com</a>
<br>
<br>
<h3>Sales Manager</h3>
<p>801-555-4567</p>
<a href="mailto:StevenJohnson@MikesAutoMart.com">StevenJohnson@MikesAutoMart.com</a>
<br>
<br>
<h3>Service Department</h3>
<p>801-555-78910</p>
<a href="mailto:MattJohnson@MikesAutoMart.com">MattJohnson@MikesAutoMart.com</a>
<br>
<br>
<h3>Parts Department</h3>
<p>801-555-1112</p>
<a href="mailto:LaFawnduhJohnson@MikesAutoMart.com">LaFawnduhJohnson@MikesAutoMart.com</a>
<br>
<br>
<h3>Web Developer</h3>
<p>801-555-1314</p>
<a href="mailto:Kyler4Hansen@gmail.com">Kyler4Hansen@gmail.com</a>


</div>
</div>

</body>
</html>