<?php
    echo "pierwszy checkbox: " . $_POST["vehicle1"];
    echo "drugi checkbox: " . $_POST["vehicle2"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "formularz";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection FAILED: ". mysqli_connect_error());
    }
    echo "Connected succesfully!";

    $sql = "ALTER TABLE users ADD vehicle1 VARCHAR(24);";
    $sql = "ALTER TABLE users ADD vehicle2 VARCHAR(24);";
    $sql = "INSERT INTO users (firstname, surname, email, vehicle1, vehicle2) VALUES (' ', ' ', ' ', '$_POST[vehicle1]', '$_POST[vehicle2]');";

    if (mysqli_multi_query($conn, $sql)) {
        echo "New record created successfully!";
    } else {
        echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
    }
?>