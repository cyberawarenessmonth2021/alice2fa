<?php
echo '<html><head><title>Cyber Awareness Month</title><link rel="stylesheet" href="style.css"><meta http-equiv="Cache-control" content="public"></head><body> <div class="centered"><div id="in" class="border1">';
 $otp=$_REQUEST['ip'];
  if($otp=="169.254.169.254")
 {
	echo "<p class='s3'> Welcome Alice!<br> Flag is 'EnableIMDSv2inAWSEC2Instances'</p>";
	echo "<INPUT Type='submit' VALUE='Close' onClick='window.close()'></br>";  
 }
 
else{
	echo "<p class='s3'>Access denined</p>";
	echo "<INPUT Type='submit' VALUE='Back' onClick='history.go(-1);return true;'></br>"; 
}
 
?>
