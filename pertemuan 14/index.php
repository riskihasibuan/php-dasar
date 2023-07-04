<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa ");

//tombol cari ditekan
if (isset($_POST["cari"]) ){
	$mahasiswa = cari($_POST ["keyword"]);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>

<form action="" method="post">

	<input type="text" name="keyword" size="30" autofocus placeholder="masukkan keyword pencarian" autocomplete="off">
	<button type="submit" name="cari">Cari!</button>
	
</form>

<br>
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
			<a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
			<a href="hapus.php?id=<?= $row["id"]; ?>"onclick=" return confirm ('yakin?');">hapus</a>
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