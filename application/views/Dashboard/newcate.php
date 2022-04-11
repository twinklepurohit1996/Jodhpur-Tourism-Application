<?php
if(isset($editPage) && $editPage==True)
{
    $but="Update";
    $path="Admin/cate_update";
    $value=$eres[0]['cate_name'];
    $xid=$eres[0]['cate_id'];
}
else
{
    $but="Add Categories";
    $path="Admin/insertCat";
    $value="";
    $xid=$res[0]['cate_id'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>New Categories</title>
	<?php include("link.php"); ?>
	</head>
<body>

<div class="container-fluid p-0">
    <div class="row">
    <nav class="navbar navbar-info bg-light">
        <div class="navbar-brand"><h2>New Categories</h2></div>
    </nav>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <a href="<?php echo site_url('Admin/newcate');  ?>" class="btn btn-block btn-light"> Categrios</a>
            <a href="<?php echo site_url('Admin/showcate');  ?>" class="btn btn-block btn-light">Show Categries </a>
            <a href="<?php echo site_url('Admin/additem');  ?>" class="btn btn-block btn-light">Add Items</a>
            <a href="<?php echo site_url('Admin/showitem');  ?>" class="btn btn-block btn-light"> Show Items</a>
        </div>
        <div class="col-sm-9">
            <h3 class="text-center text-danger"> Add New Categries</h3>
            <div class="row">
                <div class="col-sm-8">
                <?php echo form_open($path); ?>
                <input type="hidden" value="<?php echo $xid; ?>" name="xid" />
                    <label> Under Categries </label>
                    <select class="form-control" name="under_cate">
                    <option> Select Main Categires </option>
                    <?php
                    $rr=$res;
                    
                    foreach($rr as $r)
                    {
                        echo "<option value='".$r['cate_id']."'>".$r['cate_name']."</option>";
                    }

                    ?>
                    </select>
                        <label> New Categries </label>
                        <input type="text" name="xcate" class="form-control" value="<?php echo $value; ?>">
                        <br/>
                        <input type="submit" name="xsub" class="btn btn-danger" value="<?php echo $but; ?>">
                <?php echo form_close(); ?>
                </div>
            </div>    
           
         </div>
    </div>
</div>
</body>
</html>
