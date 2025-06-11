<?php
$polonczenie = mysqli_connect('localhost', 'root', '', 'zdobywcy');
$zapytanie1 = mysqli_query($polonczenie, "SELECT o.imie, o.nazwisko, o.funkcja, o.email FROM osoby o;");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nazwisko = $_POST['nazwisko'];
    $imie = $_POST['imie'];
    $funkcja = $_POST['funkcja'];
    $email = $_POST['email'];

    if (!empty($nazwisko) && !empty($imie) && !empty($funkcja) && !empty($email)) {
        $zapytanie2 = mysqli_query($polonczenie, "INSERT INTO osoby (nazwisko, imie, funkcja, email) VALUES ('$nazwisko', '$imie', '$funkcja', '$email');");
    }
}
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZDOBYWCY GÓR</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Klub zdobywców gór polskich</h1>
    </header>
    <nav>
        <a href="kw1.png">kwerenda1</a>
        <a href="kw2.png">kwerenda2</a>
        <a href="kw3.png">kwerenda3</a>
        <a href="kw4.png">kwerenda4</a>
    </nav>
    <section id="lewy">
        <img src="logo.png" alt="logo  zdobywcy"><br>
        <h3>razem z nami:</h3>
        <ul>
            <li>wyjazdy</li>
            <li>szkolenia</li>
            <li>rekreacja</li>
            <li>wypoczynek</li>
            <li>wyzwania</li>
        </ul>
    </section>
    <section id="prawy">
        <h2>Dołącz do naszego zespołu!</h2><br>
        <p>Wpisz swoje dane do formularza:</p>
        <form action="zdobywcy.php" method="post">
            <label for="nazwisko">Nazwisko: </label><input type="text" name="nazwisko">
            <label for="imie">Imię: </label><input type="text" name="imie">
            <label for="funkcja">Funkcja: </label><select name="funkcja">
                <option value="0">uczestnik</option>
                <option value="1">przewodnik</option>
                <option value="2">zaopatrzeniowiec</option>
                <option value="3">organizator</option>
                <option value="4">ratownik</option>
            </select>
            <label for="email">Email: </label><input type="email" name="email">
            <button type="submit">Dodaj</button>
        </form>

        <h3>Lista członków:</h3>
        <table>
            <tr>
                <th>Nazwisko</th>
                <th>Imię</th>
                <th>Funkcja</th>
                <th>Email</th>
            </tr>
            <?php
            $zapytanie1 = mysqli_query($polonczenie, "SELECT o.imie, o.nazwisko, o.funkcja, o.email FROM osoby o;");

            while ($wiersz1 = mysqli_fetch_assoc($zapytanie1)) {
                if (!empty($wiersz1['nazwisko']) && !empty($wiersz1['imie']) && !empty($wiersz1['funkcja']) && !empty($wiersz1['email'])) {
                    echo "<tr>" .
                    "<td>" . $wiersz1['nazwisko'] . "</td>" .
                    "<td>" . $wiersz1['imie'] . "</td>" .
                    "<td>" . $wiersz1['funkcja'] . "</td>" .
                    "<td>" . $wiersz1['email'] . "</td>" .
                    "</tr>";
                }
            }
            mysqli_close($polonczenie);
            ?>
        </table>
    </section>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>

</html>