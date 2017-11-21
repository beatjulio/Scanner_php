<?php
session_start();
//if (isset($_SESSION['admin'])) {
//    require 'views/header_view.php';
//    
//}else{
//     header('Location: login.php');
//}

require 'views/header_view.php';
?>
        
        <div class="contenedorindex">
		<h1 class="titulo">Panel de Control</h1>
		<center><hr class="border"></center>

	          
				<a id="boton1" href="nuevoEvento.php">Nuevo Evento</a>
			
                <a id="botones" href="generarQR.php">Generar Boletos</a>
          
                <a id="boton_final" href="consultaEvento.php">Consultar Eventos</a>

			    <a id="botonesabajo" href="consultaRegistroBoleto.php">Consultar Boletos por Persona</a>

                <a id="boton_final" href="consultaRegistroUsuario.php">Consultar Resgistro de Accesos</a>
                
                 <a id="boton_final" href="Juego.php">Pasar el rato</a>
               
    		</div>
		</body>
	</html>	
		