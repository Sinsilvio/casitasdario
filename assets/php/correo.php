<?php
$destinatario = 'silvio_m@msn.com';
// Este es el correo al que va el formulario

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$header = "Mensaje desde CASITAS DARIO ";
$mensajecompleto = $message . "\n Nombre: " .$name . "\n Correo:" . $email . "\n telefoo:" . $phone;

mail ($destinatario, $email, $mensajecompleto, $header);
echo "<script>alert('Correo enviado exitosamente.')</script>";
?>