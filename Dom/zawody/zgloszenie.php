<?
$connection = mysqli_connect('localhost', 'root', '', 'wedkowanie');

$nr   = (int) $_POST['NrLowiska'];
$data = mysqli_real_escape_string($connection, $_POST['DataZawodow']);
$sedzia = mysqli_real_escape_string($connection, $_POST['SedziaZAwodow']);

$zapytanie1 = mysqli_query($connection, "INSERT INTO zawody_wedkarskie (Karty_wedkarskie_id, Lowisko_id, data_zawodow, sedzia) VALUES (0, '$nr', '$data', '$sedzia');");
mysqli_close($connection);
?>