<?php
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];
	
	$email_from = 'EastTutorials@avinashkr.com';
	$emai_subject = "New 'Contact Me' Form"
	$email_body = "User Name: $name.\n".
					"User Surname: $surname.\n". 
						"User Email: $visitor_email.\n". 
							"User Message: $message.\n";
							
	
	$to = "afk.msn@gmail.com";

	$headers = "From: $email_from \r\n";

	$headers .= "Reply-To: $visitor_email \r\n";
	
	mail($to,$email_subject,$email_body,$headers)
	
	header("Location: index.html");
	
	
?>