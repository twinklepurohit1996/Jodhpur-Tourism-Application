
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
        <div class="navbar-brand"><h2>Show Categories</h2></div>
    </nav>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <a href="<?php echo site_url('Admin/newcate'); ?>" class="btn btn-block btn-light">Add Categrios</a>
            <a href="<?php echo site_url('Admin/showcate');  ?>" class="btn btn-block btn-light">Show Categries </a>
            <a href="<?php echo site_url('Admin/additem');  ?>" class="btn btn-block btn-light">Add Item</a>
            <a href="<?php echo site_url('Admin/showitem');  ?>" class="btn btn-block btn-light">Show Items</a>
        </div>
        <div class="col-sm-9">
        <h3 class="text-center text-danger">All Categories</h3>
                    <table class="table bordered">
                        <?php
                        $i=1;
                            foreach($res as $row)
                            {
                                $delpath="Admin/Del/".$row['cate_id'];
                                $editpath="Admin/Edit/".$row['cate_id'];
                                echo "<tr><td>".$i."</td>
                                          <td>".$row['cate_name']."</td>
                                          <td><a href='".site_url($delpath)."' /><i class='fa fa-trash'></i></a></td>
                                          <td><a href='".site_url($editpath)."' /><i class='fa fa-edit'></i></a></td>
                                      </tr>";
                                $i++;
                            }

                        ?>
                    </table>
        
        </div>
    </div>
</div>
</body>
</html>

