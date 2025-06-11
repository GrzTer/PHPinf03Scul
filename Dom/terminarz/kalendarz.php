<?php
$connection = mysqli_connect('localhost', 'root', '', 'terminarz');
if (!$connection) die("Błąd połączenia: " . mysqli_connect_error());

// Zapytanie 1
$query1 = $connection->prepare("
    SELECT DISTINCT wpis 
    FROM zadania 
    WHERE dataZadania BETWEEN ? AND ? 
    AND wpis IS NOT NULL 
    AND wpis != ''
");
$start = '2020-07-01';
$end = '2020-07-07';
$query1->bind_param("ss", $start, $end);
$query1->execute();
$result1 = $query1->get_result();

// Zapytanie 2
$query2 = $connection->prepare("
    SELECT DATE_FORMAT(dataZadania, '%Y-%m-%d') as data, wpis 
    FROM zadania 
    WHERE MONTH(dataZadania) = 7
");
$query2->execute();
$result2 = $query2->get_result();
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Zadania na lipiec</title>
    <link rel="stylesheet" href="styl6.css">
</head>

<body>
    <section id="banner1">
        <img src="logo1.png" alt="lipiec" style="height:140px">
    </section>

    <section id="banner2">
        <h1>TERMINARZ</h1>
        <p>najbliższe zadania:
            <?php
            $wpisy = [];
            while ($row = $result1->fetch_assoc()) {
                $wpisy[] = htmlspecialchars($row['wpis']);
            }
            echo implode('; ', $wpisy);
            ?>
        </p>
    </section>

    <main>
        <?php
        while ($row = $result2->fetch_assoc()) {
            echo '<section class="calendar">';
            echo '<h6>' . $row['data'] . '</h6>';
            echo '<p>' . htmlspecialchars($row['wpis']) . '</p>';
            echo '</section>';
        }
        mysqli_close($connection);
        ?>
    </main>

    <footer>
        <a href="sierpien.html">Terminarz na sierpień</a>
        <p>Stronę wykonał: 000000000</p>
    </footer>
</body>

</html>