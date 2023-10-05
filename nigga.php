<?php

$napoje = array("Cola"=>"7", "Woda"=>"2", "Kawa"=>"10");
echo "<table border='1, red'>";
foreach ($napoje as $key => $val) {
    echo "<tr><td>$key <td>$val zł <br>";
}
echo "<table>";
?>