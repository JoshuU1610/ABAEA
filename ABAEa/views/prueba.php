<html>
    <head>
        <link rel="stylesheet" href="CSS/prueba.css">
    </head>
<body>
<div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>Datos Personales</h1>
    </div>
    <div class="form-content">
      <form>
        <div class="form-group">
          <label for="">Primer Nombre</label>
          <input class="input" type="text" name="P_nombre" id="P_nombre" placeholder="Primer Nombre" required>
        </div>
        <div class="form-group">
        <label for="">Segundo Nombre</label>
          <input class="input" type="text" name="S_nombre" id="S_nombre" placeholder="Segundo Nombre" required>
        </div>
        <div class="form-group">
          <label for="">Primer Apellido</label>
          <input class="input" type="text" name="P_apellido" id="P_apellido" placeholder="Primer Apellido" required>
        </div>
        <div class="form-group">
          <label for="">Segundo Apellido</label>
          <input class="input" type="text" name="S_apellido" id="S_apellido" placeholder="Segundo Apellidos" required>
        </div>
        <div class="form-group">
          <label for="">Cedula</label>
          <input class="input" type="number" name="CI" id="CI" placeholder="cedula" required>
        </div>
        <div class="form-group">
          <label for="">Correo Electronico</label>
          <input class="input" type="email" name="email" id="email" placeholder="Correo Electronico" required>
        </div>
        <div class="form-group">
          <label for="">Fecha de Nacimiento</label>
          <input class="input" type="date" name="date" id="date" required>
        </div>
        <div class="form-group">
          <label for="">Numero Personal</label>
          <input class="input" type="number" name="Num_P" id="Num_P" placeholder="Numnero Personal" required>
        </div>
        <div class="form-group">
          <label for="">Numero de Habitación</label>
          <input class="input" type="number" name="Num_H" id="Num_H" placeholder="Numnero de Habitación" required>
        </div>
        
        <div class="form-group">
          <label for=""> Dirección de Habitación</label>
          <input class="input" class="tamano" type="text" name="direc" id="direc" placeholder="Dirección" required>
        </div>
        <div class="form-group">
        <label for="">Estado Civil</label>
            <select name="" id="">
                <option value="">Elija una opción</option>
                <option value="Casado">Casado/Casada</option>
                <option value="Divorsiado">Divorsiado/Divorsiada</option>
                <option value="Viudo">Viudo/Viuda</option>
                <option value="Soltero">Soltero/Soltera</option>
            </select>
        </div>
        <div class="form-group">
          <button type="submit">Siguiente</button>
        </div>
      </form>
    </div>
  </div>
  
</div>


</body>
</html>