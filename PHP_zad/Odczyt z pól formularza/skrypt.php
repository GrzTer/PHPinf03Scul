<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wyniki formularza</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $wymagane = ['imie', 'nazwisko', 'wiek', 'email', 'wiadomosc', 'jezyk', 'plec', 'zgoda'];
    $brakujace_pola = [];

    foreach ($wymagane as $pole) {
        if (empty($_POST[$pole])) {
            $brakujace_pola[] = $pole;
        }
    }

    if (!empty($brakujace_pola)) {
        echo "<h3>Proszę wypełnić wszystkie wymagane pola:</h3><ul>";
        foreach ($brakujace_pola as $pole) {
            echo "<li>$pole</li>";
        }
        echo "</ul>";
        echo "<a href='formularz.php'>Wróć do formularza</a>";
    } else {
        echo "<h2>Dane z formularza:</h2>";
        echo "<strong>Imię:</strong> " . htmlspecialchars($_POST['imie']) . "<br>";
        echo "<strong>Nazwisko:</strong> " . htmlspecialchars($_POST['nazwisko']) . "<br>";
        echo "<strong>Wiek:</strong> " . htmlspecialchars($_POST['wiek']) . "<br>";
        echo "<strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "<br>";
        echo "<strong>Wiadomość:</strong> " . nl2br(htmlspecialchars($_POST['wiadomosc'])) . "<br>";
        echo "<strong>Ulubiony język programowania:</strong> " . htmlspecialchars($_POST['jezyk']) . "<br>";
        echo "<strong>Płeć:</strong> " . htmlspecialchars($_POST['plec']) . "<br>";
        echo "<strong>Zgoda na przetwarzanie danych:</strong> Wyrażono zgodę<br>";
    }
} else {
    echo "<h3>Błąd: Formularz nie został przesłany poprawnie.</h3>";
    echo "<a href='formularz.php'>Wróć do formularza</a>";
}
?>
</body>
</html>