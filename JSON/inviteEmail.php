<?php
$to = "ngoc.mai2947@gmail.com";


$subject = 'the subject';
$message = 'hello';
$headers = 'From: duykyxk4797@gmail.com' . "\r\n" .
    'Reply-To: duykyxk4797@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?>