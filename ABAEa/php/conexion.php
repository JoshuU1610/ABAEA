<?php
     $server = "localhost";
     $user = "root";
     $password = "";
     $db = "ABAEa";
   
     $conexion = new mysqli($server, $user, $password, $db);
   
     if($conexion->connect_error){
       die("Conexión fallida: " . $conexion->connect_error);
     }


?>