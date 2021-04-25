<?php

//Formulario Reserva

$nombreReserva = $_POST['nombre_apellido'];
$telefono = $_POST['telefono'];
$fechaReserva = $_POST['fecha_reserva'];
$horaReseva = $_POST['hora_reserva'];
$comensales = $_POST['total_comensales'];

echo("<script> alert('Gracias $nombreReserva Tu reserva fue tomada! Nos contactaremos al $telefono por cualquier modificación o cancelación.')</script>");


//Formulario Contacto

$nombreContacto = $_POST['nombre'];
$correo = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

echo("<script> alert('Gracias $nombreCorreo por contactarte! Nos contactaremos al $correo en caso de ser necesario.')</script>");

?>