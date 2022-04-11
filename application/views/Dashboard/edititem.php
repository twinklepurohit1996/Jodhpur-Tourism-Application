
<!DOCTYPE html>
<html>
<head>
	<title>Add Items</title>
	<?php include("link.php"); ?>
</head>
<body>

<div class="container-fluid p-0">
    <div class="row">
    <nav class="navbar navbar-info bg-light">
        <div class="navbar-brand"><h2>Additem</h2></div>
     </div>
</div>
<div class="row">
        <div class="col-sm-3">
     
            <a href="<?php echo site_url('Admin/newcate');  ?>" class="btn btn-block btn-light">Add Categrios</a>
            <a href="<?php echo site_url('Admin/showcate');  ?>" class="btn btn-block btn-light">Show Categries </a>
            <a href="<?php echo site_url('Admin/additem');  ?>" class="btn btn-block btn-light">Add Item</a>
            <a href="<?php echo site_url('Admin/showitem');  ?>" class="btn btn-block btn-light">Show Items</a>
           
        </div>
        <div class="col-sm-9">
            <h3 class="text-center text-danger">Add New Categries</h3>
            <div class="row">
            <?php// print_r($c_res); ?>
            <br/><br/>
            <?php// print_r($item_res); ?>
            <br/><br/>
            <?php //print_r($res); ?>
                <div class="col-sm-8">
                <img src="<?php echo base_url().'/upload/'.$item_res[0]['image']; ?>" width="100" height=100 />
                <?php echo form_open_multipart("Admin/item_update"); ?>
                <input type="hidden" name="xid" value="<?php echo $item_res[0]['id']; ?>"/>      
        
                <label> Under Categries </label>
                    <select class="form-control" name="cate_id">
                    <option> Select Main Categires </option>
                    <?php
                    $rr=$res;
                    
                    foreach($rr as $r)
                    {
                        if($r['cate_id']==$item_res[0]['cate_id'])
                        echo "<option  selected='selected' value='".$r['cate_id']."'>".$r['cate_name']."</option>";
                        else
                        echo "<option  value='".$r['cate_id']."'>".$r['cate_name']."</option>";
                    }

                    ?>
                    </select>
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="<?php echo $item_res[0]['title'];?>">
                        <br/>
                        <label>Description</label>
                        <textarea rows=7 cols=40 name ="des" class="form-control"><?php echo $item_res[0]['des'];?></textarea>
                        <br/>
                        <label>Image</label>
                        <input type="file" name="image" class="form-control"  value="">
                        <br/>
                        <label>Longitude</label>
                        <input type="text" name="long" class="form-control" value="<?php echo $item_res[0]['long']; ?>">
                        <br/>
                        <label>Latitude</label>
                        <input type="text" name="lati" class="form-control" value="<?php echo $item_res[0]['lati']; ?>" >
                        <br/>
                        <input type="submit" name="xsub" class="btn btn-danger"  >
                <?php echo form_close(); ?>
                </div>
            </div> 
        </div>   

</body>
</html>