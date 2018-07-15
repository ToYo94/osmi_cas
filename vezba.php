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
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<ul>
			<?php while ($red = $rezultat->fetch_assoc()) { ?>
			<li class="blok">
				<a><?php echo $red["ime_proizvoda"]; ?></a>
				<a><?php echo $red["cena"]; ?></a>
				<a><?php echo $red["kolicina"]; ?></a>
			</li>
			<?php } ?>
		</ul>
	</body>
</html>