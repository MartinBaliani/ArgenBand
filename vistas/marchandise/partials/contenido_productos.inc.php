
<?php  
/*
$conexion = new msqli = (("localhost","root","","ArgenBand"));

sql = 

*/
 	include ("modelo/Daos/productosDAO.php");

 	$textoBuscado = "";

 	if(isset($_GET["busqueda"])){

 		$textoBuscado = $_GET["busqueda"];

 		$publicaciones = obtenerProductos($textoBuscado);
 	}
?>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				<h2>
					Hello, world!
				</h2>
				<p>
					This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.
				</p>
			</div>
		</div>
	</div>

	<?php
	  $conexion = new mysqli("localhost", "root", "", "argenband");
	  $sql = "SELECT * FROM publicaciones";
	  $marchandise = $conexion->query($sql);
	  
	  foreach ($marchandise as $publicacion) {
	   ?>
	<div class="row">
		<div class="col-md-3">
			<div class="card">
					<img src="archivos/imagenes/articulos<?= $publicacion["pub_imagen"]  ?>" class="card-img" alt="...">
					<h5 class="card-header">
						<?= $publicacion["pub_titulo"] ?>
					</h5>
				<div class="card-body">
					<p class="card-text">
						<?=  $publicacion["pub_descripcion"] ?>
					</p>
				</div>
				<div class="card-footer">
					 	<?=  $publicacion["pub_precio"] ?>
				</div>
			</div>

			<div class="card">
				<h5 class="card-header">
					Card title
				</h5>
				<div class="card-body">
					<p class="card-text">
						Card content
					</p>
				</div>
				<div class="card-footer">
					Card footer
				</div>
			</div>
			<div class="card">
				<h5 class="card-header">
					Card title
				</h5>
				<div class="card-body">
					<p class="card-text">
						Card content
					</p>
				</div>
				<div class="card-footer">
					Card footer
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card">
				<h5 class="card-header">
					Card title
				</h5>
				<div class="card-body">
					<p class="card-text">
						Card content
					</p>
				</div>
				<div class="card-footer">
					Card footer
				</div>
			</div>
			<div class="card">
				<h5 class="card-header">
					Card title
				</h5>
				<div class="card-body">
					<p class="card-text">
						Card content
					</p>
				</div>
				<div class="card-footer">
					Card footer
				</div>
			</div>
			<div class="card">
				<h5 class="card-header">
					Card title
				</h5>
				<div class="card-body">
					<p class="card-text">
						Card content
					</p>
				</div>
				<div class="card-footer">
					Card footer
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card">
				<h5 class="card-header">
					Card title
				</h5>
				<div class="card-body">
					<p class="card-text">
						Card content
					</p>
				</div>
				<div class="card-footer">
					Card footer
				</div>
			</div>
			<div class="card">
				<h5 class="card-header">
					Card title
				</h5>
				<div class="card-body">
					<p class="card-text">
						Card content
					</p>
				</div>
				<div class="card-footer">
					Card footer
				</div>
			</div>
			<div class="card">
				<h5 class="card-header">
					Card title
				</h5>
				<div class="card-body">
					<p class="card-text">
						Card content
					</p>
				</div>
				<div class="card-footer">
					Card footer
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card">
				<h5 class="card-header">
					Card title
				</h5>
				<div class="card-body">
					<p class="card-text">
						Card content
					</p>
				</div>
				<div class="card-footer">
					Card footer
				</div>
			</div>
			<div class="card">
				<h5 class="card-header">
					Card title
				</h5>
				<div class="card-body">
					<p class="card-text">
						Card content
					</p>
				</div>
				<div class="card-footer">
					Card footer
				</div>
			</div>
			<div class="card">
				<h5 class="card-header">
					Card title
				</h5>
				<div class="card-body">
					<p class="card-text">
						Card content
					</p>
				</div>
				<div class="card-footer">
					Card footer
				</div>
			</div>
		</div>
	</div>
	}
</div>

