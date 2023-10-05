
<?php
$myfile = fopen("newfile.txt", "w")
        or die("unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>