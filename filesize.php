<?php
    // output e.g. somefile.txt: 1024 bytes

    $filename = 'nowy.txt';
    echo $filename . ": " . filesize($filename) . " bytes";
?>