<!DOCTYPE html>
<html>
    <head>
    <title>Popular Places</title>
        <?php include("link.php") ?>
    </head>
    <body>
 



    <div id="map"></div>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <iframe src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyDDSAMARERY1P_RCTph2A5uaxiCdx1yNCE&origin=Oslo+Norway&destination=Telemark+Norway&avoid=tolls|highways"></iframe> 
    
    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=<?php echo $place."+ jodhpur"; ?>(Your%20Business%20Name)&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.mapsdirections.info/en/measure-map-radius/"></a></div>
    </body>
</html>