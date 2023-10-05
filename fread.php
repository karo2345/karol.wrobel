<?php
    $myfile = fopen("nowy.txt", "r")
                or die("unable to open file!");
    echo fread($myfile,filesize("nowy.txt"));
    fclose($myfile);
?>