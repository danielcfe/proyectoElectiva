<html>
<head>
<title>Mi Formulario</title>
</head>
	 <body>
		<?php $this->load->helper('form');?>
		<?php  echo form_open('vuelos/editar', 'class = "well"');
		 $vuelo = $vuelo[0];?>
		

		 <h1>Vuelos - IUT Airlines</h1>     
		
		<h4>Id de Vuelo </h4>
		<input type="text" name="id" readonly="readonly" value="<?php echo	$vuelo['id_vuelo']   ?>" size="50" />
		<?php echo form_error('id'); ?>

		<h4>Origen </h4>
		<input type="text" name="origen" value="<?php echo	$vuelo['origen']   ?>" size="50" />
		<?php echo form_error('origen','<div class="alert alert-error">', '</div>'); ?>
		
		<h4>Distino </h4>
		<input type="text" name="destino" value="<?php echo	$vuelo['destino']   ?>" size="50" />
		<?php echo form_error('destino','<div class="alert alert-error">', '</div>'); ?>

		<h4>Numero de Pasajeros </h4>
		<input type="text" name="npasajeros" value="<?php echo	$vuelo['npasajeros']   ?>" size="50" />
		<?php echo form_error('npasajeros','<div class="alert alert-error">', '</div>'); ?>

		<h4>Fecha y Hora de Salida </h4>
		<input type="datetime" name="fechasalida" value="<?php echo	$vuelo['fecha_salida']   ?>" size="50" />
		<?php echo form_error('fechasalida','<div class="alert alert-error">', '</div>'); ?>

		<h4>Fecha y Hora de Llegada </h4>
		<input type="datetime" name="fechallegada" value="<?php echo	$vuelo['fecha_llegada']   ?>" size="50" />
		<?php echo form_error('fechallegada','<div class="alert alert-error">', '</div>'); ?>

		<div><button class= "btn btn-primary" type="submit" value="Enviar"><i class="icon-plane icon-white"></i>  Enviar Informacion</button>
			</div>
		</form>
	</body>
</html>