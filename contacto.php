<?php

    $nombre = $_POST['nombre'];
    $zona = $_POST['zona'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $from = $_POST['nombre'];
    $to = "xxxx@gmail.com";
    $consulta = $_POST['consulta']; 
    $subject = "Nueva consulta de usuario";

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$nombre." \" <".$email.">\n";

    $message = "Este mensaje fue enviado por: " . $nombre . " \r\n";
    $message .= "Su e-mail es: " . $email . " \r\n";
    $message .= "Teléfono de contacto: " . $telefono . " \r\n";
    $message .= "Mensaje: " . $_POST['consulta'] . " \r\n";
    $para = 'xxx@gmail.com';
    $asunto = 'Nueva consulta de usuario';

    mail( $para, $asunto, $message, $header);
    echo "$para <br>,$asunto, <br> $message, <br> $header";
    
    header("Location: http://glewnet.com.ar/pages/contacto.html");
exit();

    
?>