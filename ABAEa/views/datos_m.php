<html>
<head>
    <title>Datos Militares</title>
    <link rel="stylesheet" href="../CSS/prueba.css">
    <link rel="stylesheet" href="../CSS/flexboxgrid.css">
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500&display=swap" rel="stylesheet"> 
  </head>
<body>
<!-- Encabezado -->
<header>
        <nav class="menu-navegacion contenedor">
            <div class="logo">
                <a href="../Php/truncate.php"><img src="../Img/ABAE.png" alt="Logo de la ABAE"></a>
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
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>Datos Militares</h1>
    </div>
    <div class="form-content">
      <form method="POST" action="../Php/datosm.php">
        <div class="form-group">
        <label for="">Grado Militar</label>
          <input class="input" type="text" name="Grado" id="Grado">
        </div>
        
        <div class="form-group">
        <label for="">Oficial de comando/técnico/asimilado</label>
          <input class="input" type="text" name="Oficial" id="Oficial" placeholder="">
        </div>

        <div class="form-group">
        <label for="">Componente</label>
          <input class="input" type="text" name="Componente" id="Componente" placeholder="">
        </div>

        <div class="form-group">
          <label for="">Fecha de Graduación</label>
          <input class="input" type="date" name="date_g" id="date_g" >
        </div>

        <div class="form-group">
          <label for="">Ultima fecha de ascenso</label>
          <input class="input" type="date" name="date_ua" id="date_ua" >
        </div>

        <div class="form-group">
          <label for="">Próxima fecha de ascenso</label>
          <input class="input" type="date" name="date_pa" id="date_pa" >
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