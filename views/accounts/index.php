<h2><br>Cuentas</h2>
<div class="row">
	<div class="col-md-12" >
		<table class="table table-hover">
			<tr>
				<th>ID</th>
				<th>ID del Usuario</th>
				<th>Nombre</th>
				<th>action</th>
			</tr>
			<?php foreach ($accounts as $account): ?>
			<tr>
				<td><?php echo $account['id']; ?></td>
				<td><?php echo $account['user_id']; ?></td>
				<td><?php echo $account['name']; ?></td>
				<td>
					<a href="<?php echo APP_URL; ?>accounts/edit/<?php echo $account["id"]; ?>">Editar</a>
					<a href="<?php echo APP_URL; ?>accounts/delete/?id=<?php echo $account['id']; ?>">Eliminar</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>

<a	href="<?php echo APP_URL;?>accounts/add/<?php echo $user['id']; ?>"><button>Agregar</button></a>