<?php

//Formulario Reserva

$nombreReserva = $_POST['nombre_apellido'];
$telefono = $_POST['telefono'];
$fechaReserva = $_POST['fecha_reserva'];
$horaReseva = $_POST['hora_reserva'];
$comensales = $_POST['total_comensales'];

echo("<script> alert('Gracias $nombreReserva. Tu reserva fue tomada! Nos contactaremos al $telefono por cualquier modificación o cancelación.');window.location='/index.html' </script>");

?>