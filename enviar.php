<?php
	
	$destino = "lextes@hotmail.com";
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$correo = $_POST["telefono"];
	$mensaje = $_POST["mensaje"];
	$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;
	mail($destino, "Contacto", $contenido);
	header("Location:gracias,html");

?>