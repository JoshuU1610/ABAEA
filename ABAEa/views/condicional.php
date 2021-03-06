<html>
    <head>
        <title>Recolección de datos</title>
        <link rel="stylesheet" href="../CSS/condional.css">
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

<!-- Condicional -->
<section class="hero">
<br><br><br><br>
<div class="container">
    <div class="wrapper">
      <ul class="steps">
        <li class="is-active">Step 1</li>
        <li>Step 2</li>
        <li>Step 3</li>
      </ul>
      <form class="form-wrapper">
        <fieldset class="section is-active">
          <h3>Your Details</h3>
          <input type="text" name="name" id="name" placeholder="Name">
          <input type="text" name="email" id="email" placeholder="Email">
          <div class="button">Next</div>
        </fieldset>
        <fieldset class="section">
          <h3>Account Type</h3>
          <div class="row cf">
            <div class="four col">
              <input type="radio" name="r1" id="r1" checked>
              <label for="r1">
                <h4>Designer</h4>
              </label>
            </div>
            <div class="four col">
              <input type="radio" name="r1" id="r2"><label for="r2">
                <h4>Developer</h4>
              </label>
            </div>
            <div class="four col">
              <input type="radio" name="r1" id="r3"><label for="r3">
                <h4>Project Manager</h4>
              </label>
            </div>
          </div>
          <div class="button">Next</div>
        </fieldset>
        <fieldset class="section">
          <h3>Choose a Password</h3>
          <input type="password" name="password" id="password" placeholder="Password">
          <input type="password" name="password2" id="password2" placeholder="Re-enter Password">
          <input class="submit button" type="submit" value="Sign Up">
        </fieldset>
        <fieldset class="section">
          <h3>Account Created!</h3>
          <p>Your account has now been created.</p>
          <div class="button">Reset Form</div>
        </fieldset>
      </form>
    </div>
  </div>
</section>

<script>
  $(document).ready(function(){
    $(".form-wrapper .button").click(function(){
      var button = $(this);
      var currentSection = button.parents(".section");
      var currentSectionIndex = currentSection.index();
      var headerSection = $('.steps li').eq(currentSectionIndex);
      currentSection.removeClass("is-active").next().addClass("is-active");
      headerSection.removeClass("is-active").next().addClass("is-active");
  
      $(".form-wrapper").submit(function(e) {
        e.preventDefault();
      });
  
      if(currentSectionIndex === 3){
        $(document).find(".form-wrapper .section").first().addClass("is-active");
        $(document).find(".steps li").first().addClass("is-active");
      }
    });
  });

  document.write("<h1>TOTMAAAAAAAAAAAAAAA</h1>")
</script>


</body>
</html>