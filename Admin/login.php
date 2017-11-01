<?php session_start();

 require 'conect.php';

if (isset($_SESSION['admin'])) {
	header('Location: index.php');
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['pass'];
//	$password = hash('sha512', $password);
//
//	try {
//		$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
//	} catch (PDOException $e) {
//		echo "Error:" . $e->getMessage();;
//	}

	
		$statement = $conexion->prepare('SELECT * FROM usuario WHERE nombre = :usuario AND pass = :password');
		$statement->execute(array(
                    ':usuario' => $usuario,
                    ':password' => $password
                        ));

	$resultado = $statement->fetch();
	if ($resultado !== false) {
		$_SESSION['admin'] = $usuario;
		header('Location: index.php');
	} else {
		$errores .= '<li>Datos Incorrectos</li>';
	}
}

require 'views/login.view.php';

?>