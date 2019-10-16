<?php 
  
    if (isset($_POST["tipo"])) {
      if ($_POST["tipo"] == "fan") {
        
      $conexion = new mysqli("localhost","root","","argenband");
      
      $nombre = $_POST ["nombre"];
      $password = $_POST ["password"];
      $email = $_POST ["email"];
      $apellido = $_POST ["apellido"];
      
      $sql = "INSERT INTO usuarios(usuario_id, usuario_nombre, usuario_password, usuario_email) VALUES('$nombre', '$password', '$email')";

      $conexion->query($sql)

      $ultimo_id = $conexion->insert_id;

      $sql2 = "INSERT INTO usuario_fan (usuario_id, apellido_fan) VALUES (              '$ultimo_id' , '$apellido')";

      $conexion->query($sql2);

      $_SESSION["usuario"] = $nombre;
      $_SESSION["carrito"] = [];
      
      header("Location: index.php");

      }

      if ($_POST["tipo"] == "artista") {
        
      
      $conexion = new mysqli("localhost", "root", "", "argenband");

      $nombre = $_POST["nombre"];
      $password = $_POST["password"];
      $mail = $_POST["email"];

      $sql3 = "INSERT INTO usuarios(usuario_id, usuario_nombre, usuario_password, usuario_email) VALUES('$nombre', '$password', '$email')";


     $conexion->query($sql3);

     $_SESSION["usuario"] = $nombre;

     header("Location: index.php");

     }
     
  }
  
?>