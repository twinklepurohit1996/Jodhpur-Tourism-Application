<!DOCTYPE html>
<html>
<head>
	<title>Payment Page</title>
	<?php include("link.php"); ?>
</head>
<body>
    <div class="jumbotron">
        <h1 class="text-center bg-danger navbar-light">Payment Gateway</h1>
	</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <h3>Your Booking Done , Do Payment Method!!!!</h3>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Payment Details</h3>
                    </div>
                <div class="panel-body">
                <?php echo form_open("Welcome/paydone"); ?>
                    <div class="form-group mt-3">
                        <label for="cardNumber">CARD NUMBER</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number" required autofocus />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="expityMonth">EXPIRY DATE</label>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
                                </div>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityYear" placeholder="YY" required /></div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">CV CODE</label>
                                <input type="password" class="form-control" id="cvCode" placeholder="CV" required />
                            </div>
                        </div>
                    </div>
                    <?php form_close(); ?>
                </div>
            </div>
            <br/>
            <a href="#" class="btn btn-warning btn-lg btn-block" role="button">4200 Final Payment</a>
            <a href="#" class="btn btn-success btn-lg btn-block" role="button">Pay</a>

        </div>
    </div>
</div>
</body>
</html>