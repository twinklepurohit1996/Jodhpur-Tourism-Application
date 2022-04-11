<!DOCTYPE html>
<html>
<head>
	<title>OTP Page</title>
	<?php include("link.php"); ?>
</head>
<body>

	<div class="jumbotron">
		<h1 class="text-center bg-danger navbar-light">Verification Code</h1>
	</div>


	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<?php echo form_open("Welcome/otpcodeh"); ?>
				<div class="form-group p-5">
						<label>Verification Code</label>
						<input type="text" name="xcode" class="form-control" placeholder="Enter your value">
					</div>
					<div class="text-center">
						<button type="submit" name="xcheck" class="btn btn-primary">Check</button>
					</div>
				<?php form_close(); ?>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>            
</body>
</html>