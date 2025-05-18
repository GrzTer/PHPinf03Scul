<?php
$connection = mysqli_connect('localhost', 'root', '', 'piekarnia');
if (!$connection) {
    die("Błąd połączenia: " . mysqli_connect_error());
}

$wybranyRodzaj = isset($_POST['rodzaj']) ? $_POST['rodzaj'] : '';
$zapytanieRodzaje = "SELECT DISTINCT Rodzaj FROM wyroby ORDER BY Rodzaj DESC;";
$wynikRodzaje = mysqli_query($connection, $zapytanieRodzaje);
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>PIEKARNIA</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <img src="wypieki.png" alt="Produkty naszej piekarni">
    <nav>
        <a href="kw1.png">KWERENDA 1</a>
        <a href="kw2.png">KWERENDA 2</a>
        <a href="kw3.png">KWERENDA 3</a>
        <a href="kw4.png">KWERENDA 4</a>
    </nav>
    <header>
        <h1>WITAMY</h1>
        <h4>NA STRONIE PIEKARNI</h4>
        <p>Od 31 lat oferujemy najwyższej jakości pieczywo. Naturalnie świeże, naturalnie smaczne.
            Pieczemy wyłącznie wypieki na naturalnym zakwasie bez polepszaczy i zagęstników.
            Korzystamy wyłącznie z najlepszych ziaren pochodzących z ekologicznych upraw położonych w rejonach zgierskim i ozorkowskim.</p>
    </header>
    <main>
        <h4>Wybierz rodzaj wypieków:</h4>
        <form action="" method="post">
            <select name="rodzaj" required>
                <option value="">-- Wybierz Rodzaj --</option>
                <?php
                while ($wiersz = mysqli_fetch_row($wynikRodzaje)) {
                    $rodzaj = $wiersz[0];
                    if ($rodzaj == $wybranyRodzaj) {
                        echo "<option selected>" . "$rodzaj" . "</option>";
                    } else {
                        echo "<option>" . "$rodzaj" . "</option>";
                    }
                }
                ?>
            </select>
            <button type="submit">Wybierz</button>
        </form>
        <table>
            <tr>
                <th>Rodzaj</th>
                <th>Nazwa</th>
                <th>Gramatura</th>
                <th>Cena</th>
            </tr>
            <?php
            if ($wybranyRodzaj != '') {
                $zapytanieProdukty = "SELECT Rodzaj, Nazwa, Gramatura, Cena FROM wyroby WHERE Rodzaj = '$wybranyRodzaj';";
                $wynikProdukty = mysqli_query($connection, $zapytanieProdukty);

                echo "<table border='1'>";
                echo "<tr><th>Rodzaj</th><th>Nazwa</th><th>Gramatura</th><th>Cena</th></tr>";

                while ($wiersz = mysqli_fetch_row($wynikProdukty)) {
                    echo "<tr>";
                    foreach ($wiersz as $komorka) {
                        echo "<td>$komorka</td>";
                    }
                    echo "</tr>";
                }

                echo "</table>";
            }

            mysqli_close($connection);
            ?>
        </table>
    </main>
    <footer>
        <p>AUTOR 00000000000</p>
        <p>Data: 17.05.2025</p>
    </footer>
</body>

</html>