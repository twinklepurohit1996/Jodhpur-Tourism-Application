<!DOCTYPE html>
<html>
    <head>
        <title>Popular Places</title>
        <?php include("link.php") ?>
    </head>
    <body>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 p-0">
                    <nav class="navbar navbar-expand-lg bg-light navbar-light">
                        <a href="#" class="navbar-brand text-primary">Welcome to Blue City </a>
					    <ul class="navbar-nav ml-auto">
						    <li class="navbar-item"><a href="#" class="nav-link">SIGN IN</a></li>
					    </ul>
                    </nav>
                </div>
            </div>
        </div>  

        <div class="container-fluid">  
            <div class="row">
                <div class="col-sm-2">
                <a href="<?php echo site_url('Welcome/showall') ?>" class="text-center mt-5 display-2 text-primary">Popular Places</a>				    <table class="table bordered">
					    <?php
						    foreach($_SESSION['result'] as $res)
						    {
							    echo "<a href=".site_url('Welcome/showcat/'.$res['cate_id'])." class='btn-block btn-light mt-4 text-danger'>".$res['cate_name']."</a>";
					    	}
					    ?>
				    </table>
                </div>
                <div class="col-sm-8">

                <div class="row">
            <?php
                $i=1;
                foreach($popular as $row)
                {
                    
                    echo "<div class='col-sm-1'></div>";
                    echo "<div class='col-sm-4 card'>";
                        echo "<img src='".base_url()."upload/".$row['image']."' class='img-fluid w-100' />";
                    echo "</div>";
               
                    echo "<div class='col-sm-6'>";
                        echo"<h1 class='mt-5'>".$row['title']."</h1>";
			            echo"<p class='text-dark text-justify'>".$row['des']."</p>";
                        echo "<a href='".site_url('welcome/singleitem/'.$row["id"])."' class='btn btn-primary btn-lg'>Read more</a>&nbsp;&nbsp;"; 
                        echo "<a href='".site_url('welcome/itemmap/'.$row["id"])."' class='btn btn-danger btn-lg'>Navigation</a>&nbsp;&nbsp;";
                        echo "<a href='".site_url('welcome/booknow/'.$row["id"])."' class='btn btn-warning btn-lg'>Book Now</a>&nbsp;&nbsp;"; 
                    echo "</div>";
                    echo "<div class='col-sm-1'></div>";
                    
                    $i++;
               
                }
            ?>
        <div class="col-sm-1"></div>
    </div>                </div>
            </div>
        </div>

        </div>
    <body>
</html>