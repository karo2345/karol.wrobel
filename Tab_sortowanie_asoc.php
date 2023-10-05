<?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Gargulec"=>"43");

    asort($age); // sort associative arrays in ascending roder,
                 // according to the value; arsort()->reverse
                 // output:
                 // Key=Peter, value=35
                 // Key=Ben, value=37
                 // Key=Gargulec, value=43

    ksort($age); // sort associative arrays in ascending order,
                 // according to the key; krsort()->reverse
                 // Key=Ben, value=37
                 // Key=Gargulec, value=43
                 // Key=Peter, value=35
?>

<?php //array_pop()
    $a=array("red", "green", "blue");
    array_pop($a);
    print_r($a)"<br>";
?>

<?php
    $cars=["Bmw","Audi","Volvo"];
        echo "tablica: ";
    var_dump( $cars );
        echo "<br>Usuwamy ostatni element";
    $deleted = array_pop( $cars );
    var_dump( $cars );
        echo "<br>Usunięty element: ";
    echo $deleted;
?>