<?php 


function obtenerPublicaciones( $textoBuscado ){
	
    $conexion = new mysqli("localhost", "root", "", "argenband");

    $sql = "SELECT * FROM publicaciones";

    $sql .= " WHERE pub_nombre LIKE '%" .  $textoBuscado . "%' ";
    $sql .= " OR pub_descripcion LIKE '%" .  $textoBuscado . "%' ";

    return $conexion->query($sql);
}


 function obtenerInfoPublicacion( $idPublicacion ){

 	$conexion = new mysqli ("localhost","root","","argenband");

 	$sql = "SELECT * FR0M publicaciones WHERE publicacion_id = " . idPublicacion;

 	$resultado = $conexion->query($sql);

 	$infoPublicacion = $resultado->fetch_assoc();

 	return $infoPublicacion;
 }

 ?>
