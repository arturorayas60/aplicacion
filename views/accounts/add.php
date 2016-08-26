<h2>Agregar Account</h2>
<div class="row">
	<div class="col-md-12">
		<form action="<?php echo APP_URL; ?>accounts/add" method="POST">
			<div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail3" placeholder="Account name">
            </div>
            <select name="user_id" style="padding:10px 50px 10px 50px;">
				<?php foreach ($users as $user):?>
					<option value="<?php echo($user["id"]); ?>">
						<?php echo($user["username"]); ?>
					</option>
				<?php endforeach;?>
		</select>
            <button type="submit" class="btn btn-default" style="padding:5px 100px 5px 100px; float:right;"> Submit</button>
		</form>
	</div>
</div>
