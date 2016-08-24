<div class="row" style="margin:0 auto;">
    <div class="col-md-12" style ="border-radius:5px; border:1px solid #232323; padding:10px;" >
        <form action="<?php echo APP_URL; ?>users/edit" method="POST" >
            <input type="hidden" name="id" value="<?php echo $users["id"]; ?>">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail3" value="<?php echo $users["username"]; ?>">
            </div>
            <div class="form-group">
                <label for="new_password">Password</label>
                <input type="password" name="new_password" class="form-control" id="exampleInputEmail3" placeholder="New Password">
            </div>
            <div class="form-group">
                <label for="rol">ROL:</label>
                <input type="text" name="rol" class="form-control" id="exampleInputEmail3" value="<?php echo $users["rol"]; ?>">
            </div>
            <button type="submit" class="btn btn-default" style="padding:5px 100px 5px 100px; float:right;"> Submit</button>
        </form>
    </div>
</div>


