<?php


$nombre = $_POST['nombre'];
$numero = $_POST['telefono'];
$email = $_POST['email'];
$caja = $_POST['caja'];
$com = $_POST['asunto'];


$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su email es " . $email . ",\r\n";
$mensaje .= "Su numero de celular es " . $numero . ",\r\n";
$mensaje .= "Mensaje: " . $caja . ",\r\n";
$mensaje .= "Enviado el: " . date("d/m/y", time());


$para = 'iglesiasb11@gmail.com';
$asunto = 'Comentario en BI Fotografía: ' . $com ;

$headers = 'Mime-Version: 1.0'. "\r\n" ;
$headers .= 'Content-type: text/html; charset=UTF-8'. "\r\n" ;
$headers .= 'From: '. $nombre.'<'.$email.'>'. "\r\n" ;
    

mail($para, $asunto,utf8_decode( $mensaje),$headers );

header('Location: exito.html');


?>