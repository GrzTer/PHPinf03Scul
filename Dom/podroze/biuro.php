<?php
    $polonczenie = mysqli_connect('localhost', 'root', '', 'podroze1');
    $zapytanie1 = mysqli_query($polonczenie, "SELECT z.nazwaPliku, z.podpis FROM zdjecia z ORDER BY z.podpis ASC;");
    $zapytanie2 = mysqli_query($polonczenie, "SELECT w.cel, w.dataWyjazdu FROM wycieczki w WHERE w.dostepna = 'FALSE';");
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poznaj Europę</title>
    <link rel="stylesheet" href="styl9.css">
</head>
<body>
    <header><h1>BIURO PODRÓŻY</h1></header>
    <main>
        <section id="lewy">
            <h2>Promocje</h2><br>
            <table>
                <tr>
                    <td>Warszawa</td>
                    <td>od 600 zł</td>
                </tr>
                <tr>
                    <td>Wenecja</td>
                    <td>od 1200 zł</td>
                </tr>
                <tr>
                    <td>Paryż</td>
                    <td>od 1200 zł</td>
                </tr>
            </table>
        </section>
        <section id="srodkowy">
            <h2>W tym roku jedziemy do...</h2><br>
            <?php
                while ($wiersz1 = mysqli_fetch_assoc($zapytanie1)) {
                    echo "<img src=". "'" . $wiersz1['nazwaPliku'] . "'" . " alt=" . "'" . $wiersz1['podpis'] . "'" . " title=" . "'" . $wiersz1['podpis'] . "'" . ">";
                }
            ?>
        </section>
        <section id="prawy">
            <h2>Kontakt</h2><br>
            <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
            <br><p>telefon: 444555666</p>
        </section>
        <section id="dane">
            <h3>W poprzednich latach byliśmy...</h3>
            <ol>
                <?php
                    while ($wiersz2 = mysqli_fetch_assoc($zapytanie2)) {
                        echo "<li>" . "Dnia " . $wiersz2['dataWyjazdu'] . " pojechaliśmy do ". $wiersz2['cel'] . "</li>";
                }
                mysqli_close($polonczenie)
                ?>
            </ol>
        </section>
    </main>
    <footer><p>Stronę wykonał: 00000000000</p></footer>
</body>
</html>