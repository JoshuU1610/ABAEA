<html>
<head>
    <title>Datos Familiares</title>
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
      <h1>Datos Familiares</h1>
    </div>
    <div class="form-content">
      <form method="POST" action="../Php/datosf.php">
        <div class="form-group">
          <label for="">¿Tiene hijos?</label>
          <select name="hijos" id="hijos">
                <option value="">Elija una opción</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>
        </div>
        <div class="form-group">
        <label for="">¿Cuántos?</label>
          <input class="input" type="num" name="c_h" id="c_h" placeholder="cantidad" required>
        </div>
        
        <div class="form-group">
          <label for="">¿Tiene cargas familiares?</label>
          <select name="c_fam" id="c_fam">
                <option value="">Elija una opción</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>
        </div>
        <div class="form-group">
        <label for="">¿Cuántos?</label>
          <input class="input" type="num" name="cc_fam" id="cc_fam" placeholder="Cantidad" required>
        </div>
        <div class="form-group">
          <button type="submit">Siguiente</button>
        </div>
      </form>
    </div>
  </div></center>
  <br><br><br><br><br><br><br>
</section>
</div>
</body>
</html>