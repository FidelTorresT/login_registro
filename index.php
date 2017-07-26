<?php session_start();
echo "index";

if (isset($_SESSION['usuario'])) {
	header('Location: contenido.php');
} else {
	header('Location: registrate.php');
}



 ?>