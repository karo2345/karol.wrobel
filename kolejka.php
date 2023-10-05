<?php
    $queue=["BMW","Volvo"];
        echo "Kolejka: ";
    var_dump( $queue );
        echo "<br>Dodajemy element na koniec<br>";
    array_push( $queue, "Toyota");
    var_dump( $queue );
    echo "usuwamy pierwszy element<br>";

    $deleted = array_shift( $queue );
    var_dump( $queue );
    echo "<br>Usunięty element: ". $deleted;
?>