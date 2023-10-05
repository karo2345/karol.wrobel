<?php
    $cars=["Bmw","Audi","Volvo"];
        echo "tablica: ";
    var_dump( $cars );
        echo "<br>Usuwamy ostatni element<br>";
    $deleted = array_pop( $cars );
    var_dump( $cars );
        echo "<br>Usunięty element: ";
    echo $deleted;
?>