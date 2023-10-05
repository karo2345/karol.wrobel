<?php
    $start_date = date( "06.05.2024");  
    echo "Data Matury: ". $start_date . "<br>";
    $date = strtotime($start_date);
    $date = strtotime("-100 day", $date);
    echo "Data studniówki: " . date('d.m.Y', $date);
?>