<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan Array</title>
	<style>
		.Kotak{
			width: 30px;
			height: 30px;
			background-color: blueviolet;
			text-align:center;
			line-height: 30px;
			margin: 3px;
			float: left;
			transition: 1s;
			
		}
		 .Kotak:hover {
		 	transform: rotate(360deg);
		 	border-radius: 50%;
		 }  






	</style>
</head>
<body>


	<?php 
	$angka = [1,2,3,4,5,6,7,8,9]
	 ?>


	 <?php foreach( $angka as $a) : ?>
		<div class="Kotak"><?= $a;?>
		</div>
	<?php endforeach; ?>

</body>
</html>