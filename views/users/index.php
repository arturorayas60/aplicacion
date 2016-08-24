<h2>Listado de usuarios</h2>

<div class="table-responsive">
  <table class="table table-hover">
    <tr>
		<th>id</th>
		<th>Usuario</th>
		<th>Rol</th>
		<th>Acciones</th>
	</tr>
	<?php foreach($users as $user ): ?>
	<tr>
		<td><?php echo $user['id']; ?></td>
		<td><?php echo $user['username']; ?></td>
		<td><?php echo $user['rol']; ?></td>
		<td>
			<a href="<?php echo APP_URL;?>users/edit/<?php echo $user['id']; ?>" >Editar</a>
			<a href="<?php echo APP_URL;?>users/delete/<?php echo $user['id']; ?>">Eliminar</a>
		</td>
	</tr>
	<?php endforeach; ?>
  </table>
</div>
			<a	href="<?php echo APP_URL;?>users/add/<?php echo $user['id']; ?>"><button>Agregar</button></a>
