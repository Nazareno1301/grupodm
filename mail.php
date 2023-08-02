<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recoger datos del formulario
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];

  // Destinatario del correo
  $destinatario = "correo_destino@example.com";

  // Asunto del correo
  $asunto = "Nuevo mensaje de $nombre";

  // Cabeceras del correo
  $cabeceras = "From: $nombre <$email>" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

  // Enviar el correo
  if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
    echo "El mensaje ha sido enviado correctamente.";
  } else {
    echo "Error al enviar el mensaje. Por favor, intenta nuevamente.";
  }
}
?>
