<?php

require 'conect.php';

$texto = $_POST["codigo"];

if($texto=="borrar"){
    
    $sql= "TRUNCATE TABLE resumen";
    mysql_query($sql);
    
    
} else {
    $sql= "INSERT INTO prueba (texto) VALUES ('$texto')";
    mysql_query($sql);
    
}