<?php


$to = '24451@ma.nl';
$subject = $_POST ['subject'];
$message = $_POST ['message'];
$headers = 'From: ' . $_POST['from'];

// verstuur mail
mail($to, $subject, $message, $headers);

// bevestiging
echo 'Uw mail is verstuur!';

