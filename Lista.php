<?php
    echo "<h3>Drink</h3>";
    echo "
    <ol>
    <li>Coffee</li>   
    <li>Tea
        <ul>
            <li>Black tea</li>
            <li>Green tea</li>
        </ul
    </li>
    <li>Milk</li>
    </ol>";
    
?>

<?php
$txt1 = "Drink";
$txt2 = "Coffee";
    print "<h3>" . $txt1 ."</h3>";
    print "
    <ol>
    <li>". $txt2 ."</li>
    <li>Tea
        <ul>
            <li>Black tea</li>
            <li>Green tea</li>
        </ul
    </li>
    <li>Milk</li>
    </ol>";
    
?>

<?php
    $Naglowek = "<h3>Drink</h3>";
    $lista = "
    <ol>
    <li>Coffee</li>
    <li>Tea
        <ul>
            <li>Black tea</li>
            <li>Green tea</li>
        </ul
    </li>
    <li>Milk</li>
    </ol>";
    print $Naglowek;
    print $lista;    
?>