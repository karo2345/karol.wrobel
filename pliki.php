<?php
$myfile=fopen("nowy.txt","w")or die ("unable to open file!");
    $txt="kot\n";
    fwrite($myfile,$txt);
fclose($myfile);

$myfile=fopen("nowy.txt","r")or die ("unable to open file!");
    echo fread($myfile,filesize("nowy.txt"));
fclose($myfile);
?>
