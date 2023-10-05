<?php
$wzorzec = '/\d/';
$tekst = "mam 4 zeszyty";
if(preg_match( $wzorzec, $tekst ) )
    echo "znalezniono cyfrę";
else
    echo "nie znaleziono cyfrę";