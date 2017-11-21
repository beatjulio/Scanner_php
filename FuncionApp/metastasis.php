<?php
date_default_timezone_set('America/Mexico_City');
require 'conect.php';


$id = $_POST["id"];

//if($id =! NULL ){
//    $sql= "INSERT INTO prueba (texto) VALUES ('Si recibe datos')";
//    mysql_query($sql);
//    
//}else{
//    $sql= "INSERT INTO prueba (texto) VALUES ('No recibe datos')";
//    mysql_query($sql);
//    
//}


$sql= "SELECT * FROM idBoleto WHERE id_boleto=$id";
$result= mysql_query($sql);
$usr = mysql_fetch_assoc($result);
$id_boleto = $usr["id_boleto"];
$evento = $usr["evento"];
$nombre = $usr["nombre_completo"]; 
$servicio = $usr["servicio"]; 
$fecha = $usr["fechaHora"];
$fechaActual = Date("Y-m-d");
$acceso;

    
//    echo $fechaActual;
    

if($id == "$id_boleto"){
    $acceso="Este boleto fue usado";
    
    
    $sql= "INSERT INTO resumen (acceso,nombre,evento,servicio,fechaHora) VALUES ('$acceso','$nombre','$evento','$servicio','$fecha')";
    mysql_query($sql);
    
  
    echo "Data Matched";
    

    
}else{
    
    $sql1= "SELECT *
FROM evento
INNER JOIN boletoPersona ON boletoPersona.idEvento = evento.idevento
WHERE boletoPersona.idBoleto = $id";
    $result= mysql_query($sql1);
    $usr0 = mysql_fetch_assoc($result);
    $idevento = $usr0["idevento"];
    $FechaInicio = $usr0["FechaInicio"];
    $id_boleto = $usr0["idBoleto"];
    $id_evento = $usr0["idEvento"];
    $evento = $usr0["evento"];
    $nombre = $usr0["nombreUsuario"]; 
    $servicio = $usr0["servicio"];  
    $fechaActual = Date("Y-m-d");
    $fechainsert = date("Y-m-d H:i:s");
    $acceso;
    
    
    if($servicio==="VIP"){
    $acceso="Access Granted";
    
    
    $sql= "INSERT INTO resumen (acceso,nombre,evento,servicio,fechaHora) VALUES ('$acceso','$nombre','$evento','$servicio','$fechainsert')";
    mysql_query($sql);

    $sql0= "INSERT INTO idBoleto (id_boleto,evento,nombre_completo,servicio,fechaHora) VALUES ('$id_boleto','$evento','$nombre','$servicio','$fechainsert')";
    mysql_query($sql0);
    
    echo "Data Matched";
    
    }else if($servicio=="Comun"){
        
        
 
    if($idevento==$id_evento and $FechaInicio===$fechaActual){
        $acceso="Access Granted";
    
    
        
    $sql= "INSERT INTO resumen (acceso,nombre,evento,servicio,fechaHora) VALUES ('$acceso','$nombre','$evento','$servicio','$fechainsert')";
    mysql_query($sql);

    $sql0= "INSERT INTO idBoleto (id_boleto,evento,nombre_completo,servicio,fechaHora) VALUES ('$id_boleto','$evento','$nombre','$servicio','$fechainsert')";
    mysql_query($sql0);
    
    echo "Data Matched";
        
    }else if($idevento===$id_evento and $FechaInicio!=$fechaActual){
        $acceso="Fecha Equivocada";

     $sql= "INSERT INTO resumen (acceso,nombre,evento,servicio,fechaHora) VALUES ('$acceso','$nombre','$evento','$servicio','$fechainsert')";
    mysql_query($sql);
    
    
    echo "Data Matched";
        
    }
        
    }
    
}