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

    <div id="map"></div>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDSAMARERY1P_RCTph2A5uaxiCdx1yNCE&callback=initMap&libraries=&v=weekly"
      async
    ></script> 
    <div class="container-fluid">
    <div class="row">
            <?php
            $place=$map[0]['title'];
                    echo "<div class='col-sm-12 text-center'>";
                        echo "<h1 class='mt-5'>$place</h1>";
                    echo "</div>";
                    
            ?>
    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=<?php echo $place."+ jodhpur"; ?>(Your%20Business%20Name)&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.mapsdirections.info/en/measure-map-radius/"></a></div>
        <a href="<?php echo site_url('Welcome/maap'); ?>">Map New Page</a>
    </body>
</html>