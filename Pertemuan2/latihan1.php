<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>LatihanTabel</title>
	

</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">
	<?php	 
		for ($i = 1; $i <= 10; $i++ ){
			echo "<tr>";
		for ($j =1; $j <= 10; $j++ ){
				echo "<td>$i,$j</td>";
			}
			echo "</tr>";
		}
	?>

		
</table>

</body>
</html>