<?php

function min(&$liczby){
    sort($liczby);
    $a= $liczby[0];
    return $a;
}

 echo min(2,4,3,1,5);
?>