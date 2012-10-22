<html>
<head>
<title>Mi Formulario</title>
</head>
	<body>
		<?php $this->load->helper('form');?>
		<?php  echo form_open('vuelos/agregar', 'class = "well"'); ?>
		
		 <h1>Vuelos - IUT Airlines</h1>     
		
		<h4>Origen </h4>
		<input type="text" name="origen" value="" size="50" />
		<?php echo form_error('origen','<div class="alert alert-error">', '</div>'); ?>
		
		<h4>Distino </h4>
		<input type="text" name="destino" value="" size="50" />
		<?php echo form_error('destino','<div class="alert alert-error">', '</div>'); ?>

		<h4>Numero de Pasajeros </h4>
		<input type="text" name="npasajeros" value="" size="50" />
		<?php echo form_error('npasajeros','<div class="alert alert-error">', '</div>'); ?>

		<h4>Fecha y Hora de Salida </h4>
		<input type="datetime" name="fechasalida" value="" size="50" />
		<?php echo form_error('fechasalida','<div class="alert alert-error">', '</div>'); ?>

		<h4>Fecha y Hora de Llegada </h4>
		<input type="datetime" name="fechallegada" value="" size="50" />
		<?php echo form_error('fechallegada','<div class="alert alert-error">', '</div>'); ?>

		<div><button class= "btn btn-primary" type="submit" value="Enviar"><i class="icon-plane icon-white"></i>  Enviar Informacion</button>
			</div>
		</form>
	</body>
</html>