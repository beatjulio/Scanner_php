<?php
 $host="shareddb1a.hosting.stackcp.net";
 $username="cl20-julio";
 $password="Chivas45";
 $db_name="cl20-julio";
 
 
 $con=@mysql_connect($host, $username, $password) or die("Cannot connect");
 
 mysql_select_db($db_name)or die("cannot select db");
 
 $sql= "SELECT * FROM resumen";
$result= mysql_query($sql);
$json = array();


if(mysql_num_rows($result)){
    while($row=  mysql_fetch_object($result)){
        $json['lexicon'][]=$row;
    }
    
}else if(mysql_num_rows($result)){
    while($row=  mysql_fetch_object($result)){
        $json['lexicon'][]=$row;
    }
    
}
mysql_close($con);

echo json_encode($json);




/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

