<?php
$mysqli = new mysqli('shareddb1a.hosting.stackcp.net','cl20-julio','Chivas45','cl20-julio');

date_default_timezone_set('America/Mexico_City');
$fecha = date("d-m-Y");
$consulta= "SELECT * FROM boletoPersona";
$resultado= $mysqli->query($consulta);

//Inicio de la instancia para la exportación en Excel
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=ReporteBoletos_$fecha.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo "<table border=1> ";
echo "<tr> ";
echo     "<th>ID Boleto</th> ";
echo 	"<th>ID Evento</th> ";
echo 	"<th>Nombre</th> ";
echo 	"<th>Servicio</th> ";
echo 	"<th>Evento</th> ";
echo "</tr> ";

while($row = mysqli_fetch_array($resultado)){	

	$idBoleto = $row['idBoleto'];
        $idEvento = $row['idEvento'];
	$nombreUser = $row['nombreUsuario'];
	$servicio = $row['servicio'];
        $evento = $row['evento'];

	echo "<tr> ";
	echo 	"<td>".$idBoleto."</td> "; 
	echo 	"<td>".$idEvento."</td> "; 
	echo 	"<td>".$nombreUser."</td> ";
        echo 	"<td>".$servicio."</td> "; 
        echo 	"<td>".$evento."</td> ";         
	echo "</tr> ";

}
echo "</table> ";
?>