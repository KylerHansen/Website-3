<!DOCTYPE html>
<html>
<head>
<title>Mikes Auto Mart</title>
<link href="styleA.css" rel="stylesheet" type="text/css"/>
<script src="JavaScriptA.js"></script>
<style>
#financing{color:white;}
</style>

</head>

<body>
<?php require "navbar.php";?>


<div class="mainContent">
<div class="loanLinks">
<h2>Loan Companies:</h2>
<ul>
<li><a href="https://www.gwcu.org/loans/apply" target="_blank">Goldenwest Credit Union</a></li><br>
<li><a href="https://www.capitalone.com/" target="_blank">Capital One</a></li><br>
<li><a href="https://www.discover.com/personal-loans/?ICMPGN=PUB_HDR_LOANS_DPL" target="_blank">Discover</a></li><br>
<li><a href="https://www.americafirst.com/loans/personal-loans/personal-loans.html" target="_blank">America First Credit Union</a></li><br>
</ul>
</div>


<div class="Loan">
<h2>Loan Information</h2>
Years:   <input type="textbox" id="years"><br><br>
Interest: <input type="textbox" id="rate"><br><br>
Loan amount: <input type="textbox" id="amount"><br><br><br>
<button id="calculate" >Calculate Now!</button>
<button type="reset">Reset </button><br><br>
<h2>Loan Details</h2>
Monthly Payments <input type="textbox" id="payment"><br><br>
P/I <input type="textbox" id="pi">
</div>



</div>

</body>
</html>