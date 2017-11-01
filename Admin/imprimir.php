<?php
//require_once 'pdf/dompdf_config.inc.php';
require("dompdf/dompdf_config.inc.php"); 
include_once dirname(__FILE__)."/phpqrcode/qrlib.php";

// --- url
$impresiones = 3;
$idBoleto = 1;
    $Evento="SuperBowl";
    $Lugar="Arizona";
    $Hora="23:00:00";

    
  for ($i = 1; $i <= 5; $i++) {
    QRcode::png($i,"temp/$i.png",QR_ECLEVEL_H,9,1);
echo $i;
echo "<img src='temp/1.png'/>";   
    
  }


//function imprimir($idBoleto,$evento,$Lugar,$Hora){
//$html= '<!DOCTYPE html>
// <html>
// <head>
//  <title>PULEINA</title>
// </head>
// <body>
// <h2>'.$evento.'</h2>
// <h2>'.$Lugar.'</h2>
// <h2>'.$Hora.'</h2>
// <img src="temp/'.$idBoleto.'.png"/>
// </body>
// </html>';
// $dompdf = new DOMPDF();
// $dompdf->load_html($html);
// $dompdf->render();
// $dompdf->stream("sample1.pdf");
// 
// return TRUE;
//}
?>