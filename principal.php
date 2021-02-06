<?php session_start();

if (isset($_SESSION['usuario'] )) {

require 'views/principal.view.php';
} else{
    header('location:login.php');
}
 ?>
