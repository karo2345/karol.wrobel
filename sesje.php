<?php
session_start();
echo "welcome to page #1";

$_SESSION['favcolor'] = 'blue';
$_SESSION['animal'] = 'dog';
$_SESSION['time'] = time();

echo '<br>/><a href="session2.php">page 2</a';

?>