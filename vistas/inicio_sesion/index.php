<?php 

// session start siempre va primero

session_start();

if (isset($_GET["email"]) && isset($_GET["password"])){

	$conexion = new msqli("localhost","root","","argenband");

	$sql= "SELECT * FROM usuarios WHERE usuario_email ='".$_GET["usuario_email"]."'AND usuario_password ='". $_GET["usuario_password"]."'";

	$resultado= $conexion->query($sql);

 	if($resultado->num_rows == 1) {

 		$usuario = $resultado->fetch_assoc();

 		$_SESSION["usuario"] = $_GET["email"];

 		header("Location: index.php");
 	}

}

 ?>

