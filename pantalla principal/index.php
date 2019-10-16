<?php 

    $modulo = "index";

    if( isset($_GET["m"])){

    	switch ($_GET["m"]){

    		case 'index':
    		$modulo = "index";
    		break;

    		case 'registro':
    		$modulo = "registro";
    		break;

    		case 'ingreso':
    		$modulo = 'ingreso';
    		break;

    		case 'contenido_musica':
    		$modulo = 'contenido_musica';
    		break;

    		case 'compras':
    		$modulo = 'compras';
    		break;

    		case 'cuenta_usuario':
    		$modulo = 'cuenta_usuario';
    		break;

            case 'logout':
            $modulo ='logout';
            break;
    	}
    }
 ?>