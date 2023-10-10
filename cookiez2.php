<?php
setcookie("auto", "", time()-3600 );
$cookie_name = "auto";
if (!isset($_COOKIE[$cookie_name])) {
    echo "Ciasteczko o nazwie '" . $cookie_name . "' nie jest ustawione!";
} else {
    echo "Ciasteczko '" . $cookie_name . "' jest ustawione!<br>";
    echo "Wartość to: " . $_COOKIE[$cookie_name];
}



?>
