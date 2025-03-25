<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Klub wędkowania</title>
	<link rel="stylesheet" href="styl2.css" />
</head>
<body>
	<div id="baner">
		<h2>Wędkuj z nami!</h2>
	</div>
	<div id="lewy">
		<img src="ryba2.jpg" alt="Szczupak" />
	</div>
	<div id="prawy">
		<h3>Ryby spokojnego żeru (białe)</h3>

		<ol>
			<li><a href="https://wedkuje.pl/" target="_blank">Odwiedź także</a></li>
			<li><a href="https://www.pzw.org.pl/" target="_blank">Polski Związek Wędkarski</a></li>
		</ol>
	</div>
	<div id="stopka">
		<p>Stronę wykonał: 0000000</p>
	</div>
</body>
<?php
			$db_connect = mysqli_connect("localhost", "root", "", "wedkowa");

			if (!$db_connect) {
				die("Connection failed: " . mysqli_connect_error());
			}

			$query = mysqli_query($db_connect, "SELECT id, nazwa, wystepowanie FROM Ryby WHERE styl_zycia = 2;");

			if (mysqli_num_rows($query) > 0) {
				while ($row = mysqli_fetch_assoc($query)) {
					echo "<p>" . $row['id'] . ". " . $row['nazwa'] . ", występuje w: " . $row['wystepowanie'] . "</p>";
				}
			} else {
				echo "<p>Brak wyników do wyświetlenia.</p>";
			}

			mysqli_close($db_connect);
		?>
</html>