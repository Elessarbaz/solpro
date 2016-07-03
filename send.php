<?php
    $to = "darmen89@yandex.ru";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $headers = "From: $from";
    $subject = "Сообщение от посетителя сайта Solpro";
    $fields = array();
    $fields{"name"} = "Имя";
    $fields{"email"} = "Email";
    $fields{"message"} = "Текст сообщения";
    $body = "Сообщение:\n\n";
    foreach($fields as $a => $b)
      {
        $body .= sprintf("%20s: %s\n",$b,$_POST[$a]);
      }
    $send = mail($to, $subject, $body, $headers);
?>
