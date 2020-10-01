<?php
require 'php/functions.php';

$makanan = query("SELECT * FROM makanan") 
 ?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Document</title>
	</head>
	<body>
	<div class="container">
		<?php foreach ($makanan as $makanan) : ?> 
			<a href ="php/login.php">
				<button type="">Masuk ke halaman admin</button>
			</a>
			<p class="nama">
				<a href="php/detail.php?id=<?= $makanan['id'] ?>"><?= $makanan["Nama"] ?></a>
			</p>
	  		<?php endforeach; ?>
	  </div>
</body>
</html>