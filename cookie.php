<?php
#// ustawienie cookie o ważności 1-go dnia

setcookie("imie","john", time()-3600);
$cookie_name="imie";
if (!isset($_COOKIE[$cookie_name])){
    echo "cookie named '". $cookie_name . "' is not set!"; 
} else {
    echo "Cookie'". $cookie_name . "' is set!<br>";
    echo "Value is:". $_COOKIE[$cookie_name];
}
?>