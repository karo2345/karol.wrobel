<?php
    $cars=["Bmw","Audi","Volvo"];
        echo "tablica: ";
    var_dump( $cars );
        echo "<br>Usuwamy pierwszy element<br>";
    $deleted = array_shift( $cars );
    var_dump( $cars );
        echo "<br>Usunięty element: ";
    echo $deleted;
?>
