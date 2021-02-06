<?php session_start();

if (isset($_SESSION['usuario_PG'])) {
	header('location:principal.php');
} else {
	header('location:login.php');
}
 ?>
