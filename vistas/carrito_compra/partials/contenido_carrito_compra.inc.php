<?php 

	include 'modelo/Daos/productosDAO.php';
?>

<table case="table">

<?php  
	if(	!isset($_GET["id_publicaciones"])){

		$indice = 0;

		foreach ($_SESSION["carrito_compra"] as $id_publicaciones) {

			   $infoPublicacion = obtenerInfoPublicacion($id_Publicacion);
		
			echo"<tr>";

				echo "<td>" . $infoArticulo = obtenerInfoArticulo($pub_foto) ."</td>";
				echo "<td>" . $infoArticulo = obtenerInfoArticulo($pub_nombre) ."</td>";
				echo "<td>" . $infoArticulo = obtenerInfoArticulo($pub_precio) ."</td>";

				echo "<td><a class=\"btn btn-danger\" href=\"index.php?m=carrito_compra&a=quitar&indice=". $indice . "\">
					Eliminar</a></td>";

			echo"</tr>";

			$indice++;
	}

}

?>

 </table>