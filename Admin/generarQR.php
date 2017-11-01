<?php
session_start();
date_default_timezone_set('America/Mexico_City');
if (isset($_SESSION['admin'])) {
    require 'views/header_view.php';
    require 'conexion.php';
    
}else{
     header('Location: login.php');
}
?>
      
       
        <div class="contenedorQR">
            <br>
		<h1 class="titulo">Boleto</h1>
		<hr class="border">

                <form action="ejemplo.php" method="POST" class="formulario" name="login">
                    <center><input type="text" name="impresiones" class="usuario" placeholder="Numero de impresiones"></center>
                    <center><select id="seleccionar" name="evento" class="seleccionar">
                        <?php 
                            require 'conexion.php';

                        $sql= "SELECT nombreEvento FROM evento";
                                $result= mysql_query($sql);
                        while($usr = mysql_fetch_assoc($result)){
                            $evento = $usr["nombreEvento"];
                            echo "<option>$evento</option>";
                        }	?>
                        
                        </select></center>
                    <center><select id="seleccionar" name="servicio" class="seleccionar">
                            <option>Comun</option>
                            <option>VIP</option>
                        </select></center>
                    
		
                    <br>
                    <br>
                    <center><button class="qr"onclick="login.submit()">Imprimir Codigos</button></center>

                    
                </form>
        </div>
        
        <script>
            
             var i = <?php echo $i; ?>;
              var o = <?php echo $o; ?>;
               var u = <?php echo $u; ?>;
                var a =0;
               
function Imprimir(imagen) {
    
    for (a; a < 9; i++) {
    
    
    
   newWindow = window.open("","Imagenes","width=400,height=450,left=100,top=60");
   newWindow.document.open();
   newWindow.document.write('<html><head></head><body onload="window.print()"><?php while($row = mysqli_fetch_array($resultado)){	

	
	$evento = $row['evento'];
	$Lugar = $row['nombre_completo'];
        $servicio = $row['servicio'];
        $fechaHora = $row['fechaHora'];
        $imagen = $row['imagen'];

   ?><h1>Evento: <?php echo $evento;?></h1><h1>Lugar: <?php echo $Lugar;?></h1><h1>Fecha: <?php echo $fechaHora;?></h1><img src="temp/".<?php echo $imagen; ?>."/><?php }?></body></html>');  
   newWindow.document.close();
   newWindow.focus();
   }
}
</script>
       
    </body>
</html>	