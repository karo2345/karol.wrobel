<?php
    $foo = 'Bob'; // Assign value 'Bob' to $foo
    $bar = &$foo; // Reference $foo via $bar
    $bar = 'Andy';
    echo $bar;
    echo $foo; // $foo is altered too
?>
