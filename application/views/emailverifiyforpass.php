<!DOCTYPE html>
<html>
<head>
	<title>Email Verification for Password</title>
	<?php include("link.php"); ?>
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-primary navbar-light">
		<div class="navbar-brand"> Forget Password Verification </div>
		<div class="ml-auto">
			
		</div>
    </nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<?php echo form_open("welcome/verifyemail"); ?>
			
					<div class="form-group">
						<label>Enter Your Email</label>
						<input type="text" name="xemail" class="form-control" placeholder="xyz@gamil.com">
					</div>
					<div class="text-center">
						<button type="submit" name="check" class="btn btn-danger">Verify Email</button>
					</div>
				<?php form_close(); ?>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
</body>
</html>