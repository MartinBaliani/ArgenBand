<?php 

	session_start();

	session_destroy();

	// Cuando el usuario cierra sesion se redirecciona a la página de inicio
	header("Location:index.php");

 ?>