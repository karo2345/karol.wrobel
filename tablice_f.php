<?php
   $square=array("bmw","Volvo");
   echo "kolejka: ";
   var_dump($square);
   echo"<br>dodaj element na koniec<br>";
   array_push($square,"Toyota");
   var_dump($square);
   echo"Usun pierwszy element <br>";

   $deleted=array_shift($square);
   var_dump($square);
   echo "<br>usuniety element to: ".$deleted;
   
?> 