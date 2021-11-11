<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">User <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="username">Username <?php echo form_error('username') ?></label>
            <textarea class="form-control" rows="3" name="username" id="username" placeholder="Username"><?php echo $username; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="password">Password <?php echo form_error('password') ?></label>
            <textarea class="form-control" rows="3" name="password" id="password" placeholder="Password"><?php echo $password; ?></textarea>
        </div>
	    <input type="hidden" name="id_user" value="<?php echo $id_user; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('user') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>