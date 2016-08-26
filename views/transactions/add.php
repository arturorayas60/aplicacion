
<div class="col-md-12">
	<h2><br>Add Transaction</h2>
	<form action="<?php echo APP_URL; ?>transactions/add" method="POST" style="border:1px solid #232323; padding:10px; border-radius:5px;">
		<p>	
			<select name="account_id" style="padding:10px 50px 10px 50px;">
	                  <option value="" disabled selected>Elige la cuenta</option>
	                    <?php foreach ($accounts as $account): ?>
	                  <option value="<?php echo $account["id"]; ?>"> <?php echo $account["name"]; ?></option>
	                    <?php endforeach; ?>
	        </select>
		

			<select name="category_id" style="padding:10px 50px 10px 50px;">
				<option value="" disabled selected>Elige la categoria</option>
				<?php foreach ($categories as $category):?>
					<option value="<?php echo($category["id"]); ?>">
						<?php echo($category["name"]); ?>
					</option>
				<?php endforeach;?>
			</select>
		</p>
		</p>
			<label for="description">Descripcion:</label>
			<textarea class="form-control" rows="3" name="description"></textarea>
		</p>
		<p>
			<label for="amount">Amount</label>
			<div class="input-group" style="width:50%;">
		      <div class="input-group-addon">$</div>
		      	<input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount" name="amount">
		      <div class="input-group-addon">.00</div>
		    </div>
		</p>
		<p>
			<label for="date">Date:</label>
			<input type="date" class="form-control" name="date">
		</p>
		<p>
			<input type="submit" value="Save" style="padding:5px 100px 5px 100px; ">
		</p>

	</form>
</div>