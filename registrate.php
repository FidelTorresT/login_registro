<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password2 = $_POST['password2'];

		echo "$usuario . $password . $password2";

		$errores = '';

		if (empty($usuario) or empty($password) or empty($password2)) {
			$errores .= '<li>Por favor rellena los datos correctamente</li>';
		} else {
			try {
				$conexion = new PDO('mysql:host=localhost;dbname=nombredelabase' , 'root' , '');
			} catch (PDOException $e) {
				echo "Error: . $e->getMessage()";
			}

			$statement $conexion->prepare('SELECT * FROM TABLLLA WHERE USUARIO = :USUARIO LIMIT 1');
			$statement->execute(array(':usuario'=> $usuario));
		}
	}

	require 'views/registrate.view.php';


  ?>