<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$msg = $_POST['message'];

	if(!empty($name) && !empty($email) && !empty($msg)){
		$receiver = "sample@example.com";
		$subject = "From: $name <$email>";
		$body = "Name: $name\nEmail: $email\nMessage: $msg\n\nRegards,\n$name";
		$sender = "From: $email";
	}
?>