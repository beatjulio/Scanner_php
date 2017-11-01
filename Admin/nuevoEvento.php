<?php
session_start();
if (isset($_SESSION['admin'])) {
    require 'views/header_view.php';
    
}else{
     header('Location: login.php');
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    require 'conexion.php';
}
	$evento = $_POST['evento'];
	$lugar = $_POST['lugar'];
	$fechaInicio = $_POST['fechaInicio'];
        $fechaFin = $_POST['fechaFin'];
        
        $sql2= "INSERT INTO evento (nombreEvento,FechaInicio,FechaFin,lugar) VALUES ('$evento','$fechaInicio','$fechaFin','$lugar')";
  mysql_query($sql2);



?>
        <div class="contenedor1">
		<h1 class="titulo">Nuevo Evento</h1>
		<hr class="border">

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
			<div class="form-group">
				<h3> Nombre:</h3><input type="text" name="evento" class="usuario" placeholder="Nombre de Evento">
			</div>
                    
                        <div class="form-group">
                            <h3> Fecha Inicio:</h3> <input type="date" name="fechaInicio" step="1" min="2017-02-01" max="2017-04-31" value="<?php echo date("Y-m-d");?>">
			</div>
                    
			<div class="form-group">
                            <h3>Fecha Fin:</h3> <input type="date" name="fechaFin" step="1" min="2017-02-01" max="2017-04-31" value="<?php echo date("Y-m-d");?>">
                           
                            
                            
                            <div class="form-group">
                            <h3>Lugar:</h3><input type="text" name="lugar" class="usuario" placeholder="Ingrese el Lugar del Evento">
                            <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			
		</div>
			
		</div>
                    
                    <?php if(!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>
                    
                </form>
        </div>
        
        <div class="tabla">
           
        <?php session_start();
?>
   
      <?php  include 'conexion.php';  //mandar a traer el include y traer la base de datos y no estar escribiendo en cada pagina el codigo de conexion
        
      $sql= "SELECT * FROM evento";
      $data = mysql_query($sql)
      
        ?>
       <table>
			<thead>
				<tr class="centro">
                                        
					<td>Evento</td>
                                        <td>Lugar</td>
					<td>Fecha Inicio</td>
					<td>Fecha Fin</td>
					
				</tr>
				<tbody>
        <?php
        WHILE($row = mysql_fetch_assoc($data))
        {?>
                                    <tr>
                                                        
							<td>
                                                                <?php echo $row['nombreEvento'];?>
							</td>
                                                        
                                                        <td>
                                                                <?php echo $row['lugar'];?>
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
            
            <a href="export/exportar.php">    
    <button class="btn btn-primary" >
                Exportar
    </button>
</a>
    		</div>
		</body>
	</html>	
		