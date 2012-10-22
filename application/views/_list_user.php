


<h1><a class = "btn" type = "link" href = "/agencia_vuelos/index.php/usuario/nuevo">Insertar un nuevo Usuario</a><h1>

<table class="table table-striped table-condensed" >
<thead>
	<tr>
		<th>Cedula</th>
		<th>Nombre</th>
		<th>C.I</th>
		<th>Edad</th>
		<th>date</th>
		<th></th>
		<th></th>		
	</tr>
</thead>

<tbody>		
<?php 

foreach ($usuarios as $usuario) {
?>

	<tr>
		<td><?php echo $usuario['cedula']; ?></td>
		<td><?php echo $usuario['nombre']; ?></td>
		<td><?php echo $usuario['edad']; ?></td>
		<td><?php echo $usuario['email']; ?></td>
		<td><?php echo $usuario['pass']; ?></td>
		<td>		
			<?php echo anchor("usuario/editar/".$usuario['cedula'], 'Actualizar'); ?>
		</td>
		<td>
			<?php echo anchor("usuario/eliminar/".$usuario['cedula'], 'Eliminar'); ?>
		</td>
	</tr>

<?php 
		

}

 ?>
</tbody>
 </table>