<h2>Agregar Usuario</h2>
<div class="row">
	<div class="col-md-12">
		<form action="<?php echo APP_URL; ?>users/add" method="POST">
			<div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail3" placeholder="Usuario">
            </div>
            <div class="form-group">
				<label for="new_password">Password:</label>
                <input type="password" name="new_password" class="form-control" id="exampleInputEmail3" placeholder="New Password">
            </div>
            <div class="form-group">
				<label for="username">Rol:</label>
                <input type="text" name="rol" class="form-control" id="exampleInputEmail3" placeholder="Admin/Invitado">
            </div>
            <button type="submit" class="btn btn-default" style="padding:5px 100px 5px 100px; float:right;"> Submit</button>
		</form>
	</div>
</div>