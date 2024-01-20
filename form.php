<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $phone = $_POST["PhoneNumber"];
    $message = $_POST["Message"];

    // Aquí puedes realizar acciones como enviar un correo electrónico o guardar en una base de datos
    // Por ejemplo, para enviar un correo electrónico de ejemplo:
    $to = "nicolasrayon.dev@gmail.com";
    $subject = "Nuevo formulario enviado";
    $headers = "From: $email";
    $mail_body = "Nombre: $name\nEmail: $email\nTeléfono: $phone\nMensaje: $message";

    mail($to, $subject, $mail_body, $headers);
}
?>