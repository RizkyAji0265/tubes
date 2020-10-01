<?php
session_start();

if (!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit;
}
require 'functions.php';

if (isset($_GET['cari'])) {
	$keyword = $_GET['keyword'];
	$makanan = query("SELECT * FROM makanan WHERE
		Gambar LIKE '%keyword%' OR
		Nama LIKE '%keyword%' OR
		Harga LIKE '%keyword%' OR
		Netto LIKE '%keyword%' OR
		EXP LIKE '%keyword%' ");
} else {
$makanan = query("SELECT * FROM makanan");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	
</head>
<body>
	<div class="logout">
		<a href="logout.php">Logout</a>
		
	</div>
	<div class="add">
		<a href="tambah.php">Tambah Data</a>
		<form action="" method="get">
			<input type="text" name="keyword" autofocus>
			<button type="sumbit" name="cari">Cari</button>
		</form>
	</div>
	<table border="1" cellpadding="13" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>Harga</th>
			<th>Netto</th>
			<th>EXP</th>
		</tr>
<?php if (empty($makanan)) : ?>
	<tr>
		<td colspan="7">
			<h1>Data tidak ditemukan</h1>
		</td>
	</tr>
	<?php else : ?>
		<?php $i = 1; ?>
		<?php foreach ($makanan as $makanan) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td>
					<div class="update"><a href="ubah.php?id=<?= $makanan['id'] ?>">Ubah</a></div>
					<div class="delete"><a href="hapus.php?id=<?= $makanan['id'] ?>" onclick="return confirm('Hapus Data');">Hapus</a></div>
				</td>
				<td><img src="../assets/img/<?= $makanan['Gambar']; ?>" alt=""</td>
				<td><?= $makanan["Nama"]; ?></td>
				<td><?= $makanan["Harga"]; ?></td>
				<td><?= $makanan["Netto"]; ?></td>
				<td><?= $makanan["EXP"]; ?></td>
			</tr>
			<?php $i++; ?>
		<?php endforeach; ?>
	<?php endif; ?>
	</table>

</body>
</html>