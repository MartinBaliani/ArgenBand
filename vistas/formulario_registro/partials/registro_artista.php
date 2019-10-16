

 <form method="POST" action="index.php">
  <input type="hidden" name="m" value="registro_usuario">
  <input type ="hidden" name="tipo" value ="artista">
  <div class="form-group row">
    <label for="nombre" class="col-2 col-form-label">Nombre de banda</label> 
    <div class="col-4">
      <input id="nombre" name="nombre" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2 col-form-label" for="email">Correo Electrónico</label> 
    <div class="col-4">
      <input id="email" name="email" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-2 col-form-label">Contraseña</label> 
    <div class="col-4">
      <input id="password" name="password" type="password" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class=" col-6">
      <button id="guardar" name="guardar" class="btn btn-primary">Registrarse</button>
    </div>
  </div>
</form>