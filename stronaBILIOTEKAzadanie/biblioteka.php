<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka publiczna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>





<div id="baner">
    
    
<h1>Biblioteka w Książkowicach Wielkich</h1>
</div>

<div id="blok-lewy">
    <h3>Polecamy dzieła autorów:</h3>
    <ol>
        <?php
          
          
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "biblioteka";
          
         
          $conn = new mysqli($servername, $username, $password, $dbname);
          
          
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }
          
          
          $sql1 = "SELECT imie, nazwisko FROM autorzy ORDER BY nazwisko ASC";
          $result1 = $conn->query($sql1);
          
          
          
          
          if ($result1->num_rows > 0 ) {
              echo "<ol>";
              while ($row = $result1->fetch_assoc()) {
                  echo "<li>{$row['imie']} {$row['nazwisko']}</li>";
              }
              echo "</ul>";
          } else {
              
           
          echo "Brak danych do wyświetlenia.";
          }
          
          
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $imie = $_POST["imie"];
              
            
          $nazwisko = $_POST["nazwisko"];
          
             
          
              
          
           
          
            }
            
            
            ?>
     
    </ol>
</div>


<div id="blok-srodkowy">
    <h3>ul. Czytelnicza 25, Książkowice Wielkie</h3>
    <p><a href="mailto:sekretariat@biblioteka.pl">Napisz do nas</a></p>
    <img src="biblioteka.png" alt="książki">
</div>




<div id="blok-prawy-gorny">
    <h3>Dodaj czytelnika</h3>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        
        <label for="imie">imię: </label>
        <input type="text" name="imie" required><br>
        
        
        
  

        <label for="nazwisko">nazwisko: </label>
        <input type="text" name="nazwisko" required><br>
        
        
        <label for="symbol">symbol: </label>
        
      
<input type="number" name="symbol" required><br>
        
        
        <input type="submit" value="DODAJ">
    </form>
</div>


<div id="blok-prawy-dolny">
    <?php
        
        $sql2 = "INSERT INTO czytelnicy (imie, nazwisko) VALUES ('$imie', '$nazwisko')";
        if ($conn->query($sql2) === TRUE) {
            
        } else {
            echo "<br>Błąd: " . $sql2 . "<br>" . $conn->error;
        }
    
        
        echo "Czytelnik $imie $nazwisko został(a) dodany do bazy danych.";
        
        $conn->close();
    ?>
</div>


<div id="stopka">
    
 
<p>Projekt strony: nie wiedziałem gdzie sie znajduję pesel, Z wyrazami czasunku Karol Wróbel</p>
</div>



</html>