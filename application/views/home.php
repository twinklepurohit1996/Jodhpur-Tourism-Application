<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<?php include("link.php"); ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-secondary navbar-light">
		<div class="navbar-brand"><img src="<?php echo base_url()."/upload/".$this->session->userdata('image'); ?>" width=75 height=75/> Welcome to Home Page </div>
		<div class="ml-auto">
			<a href="<?php echo site_url('Welcome/Logout'); ?>">Log Out </a>
		</div>
    </nav>
    <div class="container">
    	<div class='row mt-5'>
    		<div class="col-sm-3"></div>
    		<div class="col-sm-6">
                <?php
                    $cls="alert alert-danger";
                    $mess="Email Address Verify";
                    if($this->session->userdata("Vemail")==1)
                    {
                        $cls="alert alert-success";
                        $mess="Your Email is Verified";
                    }
                ?>
    			<div class='<?php echo $cls; ?>'> 
                    <a href="<?php echo site_url('Welcome/EmailVerify');?>">
                    <i class='fa fa-yes'></i><?php echo $mess; ?></a>
                </div>
            </div>
    		<div class="col-sm-3"></div>
    	</div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <h1 class="text-center p-5">Booking Form</h1>
                <?php 
                   echo "<h3 class='text-center text-danger'> Booking for ".$place[0]['title']." </h3>";
                   
                   echo "<h4> Booking by :".$_SESSION['email']." </h4>";                    
                ?>
				<?php echo form_open_multipart('Welcome/booking');?>
                    <div class="form-group">
					    <label>Date</label>
					    <input type="date" name="date" class="form-control" placeholder="Enter Your Date">
				    </div>
				    <div class="form-group">
					    <label>Time</label>
					    <input type="time" name="time" class="form-control" placeholder="Enter Your Time">
				    </div>
                    <div class="text-center p-5">
					    <input type="submit" class="btn btn-warning">
				    </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>            
          

</body>
</html>