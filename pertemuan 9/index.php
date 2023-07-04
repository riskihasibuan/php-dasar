<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa")
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellpadding="0">

	<tr>
		<td>No.</td>
		<td>Aksi</td>
		<td>Nama</td>
		<td>Gambar</td>
		<td>Nim</td>
		<td>Email</td>
		<td>Jurusan</td>
	</tr>
	<?php $i = 1; ?>
	<?php foreach($mahasiswa as $row ) :?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="">ubah</a>
			<a href="">hapus</a>
		</td>
		<td><img src="gambar/<?= $row["gambar"] ?>" width="50"></td>
		<td><?= $row ["nama"]; ?></td>
		<td><?= $row ["nim"]; ?></td>
		<td><?= $row ["email"]; ?></td>
		<td><?= $row ["jurusan"]; ?></td>
	<?php $i++; ?>
	<?php endforeach; ?>

</table>

</body>
</html>