<?php
$servername="localhost";
$user="root";
$password="";
$database="baza20";
$conn = mysqli_connect($servername, $user, $password, $database);

if(!$conn){
	die("Nie udalo sie polaczyc" . mysqli_error($conn));
}

$data=$_POST["data"];
$osob=$_POST["osob"];
$telefon=$_POST["telefon"];

$sql="INSERT INTO rezerwacje(data_rez, liczba_osob, telefon) VALUES ($data, $osob, $telefon)";

if(mysqli_query($conn, $sql)){
	echo "Dodano rezerwacje do bazy";
} else {
	echo "error " .mysqli_error($conn);
};
mysqli_close($conn);
?>