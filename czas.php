<?php
    $czas = mktime( 11,14,54,8,12,2014 );
    echo "Created date is " . date( "d.m.Y h:i:sa", $czas);
    $now = mktime(21,37);
    echo "<br> teraz: " . date( "d.m.Y h:i:sa", $now);
?>