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
				<i class="icono izquierda fa fa-lock"></i><input type="password" name="pass" class="password_btn" placeholder="ContraseÃ±a">
				<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			</div>
        </div>-->
        <div class="tabla">
            <h1 class="titulo">Space Sooter</h1>
		<hr class="border">
                
                <object type="application/x-shockwave-flash" data="Colisiones.swf" width="1500" height="1500">
    <param name="movie" value="Colisiones.swf" />
    <param name="quality" value="high" />
    
</object>

		</body>
	</html>	