<!DOCTYPE html>
<html>
<head>
	<title>Verification Page</title>
	<?php include("link.php"); ?>
</head>
<body>

	<nav class="navbar navbar-expand-lg bg-primary navbar-light">
		<div class="navbar-brand"> Verification </div>
		<div class="ml-auto">
			
		</div>
    </nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<?php echo form_open("welcome/"); ?>
				
					<div class="form-group">
						<label>Verification Code</label>
						<input type="text" name="xcode" class="form-control" placeholder="Enter your value">
					</div>
					<div class="text-center">
							<button type="submit" name="check" class="btn btn-danger">Check Code</button>
					</div>
				
				<?php form_close(); ?>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>         
</body>
</html>