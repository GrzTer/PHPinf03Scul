<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="style_1.css">
</head>

<body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
<section id="srodek">
    <div>
    <section id="lewy_1">
        <h3>Ryby zamieszkujące rzeki</h3>
        <ol>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'wedkowanie');
            if (!$conn) {
                die('Błąd połączenia: ' . mysqli_connect_error());
            }

            $query = "SELECT nazwa, akwen, wojewodztwo FROM ryby LEFT JOIN lowisko On ryby.id = lowisko.Ryby_id WHERE lowisko.rodzaj = 3;";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<li>{$row['nazwa']} pływa w rzece {$row['akwen']}, {$row['wojewodztwo']}</li>";
                }
            } else {
                echo "<li>Brak wyników</li>";
            }

            mysqli_close($conn);
            ?>
        </ol>
    </section>

    <section id="lewy_2">
        <h3>Ryby drapieżne naszych wód</h3>
        <table>
            <tr>
                <th>L.p.</th>
                <th>Gatunek</th>
                <th>Występowanie</th>
            </tr>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'wedkowanie');
            if (!$conn) {
                die('Błąd połączenia: ' . mysqli_connect_error());
            }

            $query = "SELECT * FROM ryby";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>{$row['id']}</td><td>{$row['nazwa']}</td><td>{$row['wystepowanie']}</td></tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Brak wyników</td></tr>";
            }

            mysqli_close($conn);
            ?>
        </table>
    </section>
    </div>
    <section id="prawy">
        <img src="ryba1.jpg" alt="Sum">
        <br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </section>
    </section>
    <footer>
        <p>Stronę wykonał: Grzegorz Tereszkiewicz</p>
    </footer>
</body>

</html>