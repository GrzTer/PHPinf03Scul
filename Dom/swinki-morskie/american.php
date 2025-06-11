<?php
$connect = mysqli_connect('localhost', 'root', '', 'hodowla');
$query1 = mysqli_query($connect, "SELECT rasy.rasa FROM rasy;");
$query2 = mysqli_query($connect, "SELECT DISTINCT s.data_ur, s.miot, r.rasa FROM swinki s JOIN rasy r ON s.rasy_id = r.id WHERE s.rasy_id = 6;");
$query3 = mysqli_query($connect, "SELECT imie, cena, opis FROM swinki WHERE swinki.rasy_id = 6;");
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hodowla świnek morskich</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header>
        <h1>Hodowla świnek morskich - zamów świnkowe maluszki</h1>
    </header>

    <div class="center">
        <section class="left">
            <menu>
                <a href="peruwianka.php">Rasa Peruwianka</a>
                <a href="american.php">Rasa American</a>
                <a href="crested.php">Rasa Crested</a>
            </menu>
            <main>
                <img src="american.jpg" alt="Świnka morska rasy peruwianka">
                <?php
                while ($row2 = mysqli_fetch_assoc($query2)) {
                    echo "<h2>Rasa: " . $row2['rasa'] . "</h2>";
                    echo "<p>Data urodzenia: " . $row2['data_ur'] . "</p>";
                    echo "<p>Oznaczenie miotu: " . $row2['miot'] . "</p>";
                }
                ?>
                <hr>
                <h2>Świnki w tym miocie</h2>
                <?php
                while ($row3 = mysqli_fetch_assoc($query3)) {
                    echo "<h3>" . $row3['imie'] . " - " . $row3['cena'] . " zł</h3>";
                    echo "<p>" . $row3['opis'] . "</p>";
                }
                ?>
            </main>
        </section>

        <aside class="right">
            <h3>Poznaj wszystkie rasy świnek morskich</h3>
            <ol>
                <?php
                while ($row1 = mysqli_fetch_row($query1)) {
                    echo "<li>" . $row1[0] . "</li>";
                }
                mysqli_close($connect);
                ?>
            </ol>
        </aside>
    </div>

    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>

</html>