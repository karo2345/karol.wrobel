<?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "Tablica przed sortowaniem: <br> ";
    var_dump( $cars );

    sort( $cars );
    echo "<br><br>Tablica po sortowaniu: <br> ";
    var_dump( $cars );
    
    rsort( $cars );
    echo "<br><br>Tablica po sortowaniu odwrotnym: <br> ";
    var_dump( $cars );
?>