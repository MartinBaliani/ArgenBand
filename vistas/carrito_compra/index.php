<?php 

$accion = "listar";

if(isset(["a"])){
	$accion = $_REQUEST["a"];

}

 switch ("$accion") {
 	case 'listar':
 		$contenido ="vistas/carrito_compra/partials/contenido_carrito_compra.inc.php";

 		break;
 	
 	case 'quitar':
 		session_start();
 		
 		if(isset($_GET["indice"])){

 			unset ($_SESSION["carrito_compra"]["$indice"]);

 			  $_SESSION["carrito_compra"] = array_values($_SESSION["carrito_compra"]);
                    var_dump($_SESSION["carrito_compra"]);
                    header("Location: index.php?m=carrito_compra");
 		}
	 		
 		break;
 		

 	case 'agregar':

 		session_start();

              if ( isset($_GET["id_publicaciones"]) ){
                  $_SESSION["carrito_compra"][] = $_GET["id_publicaciones"];

                  header("Location: index.php?m=marchandise");
               }     

 		break;

 }

$contenido = "vistas/carrito_compra/partials/contenido_carrito_compra.inc.php";

include "vistas/common/base.php";

 ?>