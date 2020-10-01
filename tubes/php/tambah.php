<?php
session_start();

if (!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit;
}
require 'functions.php';

if (isset($_POST['tambah'])) {
	if (tambah($_POST) > 0) {
		echo "<script>
		alert('Data Berhasil ditambahkan!');
		document.location.href = 'admin.php';
		</script>";
	}else{
		echo "<script>
		alert('Data Gagal ditambahkan!');
		document.location.href = 'admin.php';
		</script>";
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<h3>Tambah Makanan</h3>
	<form action="" method="post">
		<ul>
			<li>
				<label for="Nama">Nama :</label><br>
				<select name="Nama" id="Nama" required>
					<option value="">------------- Nama --------------</option>
					<option value="Ahh">Ahh</option>
					<option value="Gery">Gery</option>
					<option value="Kacang">Kacang</option>
					<option value="Kuaci">Kuaci</option>
					<option value="Kusuka">Kusuka</option>
					<option value="Oishi">Oishi</option>
					<option value="Pillows">Pillows</option>
					<option value="Pilus">Pilus</option>
					<option value="Siip">Siip</option>
					<option value="Sponge">Sponge</option>

				</select> 
			</li>
			<br>
			<li>
				<label for="Gambar">Gambar :</label><br>
				<input type="text" name="Gambar" id="Gambar" required><br><br>
			</li>
			<li>
				<label for="Harga">Harga :</label><br>
				<input type="text" name="Harga" id="Harga" required><br><br>
			</li>
			<li>
				<label for="Netto">Netto :</label><br>
				<input type="text" name="Netto" id="Netto" required><br><br>
			</li>
			<li>
				<label for="EXP">EXP :</label><br>
				<input type="text" name="EXP" id="EXP" required><br><br>
			</li>
			<button type="sumbit" name="tambah">Tambah Data!</button>
			<button type="sumbit">
				<a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
			</button>
		</ul>
		

</body>
</html>