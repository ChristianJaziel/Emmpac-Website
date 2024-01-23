<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $phone = $_POST["PhoneN"];
    $message = $_POST["Message"];

    // Configurar el objeto PHPMailer
    $mail = new PHPMailer(true);
    try {
        $mail->setFrom($email);
        $mail->addAddress("nicolasrayon.dev@gmail.com");
        $mail->Subject = "Nuevo formulario enviado";
        $mail->Body = "Nombre: $name\nEmail: $email\nTeléfono: $phone\nMensaje: $message";

        // Enviar el correo electrónico
        $mail->send();

        // Redirigir al usuario a index.html después de procesar el formulario
        header("Location: index.html");
        exit();
    } catch (Exception $e) {
        echo "Error al enviar el correo: {$mail->ErrorInfo}";
    }
}
?>
