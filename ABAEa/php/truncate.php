<?php
   $servidor = "localhost";
   $nombreusuario = "root";
   $password = "";
   $db = "ABAEa";
 
   $conexion = new mysqli($servidor, $nombreusuario, $password);
 
   if($conexion->connect_error){
     die("Conexión fallida: " . $conexion->connect_error);
   }
 
 $a = "DROP DATABASE $db";
 
 
 
   if($conexion->query($a) === true){
    echo '<script>
    window.location = "../Index.php";
  </script>";';
}else{
die("error" . $conexion->error);
}
?>