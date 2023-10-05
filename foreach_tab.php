<?php
$age = array("Pomidor"=>"12", "Burak"=>"5", "Ziemniak"=>"3", "Marchew"=>"4", "Sałata"=>"10");
echo "Cennik: <br>";
foreach($age as $key => $val){
    echo "$key = $val zł/kg <br>";
}
?>