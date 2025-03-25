<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Prognoza pogody Poznań</title>
	<link rel="stylesheet" href="styl4.css" />
</head>
<body>
	<div id="baner1">
		<p>maj, 2019 r.</p>
	</div>
	<div id="baner2">
		<h2>Prognoza dla Poznania</h2>
	</div>
	<div id="baner3">
		<img src="logo.png" alt="prognoza" />
	</div>
	<div id="lewy">
		<a href="kwerendy.txt">Kwerendy</a>
	</div>
	<div id="prawy">
		<img src="obraz.jpg" alt="Polska, Poznań" />
	</div>
	<div id="glowny">
		<table>
			<tr>
				<th>Lp.</th>
				<th>DATA</th>
				<th>NOC - TEMPERATURA</th>
				<th>DZIEŃ - TEMPERATURA</th>
				<th>OPADY [mm/h]</th>
				<th>CIŚNIENIE [hPa]</th>
			</tr>
		<?php
			$db_connect = mysqli_connect("localhost", "root", "", "prognoza4bt");
			$query = mysqli_query($db_connect, "SELECT * FROM pogoda WHERE id = 2 ORDER BY data_prognozy DESC;");
			$lp = 1;
			if (mysqli_num_rows($query) > 0) {
				while ($row = mysqli_fetch_assoc($query)) {
					echo "<tr>";
					echo "<td>" . $lp++ . "</td>";
					echo "<td>" . $row['data_prognozy'] . "</td>";
					echo "<td>" . $row['temperatura_noc'] . "</td>";
					echo "<td>" . $row['temperatura_dzien'] . "</td>";
					echo "<td>" . $row['opady'] . "</td>";
					echo "<td>" . $row['cisnienie'] . "</td>";
					echo "</tr>";
				}
			} else {
				echo "<tr><td colspan='6'>Brak danych</td></tr>";
			}

			mysqli_close($db_connect);
		?>	
		</table>
	</div>
	<div id="stopka">
		<p>Stronę wykonał: 00000000000</p>
	</div>
</body>
</html>