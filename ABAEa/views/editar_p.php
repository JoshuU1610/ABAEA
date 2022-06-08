<html>
<head>
    <title>Datos Personales</title>
    <link rel="stylesheet" href="../CSS/prueba.css">
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/flexboxgrid.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500&display=swap" rel="stylesheet"> 
</head>
<body>
<!-- Encabezado -->
<header>
        <nav class="menu-navegacion contenedor">
            <div class="logo">
                <a href="../Index.php"><img src="../Img/ABAE.png" alt="Logo de la ABAE"></a>
            </div>
            <div class="enlaces">
                <li><a href="../Php/truncate.php">Volver a comenzar</a></li>
            </div>
        </nav>
    </header>
<!-- (°v°) -->
<!-- Formulario -->
<section class="hero">
  <br><br><br><br>
  <center><div class="form">
  <div class="form-panel one">
    <div class="form-header">
      <h1>Datos Personales</h1>
    </div>
    <div class="form-content">
      <form method="POST" action="../Php/datosp.php">
      <?php 
        $conn = require('../php/conexion.php');
      ?>
      <?php
        $sql = "SELECT * FROM estudiantes WHERE Credencial='".$credencial."'";
        $resul=mysqli_query($conn, $sql);        
        while($mostrar=mysqli_fetch_array($resul)){
        ?>
        <div class="form-group">
          <label for="">Primer Nombre</label>
          <input class="input" type="text" name="P_nombre" id="P_nombre" placeholder="Primer Nombre" value="<?php echo $mostrar['P_nombre'] ?>" required>
        </div>
        <div class="form-group">
        <label for="">Segundo Nombre</label>
          <input class="input" type="text" name="S_nombre" id="S_nombre" placeholder="Segundo Nombre" value="<?php echo $mostrar['S_nombre'] ?>" required>
        </div>
        <div class="form-group">
          <label for="">Primer Apellido</label>
          <input class="input" type="text" name="P_apellido" id="P_apellido" placeholder="Primer Apellido" value="<?php echo $mostrar['P_apellido'] ?>" required>
        </div>
        <div class="form-group">
          <label for="">Segundo Apellido</label>
          <input class="input" type="text" name="S_apellido" id="S_apellido" placeholder="Segundo Apellido" value="<?php echo $mostrar['S_nombre'] ?>" required>
        </div>
        <div class="form-group">
          <label for="">Cédula</label>
          <input class="input" type="number" name="CI" id="CI" placeholder="Cédula" value="<?php echo $mostrar['CI'] ?>" required>
        </div>
        <div class="form-group">
          <label for="">Correo Electrónico</label>
          <input class="input" type="email" name="email" id="email" placeholder="Correo Electrónico" value="<?php echo $mostrar['email'] ?>" required>
        </div>
        <div class="form-group">
          <label for="">Fecha de Nacimiento</label>
          <input class="input" type="date" name="date" id="date" value="<?php echo $mostrar['fecha_n'] ?>" required>
        </div>
        <div class="form-group">
          <label for="">Número Personal</label>
          <input class="input" type="number" name="Num_P" id="Num_P" placeholder="Número Personal" value="<?php echo $mostrar['Num_P'] ?>" required>
        </div>
        <div class="form-group">
          <label for="">Número de Habitación</label>
          <input class="input" type="number" name="Num_H" id="Num_H" placeholder="Número de Habitación" value="<?php echo $mostrar['Num_H'] ?>" required>
        </div>
        
        <div class="form-group">
          <label for=""> Dirección de Habitación</label>
          <textarea class="input"  type="text" name="direc" id="direc" placeholder="Dirección" value="<?php echo $mostrar['Direc'] ?>" required></textarea>
        </div>
        <div class="form-group">
        <label for="">Estado Civil</label>
            <select name="estado_c" id="estado_c" >
                <option value="">Elija una opción</option>
                <option value="Casado">Casado/Casada</option>
                <option value="Divorciado">Divorciado/Divorciada</option>
                <option value="Viudo">Viudo/Viuda</option>
                <option value="Soltero">Soltero/Soltera</option>
            </select>
        </div>
        <div class="form-group">
          <button type="submit">Siguiente</button>
        </div>
      </form>
    </div>
  </div></center>
</section>
</div>
</body>
</html>