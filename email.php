<?php





$to=$email;

$mess=md5($to);


$subject = 'verify email';
$message = "please verify email \r\n eventock.com/process4.php?key='".$mess."' ";
$message = wordwrap($message, 70, "\r\n");
$headers = 'From: hamzashafqat@csp.com.pk' . "\r\n" .
    'Reply-To: hamzashafqat@csp.com.pk' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


?>