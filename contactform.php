
<?php
	$name = $_POST['name'];

	$subject = 'VivaryGolf.com Contact Form';

	$email = $_POST['email'];

	$message = $_POST['message'];

	$emailContent = "\r\nName: ".$name." \r\nEmail: ". $email . "\r\n\r\nMessage: ".$message;

	$recipient = 'vivarysecretary@btconnect.com';

	$headers = 'From: support@vivarygolf.com';

	if(mail($recipient, $subject, $emailContent, $headers)) {
		setcookie('CONTACT', 'SENT', time()+60);
		header('Location: contact.php');
	} else {
		setcookie('CONTACT', 'ERROR', time()+60);
		header('Location: contact.php');
	}