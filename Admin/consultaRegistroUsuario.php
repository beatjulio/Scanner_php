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
            <h1 class="titulo">Accesos</h1>
		<hr class="border">
        <?php session_start();
?>
   
      <?php  include 'conexion.php';  //mandar a traer el include y traer la base de datos y no estar escribiendo en cada pagina el codigo de conexion
        
      $sql= "SELECT * FROM idBoleto";
      $data = mysql_query($sql)
      
        ?>
       <table>
			<thead>
				<tr class="centro">
					<td>ID Boleto</td>
					<td>Evento</td>
                                        <td>Nombre</td>
                                        <td>Servicio</td>
					<td>fechaHora</td>
					
				</tr>
				<tbody>
        <?php
        WHILE($row = mysql_fetch_assoc($data))
        {?>
                                                <tr>
							<td> <?php echo $row['id_boleto'];?>
							</td>
							<td>
								<?php echo $row['evento'];?>
							</td>
							<td>
								<?php echo $row['nombre_completo'];?>
							</td>
							<td>
								<?php echo $row['servicio'];?>
							</td>
                                                        <td>
								<?php echo $row['fechaHora'];?>
							</td>
							
						</tr>
					<?php } ?>
				</tbody>
			</table>	
    		</div>
<br>
<br>
<a href="export/exportarRegistroUsuario.php">    
    <center><button class="qr" >Exportar a Excel</button></center>
</a>
		</body>
	</html>	