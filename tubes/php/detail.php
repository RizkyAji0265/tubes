<?php
if (!isset($_GET['id'])) {
	header("location: ../index.php");
	exit;
}
require 'functions.php';
$id = $_GET['id'];
$makanan = query("SELECT * FROM makanan WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
</head>
<body>
	<div class="container">
		<div class="gambar">
			<img src="../assets/img/<?= $makanan["Gambar"]; ?>" alt="">
		</div>
		<div class="Keterangan">
			<p><?= $makanan ["Nama"]; ?></p>
			<p><?= $makanan ["Harga"]; ?></p>
			<p><?= $makanan ["Netto"]; ?></p>
			<p><?= $makanan ["EXP"] ?></p>
		</div>
		<button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
	</div>
</body>
</html>