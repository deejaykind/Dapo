<?php 
	$Surname = $_POST['Surname'];
	$Firstname = $_POST['Firstname'];
	$emailaddress = $_POST['email'];
	$number = $_POST['Phone'];
	$message = $_POST['comments'];
	$formcontent = "From: $Surname \n First Name: $Firstname \n Email: $emailaddress \n Phone: $number \n Message: $message";
	$recipient = "info@effluxcompany.com";
	$subject = "Efflux Contact Form";
	$mailheader = "From: $email \r\n";

	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	header("Location: thank_you.php");
?>