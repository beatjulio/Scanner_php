<?php
session_start();
if (isset($_SESSION['admin'])) {
    require 'views/header_view.php';
    
}else{
     header('Location: login.php');
}
?>
<!--        <div class="contenedor">
		<h1 class="titulo">Consultar Boletos por Persona</h1>
		<hr class="border">

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
			<div class="form-group">
				<input type="text" name="usuario" class="usuario" placeholder="Usuario">
			</div>

			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input type="password" name="pass" class="password_btn" placeholder="Contraseña">
				<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			</div>
        </div>-->
        <div class="tabla">
            <h1 class="titulo">Boletos por Persona</h1>
		<hr class="border">
                
        <?php session_start();
?>
   
      <?php  include 'conexion.php';  //mandar a traer el include y traer la base de datos y no estar escribiendo en cada pagina el codigo de conexion
      
 
      
        
      $sql= "SELECT * FROM boletoPersona";
      $data = mysql_query($sql)
      
        ?>
       <table>
			<thead>
				<tr class="centro">
					<td>ID Boleto</td>
					<td>ID Evento</td>
					<td>Nombre</td>
					<td>Servicio</td>
					<td>Evento</td>
				</tr>
				<tbody>
        <?php
        WHILE($row = mysql_fetch_assoc($data))
        {?>
                                                <tr>
							<td> <?php echo $row['idBoleto'];?>
							</td>
							<td>
								<?php echo $row['idEvento'];?>
							</td>
							<td>
								<?php echo $row['nombreUsuario'];?>
							</td>
							<td>
								<?php echo $row['servicio'];?>
							</td>
							<td>
								<?php echo $row['evento'];?>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>	
    		</div>
<br>
<br>
<a href="export/exportarRegistroBoleto.php">    
    <center><button class="qr" >Exportar a Excel</button></center>
</a>
		</body>
	</html>	