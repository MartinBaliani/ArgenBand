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
			<div class="row">
				<div class="col-md-6">
					<h3 class="text-center">Soy una Banda</h3>
				</div>
				<div class="col-md-6">
					<h3 class="text-center">Soy un Fan</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
				    <?php include_once $registro_artista; ?>
				</div>
				<div class="col-md-6">
					<?php include_once $registro_fan; ?>
				</div>
			</div>
		</div>
	</div>
</div>