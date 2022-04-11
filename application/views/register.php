<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<?php include("link.php"); ?>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<h1 class="text-center p-5">Registration Page</h1>
				
				<?php if(isset($error)) var_dump($error); ?>
				 <?php echo form_open_multipart('Welcome/registration');?>

					<div class="form-group">
						<label>User Name</label>
						<input type="text" name="uname" class="form-control" placeholder="Enter Your UserName">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control" placeholder="Enter Your Email">
					</div>
					<div class="form-group">
						<label>Mobile Number</label>
						<input type="text" name="mobile" class="form-control" placeholder="Enter Your Mobile Number">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pass" class="form-control" placeholder="Enter the Password">
					</div>
					<div class="form-group">
						<label>confirm Password</label>
						<input type="password" name="cpass" class="form-control" placeholder="Enter the Password">
					</div>
					<div class="form-group">
						<label>File Upload</label>
						<input type="file" name="xfile" class="form-control">
					</div>
					<div class="form-group">
						<label><?php echo $cap['image']; ?></label>
						<input type="text" name="xcap" class="form-control" Placeholder="Captcha Write Here"/>
					</div>	
					

					<div>
						<a href="<?php echo site_url('Welcome/already'); ?>" >I'm already member!!</a>
					</div>	
					
					<div class="text-center p-5">
					<input type="submit" class="btn btn-primary">
					</div>
				<?php form_close(); ?>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
</body>
</html>