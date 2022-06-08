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
      <h1>Información Adicional



      </h1>
    </div>
    <div class="form-content">
      <form method="POST" action="../Php/data_adicional.php">
        <div class="form-group">
        <label for=""> ¿Qué actividades o proyectos desea usted emprender en la agencia ahora que tiene una preparación más especializada?</label>
          <textarea class="input" type="text" name="pri" id="pri" placeholder="Desarrolle"></textarea>
        </div>
        
        <div class="form-group">
        <label for="">¿En cuál Dirección y en cuál de las Unidades de esa Dirección cree usted que son aplicables o aprovechables de mejor manera los conocimientos adquiridos, así como las actividades y proyectos propuestos en la respuesta anterior?</label>
          <textarea class="input" type="text" name="seg" id="seg" placeholder="Sustente su Respuesta"></textarea>
        </div>

        <div class="form-group">
        <label for=""> ¿En cuál de las sedes de la ABAE considera que realizaría un mayor aporte?</label>
          <textarea class="input" type="text" name="ter" id="ter" placeholder="Explique su respuesta"></textarea>
        </div>

        <div class="form-group">
          <label for=""> ¿Dónde se encuentran ubicados geográficamente su hogar y su familia directa (pareja e hijos, o padres en caso de no tener los anteriores)?</label>
          <textarea class="input" type="text" name="cuar" id="cuar" ></textarea>
        </div>

        <div class="form-group">
          <label for=""> ¿Cuáles serían los planes para su familia de acuerdo a su reubicación laboral, en caso de que la misma sea necesaria?</label>
          <textarea class="input" type="text" name="quin" id="quin" ></textarea>
        </div>

        <div class="form-group">
          <label for="">¿Mencione otras habilidades profesionales que haya adquirido durante la comisión de estudios?</label>
          <textarea class="input" type="text" name="sex" id="sex"></textarea>
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