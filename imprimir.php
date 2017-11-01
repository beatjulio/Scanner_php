<?php
//require_once 'pdf/dompdf_config.inc.php';
require("dompdf/dompdf_config.inc.php"); 
include_once dirname(__FILE__)."/phpqrcode/qrlib.php";

// --- url
$impresiones = 3;
$url = "1";



 for ($i = 1; $i <= 3; $i++) {
    QRcode::png($i,"temp/$i.png",QR_ECLEVEL_H,9,1);
echo $i;
echo "<img src='temp/$i.png'/>";

$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista</title>
</head>

<body>
<div>

<img src="temp/'.$i.'png"/>
$codigoHTML=
</body>
</div>
</html>';

$codigoHTML=utf8_decode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$pdf = $dompdf->output();
$file_location = $_SERVER['DOCUMENT_ROOT']."temp/".$i.".pdf";
file_put_contents($file_location,$pdf); 

}




