<?php
    function setHeight(int $minheight = 50){
        echo "The height is: $minheight <br>";
    }

    setHeight(350);
    setHeight(); // will use the default value of 50;
?>