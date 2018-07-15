<?php
	# Ime servera, korisnik, lozinka, baza podataka je potrebrno napisati u zagradi
	# localhost = 127.0.0.1
	$bridge = mysqli_connect("localhost", "root", "", "shop");
											# \/ tu ide ime tabele unutar shopa, al posto je meni isto ime...
	$rezultat = $bridge->query("SELECT * FROM shop");

	$bridge->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<table>
			<tr>
				<th>Ime proizvoda</th>
				<th>Cena</th>
				<th>Kolicina</th>
			</tr>
			<?php while ($red = $rezultat->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $red["ime_proizvoda"]; ?></td>
				<td><?php echo $red["cena"]; ?></td>
				<td><?php echo $red["kolicina"]; ?></td>
			</tr>
			<?php } 
			# ZADATAK: NAPRAVITI U NASEM OSMISLJENOM SAJTU SHOP SA PODACIMA IZ BAZE DA STOJE U GRIDU
				# tomin viber 062 849 48 96
			?>
		</table>
	</body>
</html>