<?php


try {
	$conexion = new PDO('mysql:host=shareddb1a.hosting.stackcp.net;dbname=cl20-julio', 'cl20-julio', 'Chivas45');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();;
	}


?>

