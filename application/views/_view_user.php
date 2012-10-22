<html>
<head>
<title>Mi Formulario</title>
</head>
	<body>

		<?php 
		$usuario = $usuario[0];
		?>
		 <h2>USUARIO</h2>     
		<h5>Cedula </h5>
		<input type="text" name="cedula" value="<?php echo	$usuario['cedula']   ?>" size="50" />
		<?php echo form_error('cedula'); ?>
		<h5>Nombre </h5>
		<input type="text" name="nombre" value="<?php echo	$usuario['nombre']   ?>" size="50" />
		<?php echo form_error('nombre'); ?>

		<h5>Edad </h5>
		<input type="text" name="edad" value="<?php echo	$usuario['edad']   ?>" size="50" />
		<?php echo form_error('edad'); ?>

		<h5>Email </h5>
		<input type="text" name="email" value="<?php echo	$usuario['email']   ?>" size="50" />
		<?php echo form_error('email'); ?>


	</body>
</html>