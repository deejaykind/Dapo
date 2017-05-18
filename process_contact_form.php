<?php 
	$fullname = $_POST['name'];
	$emailaddress = $_POST['email'];
	$message = $_POST['comments'];
	$formcontent = "From: $fullname \n Email: $emailaddress \n Message: $message";
	$recipient = "adisa.ahmed881@gmail.com";
	$subject = "Dapodesina Contact Form";
	$mailheader = "From: $emailaddress \r\n";

	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	header("Location: thank_you.php");
?>