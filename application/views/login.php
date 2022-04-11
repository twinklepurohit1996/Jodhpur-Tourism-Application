<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<?php include("link.php"); ?>
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<h1 class="text-center p-5">Login Page</h1>

				<?php echo form_open("Welcome/login"); ?>
					<div class="form-group">
						<label>User Name</label>
						<input type="text" name="xemail" class="form-control" placeholder="Enter Email or Mobile Number">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="xpass" class="form-control" placeholder="Password">
					</div>

					<div class="text-center">
						<a href="<?php echo site_url('Welcome/forgetPassword'); ?>">Forget Password!!!</a>
					</div>
					<div class="text-center p-3">
						<button type="submit" name="xlog" class="btn btn-danger">Login</button>
					</div>
				<?php form_close(); ?>
				<div class="text-center">
					<a href="<?php echo site_url('Welcome/newUser'); ?>">I'm New User</a>
				</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div> 
          
</body>
</html>