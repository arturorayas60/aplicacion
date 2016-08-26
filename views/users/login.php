<article style="margin-top: 10em; padding:25px; ">
<h2 class="center">Inicio de sesion</h2>
<div class="row">
		<form class="form-inline" action="<?php echo APP_URL; ?>users/login" method="POST">
			  <div class="form-group">
			     <label for="exampleInputName2"></label>
    				<input type="text" class="form-control" id="exampleInputName2" placeholder="Username" name="username">
			  </div>
			  <div class="form-group">
			    <label class="sr-only" for="exampleInputPassword3">Contraseña</label>
			    <input type="password" class="form-control" id="exampleInputPassword3"  placeholder="Password" name="password">
			  </div>
			  <div class="checkbox">
			    <label>
			      <input type="checkbox"> Recordar contraseña
			    </label>
			  </div>
			  <button type="submit" class="btn btn-primary">Iniciar sesion</button>	
			</form>
		</div>
	</div>
</div>
</article>