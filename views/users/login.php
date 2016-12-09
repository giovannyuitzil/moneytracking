<div>
	<h3>Inicio de sesion</h3>
	<form action="<?php echo APP_URL."/users/login"; ?>" method="POST">
		<div>
			<label for="username">Usuario:</label>
			<input type="text" name="username">
		</div>
		<div>
			<label for="password">Contraseña:</label>
			<input type="password" name="password">
		</div>
		<input type="submit" value="Iniciar sesión">
	</form>
</div>