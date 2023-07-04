<?php 

$conn = mysqli_connect("localhost", "root","", "phpdasar"
	);


function query ($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc ($result) ){
			$rows [] = $row;
		}
		return $rows;
	}	
	
$mahasiswa = query ("SELECT * FROM mahasiswa ");

?>


<!DOCTYPE html>
	<html>
	<head>
		<title>Halaman Admin</title>
	</head>
	<body>

	<h1>Daftar Mahasiswa</h1>


	<a href="tambah.php">Tambah Mahasiswa </a>
	<br><br>

		<table border="1" cellpadding="10" cellspacing="0">

			<tr>
				<th>No.</th>
				<th>Aksi</th>
				<th>Gambar</th>
				<th>Nim</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Jurusan</th>
			</tr>
		<?php $i = 1; ?>
		<?php foreach( $mahasiswa as $row)  : ?>
			<tr>
				<td><?= $i;?></td>
				<td> 
					<a href="ubah.php?id=<?= $row["id"];?>">ubah</a>
					<a href="hapus.php?id=<?=row["id"];?>" onclick="
					return confirm('yakin?');">hapus</a>
				</td>
				
				<td><img src="gambar/<?php echo $row["gambar"];?>" 
				width="50"></td> 
				<td><?= $row ["nim"];?></td>
				<td><?= $row ["nama"];?></td>
				<td><?= $row ["email"];?></td>
				<td><?= $row ["jurusan"];?></td>  

			</tr>
			<?php $i++; ?>
			<?php endwhile; ?>
	</body>
	</html>