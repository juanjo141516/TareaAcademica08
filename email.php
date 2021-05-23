<?php

$textoNombre = $_POST['textoNombre'];
$destinatario = $_POST['emailDestino'];
$asunto = $_POST['asunto'];
$textoMensaje = $_POST['textoMensaje'];

$cabecera ="From:A20004416@idat.edu.pe\r\n";
$cabecera .="Content-Type: text/html; charset=ISO-8859-1\r\n";
$cabecera .="MIME-Version: 1.0\r\n";

$mensaje = '<html><body>';
$mensaje .= '<p><strong>Hola</strong>, soy '.$textoNombre.'</p><br>';
$mensaje .= '<p>Mi consulta es la siguiente:</p><br>';
$mensaje .= '<p>'.$textoMensaje.'</p><br>';
$mensaje .= '<p>Gracias por su atención</p>';
$mensaje .= '</body></html>';


$enviado = mail($destinatario,$asunto,$mensaje,$cabecera);

if ($enviado) {
    echo 'Correo enviado correctamente';
}
else {
    echo 'Error al enviar correo';
}
?>

