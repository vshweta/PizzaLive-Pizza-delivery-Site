<?php


if(isset($_REQUEST['email'])){
	$admin_email="feedback.pizzalive@gmail.com";
	$fname=$_REQUEST['fname'];
	$lname=$_REQUEST['lname'];
	$city=$_REQUEST['contact'];
	$email=$_REQUEST['email'];
	$feedback=$_REQUEST['feedback'];
	
	$message="fname: $fname\nlname: $lname\ncity:$contact\nemail: $email\nfeedback: $feedback";
	mail("$admin_email","You have recieved a feedback", "Information Requested:\n$message","From:" .$email);
	header("Location: thankyou.php");
	}
?>