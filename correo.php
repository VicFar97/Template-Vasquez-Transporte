<?php
   $destinatario = 'victorfarfan0@gmail.com';  //Al que le llega el mensaje
   $nombre = $_POST['nombre'];
   $correo = $_POST['correo'];
   $asunto = $_POST['asunto'];
   $mensaje = $_POST['mensaje'];

   $header = "Enviado desde la Página Web Vásquez Transporte";
   $mensajeCompleto = "\nMensaje: " . $mensaje . "\nAtentamente: " . $nombre. "\nCorreo: " . $correo;


   mail($destinatario, $asunto, $mensajeCompleto, $header);

   echo "<script>alert('Correo enviado exitosamente')</script>";
   echo "<script>setTimeout(\"location.href='index.html'\",500)</script>";
   //header("Location:index.html");
?>