<h2>Lista de Categorias</h2>
<div class="row">
	<div class="col-md-12">
		<table class="table table-hover">
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Action</th>
			</tr>
			<?php foreach ($categories as $category ): ?>
		    <tr>
				    <td><?php echo $category['id']; ?></td>
				    <td><?php echo $category['name']; ?></td>
				    <td>
				        	<a href="<?php echo APP_URL; ?>categories/edit/<?php echo $category["id"]; ?>">Editar</a>
				    		<a href="<?php echo APP_URL; ?>categories/delete/?id=<?php echo $category['id']; ?>">ELiminar</a>
				    </td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>
        <a href="<?php echo APP_URL;?>categories/add/<?php echo $user['id']; ?>"><button>Agregar</button></a>