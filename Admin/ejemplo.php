<?php
 require 'conexion.php';

require("dompdf/dompdf_config.inc.php"); 
include_once dirname(__FILE__)."/phpqrcode/qrlib.php";

$impresiones = $_POST['impresiones'];
$evento = $_POST['evento'];
$servicio = $_POST['servicio'];

$sql2= "INSERT INTO imprimir (evento ,servicio,impresiones) VALUES ('$evento','$servicio','$impresiones')";
  mysql_query($sql2);

$sql1= "SELECT *
FROM evento
INNER JOIN imprimir ON imprimir.evento = evento.nombreEvento order by imprimir.id desc limit 1";
    $result1= mysql_query($sql1);
    $row = mysql_fetch_assoc($result1);
    $fechaEvento = $row['FechaInicio'];
    $lugar = $row['lugar'];
    $idEvento = $row['idevento'];


$sql= "SELECT idBoleto FROM boletoPersona order by idBoleto desc limit 1 ";
  $result= mysql_query($sql);
  $usr = mysql_fetch_assoc($result);
$ultimoRegistro = $usr['idBoleto'];

$primerImpresion = $ultimoRegistro + 1;
$totalImpresiones = ($ultimoRegistro + $impresiones);

for ($i = $primerImpresion; $i <= $totalImpresiones; $i++) {
    QRcode::png($i,"temp/$i-$evento.png",QR_ECLEVEL_H,9,1);

    $sql= "INSERT INTO boletoPersona (idEvento,nombreUsuario,servicio,evento,imagen,fecha) VALUES ('$idEvento','$lugar','$servicio','$evento','$i-$evento.png','$fechaEvento')";
  mysql_query($sql);

}


$mysqli = new mysqli('shareddb1a.hosting.stackcp.net','cl20-julio','Chivas45','cl20-julio');


$html= '<!DOCTYPE html>
 <html>
 <head>
  <title>PULEINA</title>
 </head>
 <body>';

$consulta= "SELECT * FROM boletoPersona ORDER BY idBoleto desc LIMIT $impresiones";
$resultado= $mysqli->query($consulta);
while($row = mysqli_fetch_array($resultado)){	
$html.='            
            
	<h2>'.$row['evento'].'</h2>
      
	<h2>'.$row['nombreUsuario'].'</h2>
      
	<h2>'.$row['servicio'].'</h2>
        
        <h2>'.$row['fecha'].'</h2>; 
   
	<img src="temp/'.$row['imagen'].'"/>
        <br>
        <br>
        <br>
        <br>';
}
$html.='
        </body>
 </html>';

 $dompdf = new DOMPDF();
 $dompdf->load_html($html);
 $dompdf->render();
 $dompdf->stream("sample1.pdf");