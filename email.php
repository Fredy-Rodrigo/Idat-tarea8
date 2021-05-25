<?php

$nombre = $_POST['nombre'];
$destinatario = $_POST['email'];
$asunto = $_POST['asunto'];
$texto = $_POST['texto'];

$cabecera = "From: sv7541811@idat.edu.pe\r\n";
$cabecera .= 'MINE-Version: 1.0'."\r\n";
$cabecera .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";

$mensaje = '<html><body>';
$mensaje .= '<strong>Hola</strong>, soy'.$nombre.'.<br>';
$mensaje .= 'Mi consulta es la siguiente:<br>';
$mensaje .= $texto.'<br>';
$mensaje .= 'Gracias por su atención.';

$Enviado = mail($destinatario, $asunto, $mensaje, $cabecera);

if ($Enviado) {
    echo "Correo enviado exitosamente.";
}
else {
    echo "Error de envio.";
} 

