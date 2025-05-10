<?php
$polaczenie = mysqli_connect(
    'localhost',
    'root',
    '',
    'ee09'
);

$nrKaretki = $_POST['nrKaretki'];
$ratownik1 = $_POST['ratownik1'];
$ratownik2 = $_POST['ratownik2'];
$ratownik3 = $_POST['ratownik3'];

$q1 = "INSERT INTO ratownicy (nrKaretki, ratownik1, ratownik2, ratownik3) 
VALUES ($nrKaretki, '$ratownik1', '$ratownik2', '$ratownik3');";

if (mysqli_query($polaczenie, $q1)) {
    echo "Do bazy danych zostało wysłane zapytanie: $q1";
}

mysqli_close($polaczenie);
