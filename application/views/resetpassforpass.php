
<!DOCTYPE html>
<html>
<head>
	<title>Reset password</title>
	<?php include("link.php"); ?>
</head>
<body>
	<div class="jumbotron">
		<h1 class="text-center">Reset Password</h1>
	</div>
	
	<div class="conatiner-fluid">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<?php echo form_open("welcome/resetpass"); ?>
				<div class="form-group p-5">
					<label>Enter New Password:</label>
					<input type="password" name="npass" class="form-control">
				</div>
				<div class="form-group">
					<label>Re-Enter New Password:</label>
					<input type="password" name="rpass" class="form-control">
				</div>
				<div class="p-3">
					<button type="submit" class="btn btn-primary" name="resetpass">Reset Password</button>
				</div>
				<?php form_close(); ?>
			</div>
			<div class="col-sm-2"></div>
		</div>
	</div>
</body>
</html>