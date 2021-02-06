<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	 <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="css/contacto.css">
	 <link rel="stylesheet" type="text/css" href="css/foundation.min.css">
	
	 <script src="js/jquery.js.js"></script>
</head>
<body>
    
    <section class="contact-footer">
      <div class="row wide">
        <div class="medium-6 columns">
          <div class="row">
            <div class="small-6 medium-12 columns">
              <h4 class="location"><a data-toggle="animatedModal10">Mostar Mapa</h4> <p>Provincias Unidas 921 Bis<br>
                Rosario. Santa Fe . Argentina</p></a>

             
<div class="reveal" id="animatedModal10" data-reveal data-close-on-click="true" data-animation-in="spin-in" data-animation-out="spin-out">
  <h1>Nos encontramos Aqui!!</h1>
 <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d9473.055631435005!2d-60.7137526201735!3d-32.91849623303943!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sar!4v1468895336768" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  <button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

              <h4 class="phone">+54-341-4584463</h4>
            </div>
            <div class="small-6 medium-12 columns">
              <h4 class="email">Email</h4>
              <p>seecorpdesarrollos@outlook.com</p>

              <h4>Social</h4>
              <div class="social ">
                <ul class="inline-list">
                  <li><a href="https://twitter.com/?lang=es" target="_blank"><i class="fi-social-twitter"></i></a></li>
                  <li><a href="https://facebook.com" target="_blank"><i class="fi-social-facebook"></i></a></li>
                  <li><a href="https://youtube.es" target="_blank"><i class="fi-social-youtube"></i></a></li>
                </ul>
                
              </div>
            </div>
          </div>
        </div>
        <div class="medium-6 columns">
          <p class="form-lead">Por Favor rellene todos los datos</p>
          <p class="form-lead-in">Y en breve nos pondremos en contacto</p>
          <form class="round-inputs" method="post" action="contacto.php">
            <div class="row">
              <div class="large-12 columns">
                <input type="text" placeholder="Nombre:" name="nombre" value="<?php if(isset($nombre)) echo $nombre; ?>"   />
              </div>
              <div class="large-12 columns">
                <input type="text" name="correo" placeholder="Email:" value="<?php if(isset($correo)) echo $correo; ?>" />
              </div>
              <div class="large-12 columns">
                <input type="text" name="telefono" placeholder="Telefono:" value="<?php if(isset($telefono)) echo $telefono; ?>" />
              </div>
              <div class="large-12 columns">
                <textarea placeholder="Introdusca su Consulta:" name="mensaje" ><?php if(isset($mensaje)) echo $mensaje; ?></textarea>


        <?php if (!empty($errores)): ?>
        <div class="alert ">
          <?php echo $errores; ?>
        </div>
      <?php elseif($enviado): ?>
        <div class="success ">
          <p>Enviado Correctamente <br>En breve nos pondremos en contacto</p>

        </div>
      <?php endif ?>
<br>

                <input type="submit" name="submit" class="button round" value="Enviar Informacion">
              </div>
            </div>
          </form>
        </div>
      </div><br>
      <center><a class=" btn success hollow button" href="index.php">Volver al Home</a></center>
    </section>
     <script src="js/jquery.min.js"></script>
    <script src="js/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

</body>
</html>