<?php
$mysqli = new mysqli('shareddb1a.hosting.stackcp.net','cl20-julio','Chivas45','cl20-julio');

date_default_timezone_set('America/Mexico_City');
$fecha = date("d-m-Y");
$consulta= "SELECT * FROM idBoleto";
$resultado= $mysqli->query($consulta);

//Inicio de la instancia para la exportación en Excel
header("Content-type:application/pdf");
header("Content-Disposition: attachment; filename=ReporteEventos_$fecha.pdf");

header("Expires: 0");
readfile("original.pdf");




while($row = mysqli_fetch_array($resultado)){	

	$idEvento = $row['id_boleto'];
	$evento = $row['evento'];
	$Lugar = $row['nombre_completo'];
        $servicio = $row['servicio'];
        $fechaHora = $row['fechaHora'];
        $imagen = $row['imagen'];

	
	echo 	"<h1>".$evento."</h1>"; 
        echo "<br>";
	echo 	"<h1>".$Lugar."</h1>"; 
        echo "<br>";
	echo 	"<h1>".$servicio."</h1>";
        echo "<br>";
        echo 	"<h1>".$fechaHora."</h1>"; 
        echo "<br>";
	echo '<img src="temp/'.$imagen.'.png"/>';

}
echo "</table> ";
?>