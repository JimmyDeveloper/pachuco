<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link href="css/metro.min.css" rel="stylesheet">
	<link href="css/estilos.css" rel="stylesheet">
    <link href="css/reloj.css" rel="stylesheet">
    <link rel="stylesheet" href="css/alertify.min.css" />
    <link rel="stylesheet" href="css/default.min.css" />
    <script src="js/alertify.min.js"></script>
    <script src="https://use.fontawesome.com/5fe7ff4e50.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/metro.js"></script>
    <script type="text/javascript">
     function alert(){

     alertify.confirm("<h3>SeecorpDesarrollos le advierte...<br> Decea realmenta eliminar al usuario?",
  function(){
    alertify.success('Aceptar');
  },
  function(){
    alertify.error('Cancelar');
  });
      }
    </script>
</head>
<body>
	<ul class="h-menu">
    <li><a href="#" onclick="return alert()">Home</a></li>
    <li><a href="#">Nosotros</a></li>
    <li><a href="contacto.php">Contacto</a></li>
    <li>
        <a href="#" class="dropdown-toggle">Usuarios...</a>
        <ul  class="d-menu" data-role="dropdown">
            <li><a href="#"> Sesion</a></li>
            <li><a href="#">Partners</a></li>
        </ul>
    </li>
   
        <form>
            <div class="input-control text" style="width: 350px; margin-left: 50px">
                  <input type="text" placeholder="Buscar...">
                <button class="button"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
            </div>
        </form>
     <li class="li">
            <?php if(isset($_SESSION['usuario'])) : ?>
        <?php endif ;?>
        <a href="#" class="dropdown-toggle"><strong>Bienvenido...</strong><?php echo ucwords( $_SESSION['usuario']);?></a>
        <ul  class="d-menu" data-role="dropdown">
            <li><a href="cerrar.php">Cerrar Sesion</a></li>
            <li><a href="#">Partners</a></li>
        </ul>
     <li>
    </li>
    </ul>

<center><h1>Bienvenidos a la pagina principal</h1></center>

<div class="contenedor">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    <br>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.lo</p>
</div>

<footer>
 <div class="wrap">
        
            <div class="fecha">
                <span id="diaSemana" class="diaSemana">Martes</span>
                <span id="dia" class="dia">27</span>
                <span>de </span>
                <span id="mes" class="mes">Octubre</span>
                <span>del </span>
                <span id="year" class="year">2015 </span> 
                <span id="horas" class="horas">11</span>
                <span>:</span>
                <span id="minutos" class="minutos">48</span>
                
            </div>
        
    </div>
    <script src="js/reloj.js"></script> 
       <small>    
        <i>login creado por Diego Pennisi..</i>
       </small>
    
</footer>
</body>
</html>