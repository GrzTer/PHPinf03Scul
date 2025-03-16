<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 3</title>
</head>
<body>
    <form method="post" action="">
        <label for="tekst">Wprowadź tekst:</label><br>
        <input type="text" id="tekst" name="tekst" required><br><br>
        <input type="submit" value="Wyślij">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['tekst'])) {
        $tekst = $_POST['tekst'];
        $wyrazy = explode(' ', $tekst);
        foreach ($wyrazy as $wyraz) {
            echo "<p>$wyraz</p>";
        }
    }
    ?>
</body>
</html>
