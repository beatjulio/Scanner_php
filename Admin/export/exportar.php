<?php
$mysqli = new mysqli('shareddb1a.hosting.stackcp.net','cl20-julio','Chivas45','cl20-julio');

date_default_timezone_set('America/Mexico_City');
$fecha = date("d-m-Y");
$consulta= "SELECT * FROM evento";
$resultado= $mysqli->query($consulta);

//Inicio de la instancia para la exportación en Excel
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=ReporteEventos_$fecha.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo "<table border=1> ";
echo "<tr> ";
echo     "<th>ID Evento</th> ";
echo 	"<th>Evento</th> ";
echo 	"<th>Fecha Inicio</th> ";
echo 	"<th>Fecha Fin</th> ";
echo "</tr> ";

while($row = mysqli_fetch_array($resultado)){	

	$idEvento = $row['idevento'];
	$evento = $row['nombreEvento'];
	$fechaInicio = $row['FechaInicio'];
        $fechaFin = $row['FechaFin'];

	echo "<tr> ";
	echo 	"<td>".$idEvento."</td> "; 
	echo 	"<td>".$evento."</td> "; 
	echo 	"<td>".$fechaInicio."</td> ";
        echo 	"<td>".$fechaFin."</td> "; 
	echo "</tr> ";

}
echo "</table> ";
?>