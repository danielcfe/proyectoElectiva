



<h1><a class = "btn" type = "link" href = "/agencia_vuelos/index.php/vuelos/nuevo">Insertar un nuevo Vuelo</a><h1>
<table class="table table-striped table-condensed " >
<thead>
	<tr>
		<th>Codigo</th>
		<th>Origen</th>
		<th>Destino</th>
		<th>Nº Pasajeros</th>
		<th>Fecha Salida</th>
		<th>Fecha Llegada</th>
		<th></th>
		<th></th>		
	</tr>
</thead>

<tbody>		
<?php 

foreach ($vuelo as $vuelo) {
?>

	<tr>
		<td><?php echo $vuelo['id_vuelo']; ?></td>
		<td><?php echo $vuelo['origen']; ?></td>
		<td><?php echo $vuelo['destino']; ?></td>
		<td><?php echo $vuelo['npasajeros']; ?></td>
		<td><?php echo $vuelo['fecha_salida']; ?></td>
		<td><?php echo $vuelo['fecha_llegada']; ?></td>
		<td>		
			<?php echo anchor("vuelos/editar/".$vuelo['id_vuelo'], 'Actualizar'); ?>
		</td>
		<td>
			<?php echo anchor("vuelos/eliminar/".$vuelo['id_vuelo'], 'Eliminar'); ?>
		</td>
	</tr>

<?php 
		

}

 ?>
</tbody>
 </table>