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
            <?php
                $i=1;
                foreach($single as $row)
                {
                    $place=$map[0]['title'];
                    echo "<div class='col-sm-12 text-center'>";
                        echo"<h1 class='mt-5 text-danger'>".$row['title']."</h1>";
                    echo "</div>";
                    echo "<div class='col-sm-2'></div>";
                    echo "<div class='col-sm-8 mt-5'>";
                        echo "<img src='".base_url()."upload/".$row['image']."' class='img-fluid w-100' />";
                    echo "</div>";
                    echo "<div class='col-sm-2'></div>";
                    echo "<div class='col-sm-2'></div>";
                    echo "<div class='col-sm-8 text-center'>";
			            echo"<p class='text-dark mt-5'>".$row['des']."</p>";
                    echo "</div>";
                    echo "<div class='col-sm-2'></div>";
                    
                    $i++;
               
                }
            ?>
           
        </div>
    </div>

<div class="containerr-fluid">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 mt-3">
        <div style="width: 100%">
            <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=<?php echo $place."+ jodhpur"; ?>(Your%20Business%20Name)&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.mapsdirections.info/en/measure-map-radius/"></a></div>   </div>
        <div class="col-sm-3"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
            <?php
                $i=1;
                foreach($single as $row)
                {
                   
                   
                    echo "<div class='col-sm-12 text-center mt-3'>";
			        
                        echo "<a href='".site_url('welcome/singleitem/'.$row["id"])."' class='btn btn-primary btn-lg'>Read more</a>&nbsp;&nbsp;"; 
                        echo "<a href='".site_url('welcome/itemmap/'.$row["id"])."' class='btn btn-danger btn-lg'>Navigation</a>&nbsp;&nbsp;";
                        echo "<a href='".site_url('welcome/booknow/'.$row["id"])."' class='btn btn-warning btn-lg'>Book Now</a>&nbsp;&nbsp;";
                    echo "</div>";
                
                    
                    $i++;
               
                }
            ?>
           
        </div>
    </div>

        <div id="map"></div>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDSAMARERY1P_RCTph2A5uaxiCdx1yNCE&callback=initMap&libraries=&v=weekly"
      async
    ></script>
   
    </body>
</html>