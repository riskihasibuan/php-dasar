<?php 
	$conn = mysqli_connect("localhost","root","","phpdasar");

		if( isset($_POST["submit"])	) {

			$Nim =$_POST["nim"];
			$Nama = $_POST["nama"];
			$Email = $_POST["email"]; 
			$Jurusan = $_POST["jurusan"];
			$Gambar = $_POST["gambar"];

			$query = "INSERT INTO mahasiswa
						VALUES
						('', '$Nama','$Nim','$Jurusan','$Email','$Gambar') 
						";


			mysqli_query($conn, $query);
		}
	 
 ?>
	 

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Mahasiswa</title>
</head>
<body>
	<h1>Tambah Data Mahasiswa</h1>

	<form action="" method="post">
 
		<ul>
				<li>
					<label for="nim">Nim: </label>
					<input type="text" name="nim" id="nim" style="margin-left: 21px;">	
				</li>
				<br>
				<li>
					<label for="nama">Nama : </label>
					<input type="text" name="nama" id="nama" style="margin-left:8px;">	
				</li>
				<br>
				<li>
					<label for="email">Email : </label>
					<input type="text" name="email" id="email" style="margin-left: 8px;">	
				</li>
				<br>
				<li>
					<label for="jurusan">Jurusan : </label>
					<input type="text" name="jurusan" id="jurusan";>	
				</li>
				<br>
				<li>
					<label for="gambar">Gambar: </label>
					<input type="text" name="gambar" id="gambar";>	
				</li>
				<br>
				<li>
					<button type="submit" name="submit">Tambah Data!</button>
				</li>



		</ul>
</body>
</html> 