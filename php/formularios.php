<?php

//Formulario Contacto

$nombreContacto = $_POST['nombre'];
$correo = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

echo("<script> alert('Gracias $nombreCorreo por escribirnos! Nos contactaremos a $correo en caso de ser necesario.');window.location='/index.html' </script>");

?>