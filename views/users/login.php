<div class="row">
<div class="col-md-6 col-sm-12 col-xs-12">
	<h3>Inicio de sesion</h3>
	<form action="<?php echo APP_URL."/users/login"; ?>" method="POST">

		<style type="text/css">
		input{
			height: 30px;
			width: 200px;

		}


		label{
	color: #222222; 
    font-size: 14px; 
    display: block; 
		}
	</style>
	
		<div class="form-group">
			<label for="username">Usuario:</label>
			<input class="form-control" type="text" name="username">
		</div>
	<div class="form-group">
			<label for="password">Contraseña:</label>
			<input class="form-control" type="password" name="password">
		</div>
		<input class="btn btn-success"  type="submit" value="Iniciar sesión">
	</form>
</div>
</div>
