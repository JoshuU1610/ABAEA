<?php
  $servidor = "localhost";
  $nombreusuario = "root";
  $password = "";
  $db = "ABAEa";

  $conexion = new mysqli($servidor, $nombreusuario, $password);

  if($conexion->connect_error){
    die("Conexión fallida: " . $conexion->connect_error);
  }

$a = "CREATE DATABASE IF NOT EXISTS $db CHARACTER SET UTF8 COLLATE UTF8_SPANISH2_CI";



  if($conexion->query($a) === true){

    $conexion = new mysqli($servidor, $nombreusuario, $password, 'ABAEa');

  if($conexion->connect_error){
    die("Conexión fallida: " . $conexion->connect_error);
  }

    $a="CREATE TABLE IF NOT EXISTS `adicional` (
      `pri` text COLLATE utf8_spanish2_ci NOT NULL,
      `seg` text COLLATE utf8_spanish2_ci NOT NULL,
      `ter` text COLLATE utf8_spanish2_ci NOT NULL,
      `cuar` text COLLATE utf8_spanish2_ci NOT NULL,
      `quin` text COLLATE utf8_spanish2_ci NOT NULL,
      `sex` text COLLATE utf8_spanish2_ci NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;";
  
  if($conexion->query($a) === true)

  $a="CREATE TABLE IF NOT EXISTS `datos_a` (
    `tit_p` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
    `Inst_E` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
    `Fecha_gp` date NOT NULL,
    `Universidad` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
    `ciudad` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
    `pais` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
    `Fecha_gu` date NOT NULL,
    `Grado_o` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
    `Especialidad` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
    `tit_grado` varchar(200) COLLATE utf8_spanish2_ci NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;";
  
  if($conexion->query($a) === true)
  $a="CREATE TABLE IF NOT EXISTS `datos_f` (
    `Hijos` text COLLATE utf8_spanish2_ci NOT NULL,
    `Car_fam` text COLLATE utf8_spanish2_ci NOT NULL,
    `C_Hijo` int(11) NOT NULL,
    `C_Carfam` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;";
  
  if($conexion->query($a) === true)
  $a="CREATE TABLE IF NOT EXISTS `datos_m` (
    `Grado` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
    `Oficial` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
    `fecha_g` date DEFAULT NULL,
    `fecha_ua` date DEFAULT NULL,
    `fecha_pa` date DEFAULT NULL,
    `Componente` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;";
  
  if($conexion->query($a) === true)
  $a="CREATE TABLE IF NOT EXISTS `datos_p` (
    `P_nombre` text COLLATE utf8_spanish2_ci NOT NULL,
    `S_nombre` text COLLATE utf8_spanish2_ci NOT NULL,
    `P_apellido` text COLLATE utf8_spanish2_ci NOT NULL,
    `S_apellido` text COLLATE utf8_spanish2_ci NOT NULL,
    `CI` int(11) NOT NULL,
    `fecha_n` date NOT NULL,
    `email` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
    `Num_P` int(11) NOT NULL,
    `Num_H` int(11) NOT NULL,
    `Direc` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
    `estado_c` text COLLATE utf8_spanish2_ci NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;";
  
  if($conexion->query($a) === true)
  $a="CREATE TABLE IF NOT EXISTS `estud_ad` (
    `Titulos` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
    `instituciones` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
    `fecha_g` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;";
  
  if($conexion->query($a) === true)
  $a="CREATE TABLE IF NOT EXISTS `redes_s` (
    `Facebook` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
    `Twitter` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
    `Whatsapp` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
    `Instagram` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
    `Wechat` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;";
  if($conexion->query($a) === true){
    echo '<script>
            window.location = "../views/datos_p.php";
          </script>";';
  }else{
    die("error" . $conexion->error);
  }
  }else{
    die("error" . $conexion->error);
  }


  
?>