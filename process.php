<?php

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$message = wordwrap($message, 70, "\r\n");

$headers = "From:".$email;

$EmailTo = "darmen1@gmail.com";
$Subject = "Сообщение от посетителя сайта Solpro";

// prepare email body text
$Body .= "Имя: ";
$Body .= $name;
$Body .= "\n";

$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Сообщение: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, $headers);

// redirect to success page
if ($success) {
   echo "success";
} else {
    echo "invalid";
}

?>
