
<html>
    <head>
        <meta charset="UTF-8">
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href= "css/rsultsStyle.css" type="text/css" rel="stylesheet" media= "screen"/>
        <title>Eventos</title>
    </head>
    <body>
        
        <header>
		
		<nav>
			<ul>
                            <li><a href="administrador.php">Panel de Control</a></li>
				<li class="submenu">
					<a href="index.php">Articulos</a>
					<ul class="children">
						<li><a href="categorias.php?categoria=Tecnologia">Tecnologia</a></li>
						<li><a href="categorias.php?categoria=Politica">Politica</a></li>
						<li><a href="categorias.php?categoria=Otros">Otros</a></li>
					</ul>
				</li>
				
                                <li style="float:right"><a class="active" href="cerrar.php">Cerrar Sesion</a></li>
                                
                                </form>
			</ul>
		</nav>
	</header>
        
        <div class="contenedor">
		<h1 class="titulo">Eventos</h1>
		<hr class="border">

		<form action="insertar.php" method="POST" class="formulario" name="login">
			<div class="form-group">
				<h3> Nombre:</h3><input type="text" name="evento" class="usuario" placeholder="Nombre de Evento">
			</div>
                    
                        <div class="form-group">
                            <h3> Fecha Inicio:</h3> <input type="date" name="fechaInicio" step="1" min="2017-02-01" max="2017-04-31" value="<?php echo date("Y-m-d");?>">
			</div>
                    
			<div class="form-group">
                            <h3>Fecha Fin:</h3> <input type="date" name="fechaFin" step="1" min="2017-02-01" max="2017-04-31" value="<?php echo date("Y-m-d");?>">
                            <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			
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
                                                        <td>
								<?php echo $row['idevento'];?>
							</td>
                                                        
							<td> <?php echo $row['nombreEvento'];?>
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
		</body>
	</html>	
		</body>
	</html>	