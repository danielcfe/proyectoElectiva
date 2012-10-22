<html>
<head>
<title>Mi Formulario</title>
</head>
	<body>
		<?php $this->load->helper('form');?>
		<?php  echo form_open('usuario/agregar', "class = ' well'"); ?>
		
		 <h1>Usuarios - IUT Airlines</h1>    

		<h4>Cedula </h4>
		<input type="text" name="cedula" value="" size="50" />
		<?php echo form_error('cedula','<div class="alert alert-error">', '</div>'); ?>

		<h4>Nombre </h4>
		<input type="text" name="nombre" value="" size="50" />
		<?php echo form_error('nombre','<div class="alert alert-error">', '</div>'); ?>

		<h4>Edad </h4>
		<input type="text" name="edad" value="" size="50" />
		<?php echo form_error('edad','<div class="alert alert-error">', '</div>'); ?>
		<h4>Email </h4>
		<input type="text" name="email" value="" size="50" />
		<?php echo form_error('email','<div class="alert alert-error">', '</div>'); ?>

		<h4>clave </h4>
		<input type="text" name="pass" value="" size="50" />
		<?php echo form_error('pass','<div class="alert alert-error">', '</div>'); ?>

		<div><button class= "btn btn-primary" type="submit" value="Enviar"><i class="icon-user icon-white"></i> Enviar Informacion</button>
			</div>
		</form>
	</body>
</html>