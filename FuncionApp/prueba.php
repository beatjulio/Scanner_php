<?php

require 'conect.php';

$texto = $_POST["id"];

if($texto=="borrar"){
    
    $sql= "TRUNCATE TABLE resumen";
    mysql_query($sql);
    echo "Data Matched";
    
    
} else {
    $sql= "INSERT INTO prueba (texto) VALUES ('$texto')";
    mysql_query($sql);
    echo "Data Matched";
}