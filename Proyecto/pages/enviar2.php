<?php
$email = $_POST['email'];
$nombre = $_POST['nombre'];
$numero = $_POST['telefono'];
$caja = $_POST['caja'];
$asunto = $_POST['asunto'];
$cuerpo = <<<MAIL
El usuario $nombre, de numero de telefono $numero ha enviado el siguiente comentario:
$caja
MAIL;

$informacion_adicional = 'Mime-Version: 1.0'. "\r\n";
$informacion_adicional .= 'Content-type: text/htmlM charset=UTF-8'. "\r\n";
$informacion_adicional = 'From: '. $nombre.'<'.$email.'>'. "\r\n";

$mensaje = 'Mensaje en BI Fotografía: ';
mail('iglesiasb11@gmail.com','Mensaje en BI Fotografía',$cuerpo,$informacion_adicional);
header ("Location:exito.html")
?>
