<html>
<head>
    <title>Información Academica</title>
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
      <h1>Datos Academico</h1>
    </div>
    <div class="form-content">
      <form method="POST" action="../Php/datosa.php">
        <div class="form-group">
        <label for="">Titulo de Pregrado</label>
          <input class="input" type="text" name="Grado" id="Grado">
        </div>
        
        <div class="form-group">
        <label for="">Institución de Egreso</label>
          <input class="input" type="text" name="inst" id="inst" placeholder="">
        </div>

        <div class="form-group">
          <label for="">Fecha de Graduación</label>
          <input class="input" type="date" name="date_gu" id="date_gu" require>
        </div>

        <div class="form-group">
        <label for="">Universidad / institución</label>
          <input class="input" type="text" name="uni" id="uni" placeholder="">
        </div>

        <div class="form-group">
        <label for="">Ciudad</label>
          <input class="input" type="text" name="city" id="city" placeholder="">
        </div>

        <div class="form-group">
        <label for="">País</label>
          <input class="input" type="text" name="country" id="country" placeholder="">
        </div>

        <div class="form-group">
          <label for="">Fecha de Graduación</label>
          <input class="input" type="date" name="date_g" id="date_g" >
        </div>

        <div class="form-group">
        <label for="">Grado Obtenido</label>
          <input class="input" type="text" name="grado_o" id="grado_o" placeholder="">
        </div>

        <div class="form-group">
        <label for="">Especialidad</label>
          <input class="input" type="text" name="especialidad" id="especialidad" placeholder="">
        </div>

        <div class="form-group">
        <label for="">Titulo del trabajo especial de Grado</label>
          <input class="input" type="text" name="titulo" id="titulo" placeholder="">
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