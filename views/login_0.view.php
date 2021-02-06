<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link href="css/metro.min.css" rel="stylesheet">
	<link href="css/estilos.css" rel="stylesheet">
  <script src="js/jquery.js"></script>
  <script src="js/metro.min.js"></script>
    <script src="https://use.fontawesome.com/5fe7ff4e50.js"></script>
    <script>



   </script>

</head>
<body>
  <style>
        .login-form {
            width: 25rem;
            height: 18.75rem;
            position: fixed;
            top: 50%;
            margin-top: -9.375rem;
            left: 50%;
            margin-left: -12.5rem;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
    </style>





    <div class="formu">
        <form name="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
           <center> <h1 class="text-light"><i>Login de Acceso</i></h1></center>
            <hr class="thin"/>
            <br />
            <div class="input-control text full-size" data-role="input">
                <label for="user_login">Usuario:</label>
                <input type="text" name="usuario" id="user_login">
                <button class="button helper-button clear"><i class="fa fa-user-plus" aria-hidden="true"></i></span></button>
            </div>
            <br />
            <br />
            <div class="input-control password full-size" data-role="input">
                <label for="user_password">Usuario password:</label>
                <input type="password" name="password" id="user_password">
                <button class="button helper-button reveal"><i class="fa fa-unlock" aria-hidden="true"></i></span></button>
            </div>
            <br />
            <br />

            <br>

          <?php
          if(!isset($_SESSION['usuario'])){
                 include 'btn_enviar.php'; } ?>
             <?php if(!empty($enviar)): ?>
                 <div class="enviar">
                     <?php echo $enviar;  ?>
                 </div>
              <?php echo $enviado; ?>
            <?php endif; ?>
            <?php if(!empty($error)): ?>
                <div class="panel alert">
                 <div class="heading ">
                     <?php echo $error ?>
                 </div>
               </div>

            <?php endif; ?>

           </div>
</form>

</body>
</html>
