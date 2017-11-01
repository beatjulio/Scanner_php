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
            <h1 class="titulo">Eventos</h1>
		<hr class="border">
        <?php session_start();
?>
   
      <?php  include 'conexion.php';  //mandar a traer el include y traer la base de datos y no estar escribiendo en cada pagina el codigo de conexion
        
      $sql= "SELECT * FROM evento";
      $data = mysql_query($sql)
      
        ?>
       <table>
			<thead>
				<tr class="centro">
					<td>ID Evento</td>
					<td>Evento</td>
					<td>Fecha Inicio</td>
					<td>Fecha Fin</td>
					
				</tr>
				<tbody>
        <?php
        WHILE($row = mysql_fetch_assoc($data))
        {?>
                                                <tr>
							<td> <?php echo $row['idevento'];?>
							</td>
							<td>
								<?php echo $row['nombreEvento'];?>
							</td>
							<td>
								<?php echo $row['FechaInicio'];?>
							</td>
							<td>
								<?php echo $row['FechaFin'];?>
							</td>
							
						</tr>
					<?php } ?>
				</tbody>
			</table>	
    		</div>
<br>
<br>
<a href="export/exportar.php">    
    <center><button class="qr" >Exportar a Excel</button></center>
</a>

<script>
window.scroll({
  top: 2500, 
  left: 0, 
  behavior: 'smooth' 
});
</script>


		</body>
	</html>	