<?php
// 1. Odbiór danych z formularza (POST)
$data = $_POST['data'];         // data (format rrrr-mm-dd)
$ilosc = $_POST['ilosc'];       // liczba osób
$telefon = $_POST['telefon'];   // numer telefonu
$zgoda = $_POST['zgoda'];       // checkbox - niekonieczny do wstawienia, jeśli tabela nie przewiduje kolumny

// 2. Nawiązanie połączenia z serwerem MySQL (localhost, użytkownik root, bez hasła, baza 'baza')
$db = mysqli_connect('localhost', 'root', '', 'baza');

// Sprawdź, czy połączenie się udało
if (!$db) {
    die("Błąd połączenia z bazą danych: " . mysqli_connect_error());
}

//  3. Sformułowanie zapytania INSERT
//     Załóżmy, że w tabeli rezerwacje mamy np. kolumny: id, data_rez, liczba_osob, telefon, nr_stolika
//     i że w tym zadaniu nie wypełniamy nr_stolika, więc np. wstawiamy NULL lub pomijamy tę kolumnę.
$sql = "INSERT INTO rezerwacje (data_rez, liczba_osob, telefon)
        VALUES ('$data', '$ilosc', '$telefon')";

// 4. Wykonanie zapytania do bazy danych
if (mysqli_query($db, $sql)) {
    echo "Dodano rezerwację do bazy";
} else {
    echo "Błąd podczas dodawania rezerwacji: " . mysqli_error($db);
}

// 5. Zamknięcie połączenia z bazą danych
mysqli_close($db);
?>