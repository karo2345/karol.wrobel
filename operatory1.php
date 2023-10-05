<?php
    $a = 3;
    $b = &$a;

    print "$a\n"; // wypisuje 3
    print "$b\n"; // wypisuje 3

    $a = 4; // zmienia $a

    print "$a\n"; // wypisuje 4
    print "$b\n"; // wypisuje 4
?>