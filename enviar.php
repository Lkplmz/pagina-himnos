<?php
if ($_SERVER["REQUEST METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);

    $to = 'lkplmz@gmail.com'; 
    $subject = 'Nuevo Mensaje de Contacto de la Pagina Web'
    $message = "Nombre: $nombre\nCorreo: $email";
    $headers = "From: $email" .
    "\r\n" . 
    "Reply-To: $email" . 
    "\r\n" . 
    "X-Mailer: PHP/" . 
    phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Mensaje enviado con exito.";
    } else {
        echo "Error al enviar mensaje.";
        } 
} else {
    echo "Metodo no permitido.";
}

?>