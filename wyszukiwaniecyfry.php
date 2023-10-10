<?php  
$wzorzec ='/\d/';
$tekst = "mam 4 zeszyty";
if(preg_match($wzorzec, $tekst))
echo "znaleziono cyfre";
else
    echo "nie znaloziono cyfre";
echo "znie znaleziono cyfre"; 
?>