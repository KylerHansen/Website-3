
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

<?php
$to = $_POST['email'];

$subject="Contact Forum Response";

$txt=$_POST['message']." <br> From:<br>"
.$_POST['fname']." ".$_POST['lname']."<br>".
$_POST['dphone'].
$_POST['hphone']."<br>".
$_POST['address']." ".$_POST['city']." ".$_POST['state']." ".$_POST['zip'];

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


mail($to,$subject,$txt,$headers);

?>

<div class="sendEmail">
<h2>Email Submitted with this Information:</h2>

<br>

<b>First Name:</b> <?php echo $_POST['fname'];?> <br><br>

<b>Last Name: </b><?php echo $_POST['lname'];?><br><br>

<b>Email Address: </b><?php echo $_POST['email'];?><br><br>

<b>Day Phone: </b><?php echo $_POST['dphone'];?><br><br>

<b>Home Phone: </b><?php echo $_POST['hphone'];?><br><br>

<b>Street Address:</b><?php echo $_POST['address'];?><br><br>

<b>City: </b><?php echo $_POST['city'];?><br><br>

<b>State:</b> <?php echo $_POST['state'];?><br><br>

<b>Zip Code:</b> <?php echo $_POST['zip'];?><br><br>

<b>Comments:</b> <?php echo $_POST['message'];?><br><br>

</div>

</div>

</body>
</html>