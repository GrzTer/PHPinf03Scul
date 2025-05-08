<?php
$connection = mysqli_connect('localhost', 'root', '', 'wedkowanie');
$sql3 = "SELECT r.nazwa, l.akwen, l.wojewodztwo FROM ryby as r JOIN lowisko as l ON r.id = l.Ryby_id WHERE l.rodzaj = 3;";
$sql1 = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1;";
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>

<body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
    <main>
        <section class="lewy">
            <article id="lewy1">
                <h3>Ryby zamieszkujące rzeki</h3><br>
                <?php
                $query1 = mysqli_query($connection, $sql3);
                if ($query1->num_rows > 0) {
                    echo "<ol>";
                    while ($row1 = mysqli_fetch_assoc($query1)) {
                        echo "<li>" . $row1["nazwa"] . " pływa w rzece " . $row1["akwen"] . ", " . $row1["wojewodztwo"] . "</li>";
                    }
                    echo "</ol>";
                }
                ?>
            </article>
            <article id="lewy2">
                <h3>Ryby drapieżne naszych wód</h3>
                <table>
                    <tr>
                        <th>L.p.</th>
                        <th>Gatunek</th>
                        <th>Występowanie</th>
                    </tr>
                    <?php
                    $query2 = mysqli_query($connection, $sql1);
                    if ($query2->num_rows > 0) {
                        $rnum = 1;
                        while ($row2 = mysqli_fetch_assoc($query2)) {
                            echo "<tr>" .
                                "<td>" . $rnum++ . "</td>" .
                                "<td>" . $row2["nazwa"] . "</td>" .
                                "<td>" . $row2["wystepowanie"] . "</td>" .
                                "</td>";
                        }
                    }
                    ?>
                </table>
            </article>
        </section>
        <section id="prawy">
            <img src="ryba1.jpg" alt="Sum"><br>
            <a href="kwerendy.txt">Pobierz kwerendy</a>
        </section>
    </main>
    <footer>
        <p>Stronę wykonał: 000000000</p>
    </footer>
</body>
<?php
mysqli_close($connection);
?>
</html>