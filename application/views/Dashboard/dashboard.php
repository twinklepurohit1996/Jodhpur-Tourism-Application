<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<?php include("link.php"); ?>
	</head>
<body>

<div class="container-fluid p-0">
    <div class="row">
    <nav class="navbar navbar-info bg-light">
        <div class="navbar-brand"><h2>Dashboard</h2></div>
    </nav>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <a href="<?php echo site_url('Admin/newcate'); ?>" class="btn btn-block btn-light">Add Categrios</a>
            <a href="<?php echo site_url('Admin/showcate');  ?>" class="btn btn-block btn-light">Show Categries </a>
            <a href="<?php echo site_url('Admin/additem');  ?>" class="btn btn-block btn-light">Add Item</a>
            <a href="<?php echo site_url('Admin/showitem');  ?>" class="btn btn-block btn-light">Show Items</a>
            <a href="<?php echo site_url('Admin/item');  ?>" class="btn btn-block btn-light">Items</a>
        </div>
        <div class="col-sm-9">
        
        
        </div>
    </div>
</div>
</body>
</html>
