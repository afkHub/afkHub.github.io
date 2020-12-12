<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];
	
	$mailTo = "afk.msn@gmail.com";
	$headers = "From: ".$mailFrom; 
	$txt = "New Contact Form ".$name. $surname ".\n\n".$message;
	
	mail($mailTo, $subject, $txt, $headers );
	header("Location: index.html?mailsend");
}
