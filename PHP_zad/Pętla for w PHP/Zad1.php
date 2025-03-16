<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 1</title>
</head>
<body>
<?php
    $colory = ['#FF5733', '#33FF57', '#3357FF', '#F333FF', '#FF33A1', '#33FFF5', '#F5FF33', '#FF8C33', '#8C33FF', '#33FF8C'];
    for ($i = 1; $i <= 10; $i++) {
        $color = $colory[($i - 1) % count($colory)];
        echo "<div style='background-color: $color;'>$i</div>";
}
?>
</body>
</html>
