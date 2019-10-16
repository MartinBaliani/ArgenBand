<?php 

	 if ( session_status() === PHP_SESSION_NONE  ){
		session_start();
	}

 ?>

<!DOCTYPE html>

<html lang="es">

	<head>
		<meta charset="UTF-8">
		<title>ArgenBand</title>
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body>
	    
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
						 
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="navbar-toggler-icon"></span>
						</button> <a class="navbar-brand" href="index.php">ArgenBand</a>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="navbar-nav">
								<li class="nav-item active">
									 <a class="nav-link" href="index.php?m=contenido_musica">Bandas</a>
								</li>
								<li class="nav-item active">
									 <a class="nav-link" href="index.php?m=marchandise">Marchandise</a>
								</li>	
							</ul>
							<ul class="navbar-nav ml-md-auto">

							<?php 

               				 if ( isset($_SESSION["usuario"] ) ){

               				?>

                                <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                        <?= $_SESSION["usuario"] ?>

                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="#">Perfil</a>
                                          <a class="dropdown-item" href="index.php?m=logout">Cerrar sesión</a>
  
                                        </div>
                                </li>
            
                            <?php

                        		}
                        		else{

                			?>
								<li class="nav-item active">
									 <a id="modal-661469" href="#modal-container-661469" role="button" class="btn" data-toggle="modal">Iniciar Sesión
									 </a> 
								</li>
								<li class="nav-item">
									 <a class="nav-link active" href="index.php?m=formulario_registro">Registrarse</a>
								</li>
							 <?php } ?>
							</ul>
						</div>
					</nav>
				</div>
			</div>

		<div class="modal fade" id="modal-container-661469" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="myModalLabel">
														Inicio de Sesión
													</h5> 
													<button type="button" class="close" data-dismiss="modal">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="modal-body">
													<form role="form">
														<div class="form-group">
															 
															<label for="exampleInputEmail1">
																Correo Electrónico
															</label>
															<input type="email" class="form-control" id="exampleInputEmail1" />
														</div>
														<div class="form-group">
															 
															<label for="exampleInputPassword1">
																Contraseña
															</label>
															<input type="password" class="form-control" id="exampleInputPassword1" />
														</div>
												
														<button type="submit" class="btn btn-primary">
														   Iniciar Sesión	     
														</button>
													</form>
												</div>
												
											</div>
											
										</div>
										
		</div>			

             <!-- CONTENIDO DE CADA PÁGINA -->
             
            <?php 
            	 include $contenido;
             ?>

			<div class="row">
				<div class="col-md-4">
					<ul>
						<li class="list-item">
							<h5>Acerca de</h5>
						</li>
						<li class="list-item">
							<a href="">Sobre nosotros</a>
						</li>
						<li class="list-item">
							<a href="">Como funciona</a>
						</li>
						<li class="list-item">
							<a href="">Contacto</a>
						</li>						
					</ul>
				</div>
				<div class="col-md-4">
					<ul>
						<li class="list-item">
							<h5>Politicas</h5>
						</li>
						<li class="list-item">
							<a href="">Terminos y condiciones</a>
						</li>
						<li class="list-item">
						 	<a href="">Derechos de Autor</a>
						</li>
						<li class="list-item">
							<a href="">Avisos Legales</a>
						</li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul>
						<li class="list-item">
							<h5>Redes Sociales</h5>
						</li>
						<li class="list-item">
							<a href=""><img src="" alt="">Facebook</a>
						</li>
						<li class="list-item">
							<a href=""><img src="" alt="">Youtube</a>
						</li>
						<li class="list-item">
							<a href=""><img src="" alt="">Instagram</a>
						</li>
						</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
				<h5 class="text-center">© 2019 ArgenBand</h5>
				</div>
			</div>
		</div>

		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/popper/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	</body>

</html>

