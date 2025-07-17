<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $productos = $_POST['productos'];
    $comentarios = $_POST['comentarios'];

    $destinatario = "tguesam@gmail.com";
    $asunto = "Nueva Solicitud de Cotización";

    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Correo Electrónico: $email\n";
    $mensaje .= "Teléfono: $telefono\n\n";
    $mensaje .= "Productos a cotizar:\n$productos\n\n";
    $mensaje .= "Comentarios adicionales:\n$comentarios\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        echo "<script>alert('Cotización enviada correctamente. Nos pondremos en contacto contigo.'); window.location.href='contacto.html';</script>";
    } else {
        echo "<script>alert('Error al enviar la cotización. Inténtalo nuevamente.');</script>";
    }
}
?>
