<?php 

    $modulo = "index";

    if( isset($_GET["m"])){

    	switch ($_GET["m"]){

    		case 'index':
    		$modulo = "index";
    		break;

            case 'formulario_registro':
            $modulo = "formulario_registro";
            break;

            case 'registro_usuario':
            $modulo = "registro_usuario";
            break;


    		case 'inicio_sesion':
    		$modulo = 'inicio_sesion';
    		break;

            case 'cierre_sesion':
            $modulo = 'cierre_sesion';
            break;

    		case 'contenido_musica':
    		$modulo = 'contenido_musica';
    		break;

            case 'marchandise':
            $modulo = 'marchandise';
            break;


    		case 'carrito_compra':
    		$modulo = 'carrito_compra';
    		break;

    		case 'cuenta_usuario':
    		$modulo = 'cuenta_usuario';
    		break;
    	}
    }

    include "vistas/" . $modulo . "/index.php";
    
 ?>