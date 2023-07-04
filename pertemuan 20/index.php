<?php 
session_start();

if( !isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

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
	<style>
		.loader{
			width: 90px;
			position: absolute;
			top: 107px;
			left: 225px;
			z-index: -1;
			display: none;
		}
	</style>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>

<a href="logout.php">Logout</a> 

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>

<form action="" method="post">

	<input type="text" name="keyword" size="30"  autofocus placeholder="masukkan keyword pencarian" autocomplete="off" id="keyword">
	<button type="submit" name="cari" id="tombol-cari">Cari!</button>

	<img src="gambar/loading.gif" class="loader">

</form>

<br>
<div id="container">
<table border="1" cellpadding="10" cellpadding="0">


	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Nama</th>
		<th>Gambar</th>
		<th>Nim</th>
		<th>Email</th>
		<th>Jurusan</th>
	</tr>
	<?php $i = 1; ?>
	<?php foreach($mahasiswa as $row ) :?>
	<tr>
		<th><?= $i; ?></th>
		<th>
			<a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
			<a href="hapus.php?id=<?= $row["id"]; ?>"onclick=" return confirm ('yakin?');">hapus</a>
		</th>
		<td><img src="gambar/<?= $row["gambar"] ?>" width="50"></td>
		<td><?= $row ["nama"]; ?></td>
		<td><?= $row ["nim"]; ?></td>
		<td><?= $row ["email"]; ?></td>
		<td><?= $row ["jurusan"]; ?></td>
	<?php $i++; ?>
	<?php endforeach; ?>


</table>
</div>

</body>
</html>