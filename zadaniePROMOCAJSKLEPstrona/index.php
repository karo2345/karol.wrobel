<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Sklep dla uczniów</title>
</head>
<body>
    <section id="baner">
        <h1>Dzisiejsze promocje naszego sklepu</h1>
       
</section>

    <section id="lewy">
        <h2>Taniej o 30%</h2>
        <ol id="lista-towarow">
        <?php

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "sklep";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}


$query1 = "SELECT nazwa FROM towary WHERE promocja = 1";
$result1 = $conn->query($query1);

if ($result1->num_rows > 0) {
    echo "<ol type='a'>";
    while ($row = $result1->fetch_assoc()) {
        echo "<li>" . $row["nazwa"] . "</li>";
    }
    echo "</ol>";
    } else {
        echo "Brak danych do wyświetlenia";
    }
    $conn->close();
?>
        </ol>
    </section>







    <section id="srodkowy">
        <h2>Sprawdź cenę</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="towar">Wybierz towar:</label>
            <select name="towar" id="towar">
                <option value="Gumka do mazania">Gumka do mazania</option>
                <option value="Cienkopis">Cienkopis</option>
                <option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
                <option value="Markery 4 szt.">Markery 4 szt.</option>
            </select>
            <input type="submit" Value="SPRAWDZ"></button>
        </form>
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sklep";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}
?>



<div id="wynik">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedProduct = $_POST["towar"];

        $sql = "SELECT cena FROM towary WHERE nazwa = '$selectedProduct'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $regularPrice = $row["cena"];
            $discountedPrice = $regularPrice * 0.70;

            echo "<p>Cena regularna: $regularPrice zł</p>";
            echo "<p>Cena w promocji 30%: $discountedPrice zł</p>";
     
        }
    }
    ?>








</div>
</section>


    <section id="prawy">
        <h2>Kontakt</h2>
        <p>e-mail: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
        <img src="promocja.png">
    </section>

    <footer id="stopka">
        <h4>Autor strony: Karol Wróbel</h4>
    </footer>
</body>
</html>
