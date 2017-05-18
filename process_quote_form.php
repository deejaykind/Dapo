<?php 
	$Surname = $_POST['Surname'];
	$Firstname = $_POST['Firstname'];
	$emailaddress = $_POST['email'];
	$number = $_POST['Phone'];
	$message = $_POST['comments'];
	$formcontent = "From: $Firstname \n Email: $emailaddress \n Phone: $number \n Message: $message";
	$recipient = "adisa.ahmed881@gmail.com";
	$subject = "Dapodesina Quote Form";
	$mailheader = "From: $emailaddress \r\n";

	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	header("Location: thank_you.php");
?>