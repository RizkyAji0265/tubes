<?php
session_start();

if (!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit;
}
require 'functions.php';

$id = $_GET['id'];
$makanan = query("SELECT * FROM makanan WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
	if (ubah($_POST) > 0) {
		echo "<script>
		alert('Data Berhasil diubah!');
		document.location.href = 'admin.php';
		</script>";
	}else{
		echo "<script>
		alert('Data Gagal diubah!');
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
	<h3>Ubah Makanan</h3>
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
				<input type="hidden" name="id" id="id" value="<?= $makanan['id']; ?>">
				<label for="Gambar">Gambar :</label><br>
				<input type="text" name="Gambar" id="Gambar" required value="<?= $makanan['Gambar']; ?>"><br><br>
			</li>
			<li>
				<label for="Nama">Nama :</label><br>
				<input type="text" name="Nama" id="Nama" required value="<?= $makanan['Nama']; ?>"><br><br>
			</li>
			<li>
				<label for="Harga">Harga :</label><br>
				<input type="text" name="Harga" id="Harga" required value="<?= $makanan['Harga']; ?>"><br><br>
			</li>
			<li>
				<label for="EXP">EXP :</label><br>
				<input type="text" name="EXP" id="EXP" required value="<?= $makanan['EXP']; ?>"><br><br>
			</li>
			<button type="sumbit" name="ubah">Ubah Data!</button>
			<button type="sumbit">
				<a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
			</button>
		</ul>
		

</body>
</html>