<?php
echo '<html><head><title>Cyber Bank</title><link rel="stylesheet" href="style1.css"><meta http-equiv="Cache-control" content="public"></head><body> <div class="centered"><div id="in" class="border1">';
 $otp=$_REQUEST['otp'];
  if($otp=="8200")
 {
	echo "<p class='s3'> Welcome Alice!<br> Flag is 'BlockTheUserAfterCertainUnsuccessfulAttempts'</p>";
	echo "<INPUT Type='submit' VALUE='Logout' onClick='history.go(-1);return true;'></br>";  
 }
 
else{
	echo "<p class='s3'>Incorrect OTP.</p>";
	echo "<INPUT Type='submit' VALUE='Back' onClick='history.go(-1);return true;'></br>"; 
}
 
?>