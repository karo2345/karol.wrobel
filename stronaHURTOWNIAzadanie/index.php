<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia szkolna</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <div id="baner">
        <h1>Hurtownia z najlepszymi cenami</h1>
    </div>

    <div id="lewy">
        <h2>Nasze ceny</h2>
        <?php
         
            $serwer = "localhost";
            $uzytkownik = "root";
            $haslo = "";
            $baza = "sklep";

         
            $polaczenie = new mysqli($serwer, $uzytkownik, $haslo, $baza);

            
            if ($polaczenie->connect_error) {
                die("Błąd połączenia z bazą danych: " . $polaczenie->connect_error);
            }

            
            $query = "SELECT nazwa, cena FROM towary";
            $result = $polaczenie->query($query);

            if ($result->num_rows > 0) {
                
                echo "<table>";
                echo "<tr><th>Nazwa towaru</th><th>Cena</th></tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["nazwa"] . "</td><td>" . $row["cena"] . "</td></tr>";
                }

                echo "</table>";
            } else {
                echo "Brak danych do wyświetlenia.";
            }

           
            
        ?>
    </div>

    <div id="srodkowy">
    <h2>Koszt zakupów</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="towar">Wybierz artykuł:</label>
        <select name="towar" id="towar">
            <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
            <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
            <option value="Cyrkiel">Cyrkiel</option>
            <option value="Linijka 30 cm">Linijka 30 cm</option>
        </select>
        <br>
        <label for="liczba">Liczba sztuk:</label>
        <input type="number" name="liczba" id="liczba" required>
        <br>
        <input type="submit" value="OBLICZ">
    </form>
   
    <div id="wyniki">
        <?php
    
        $polaczenie = new mysqli($serwer, $uzytkownik, $haslo, $baza);

      
        if ($polaczenie->connect_error) {
            die("Błąd połączenia z bazą danych: " . $polaczenie->connect_error);
        }

       
        $towar = isset($_POST['towar']) ? $_POST['towar'] : "";
        $liczba = isset($_POST['liczba']) ? $_POST['liczba'] : "";

      
        $query = "SELECT cena FROM towary WHERE nazwa = '$towar'";
        $result = $polaczenie->query($query);

        if ($result->num_rows > 0) {
        
            $row = $result->fetch_assoc();
            $cena = $row['cena'];

          
            $wartosc = $cena * $liczba;

          
            echo "Wartość zakupów: $wartosc";
        } else {
            echo "Błąd pobierania danych z bazy.";
        }

        
        $polaczenie->close();
        ?>
    </div>
</div>


    <div id="prawy">
        <h2>Kontakt</h2>
        <img src="zakupy.png" alt="hurtownia">
        <p>e-mail: <a href="mailto:hurt@poczta2.pl">hurt@poczta2.pl</a></p>
    </div>

    <div id="stopka">
        <h4>Witrynę wykonał:Karol Wróbel</h4>
    </div>

</body>

</html>
