<?php
	$mail = $_POST['email'];
	$name = $_POST['sender'];
	$subject = "PORTFOLIO SITE EMAIL";
	$text = $_POST['message'];
 	$to = "dcatzva@gmail.com";
	

 $message =" You received  a mail from ".$name.", ".$mail;
 $message .=" Text of the message : ".$text;

 $good_input = htmlentities($message);

 if(mail($to, $subject,$good_input)){
	echo "<p>mail successful send</p>";
} 
else{ 
	echo "<p>there's some errors to send the mail, verify your server options</p>";
}
?>