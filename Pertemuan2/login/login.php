<?php 

if (isset($_POST["submit"])) { 
	
	if ($_POST ["username"] == "admin" && $_POST["password"] == "123") {
		
		header("location: admin.php");
		exit;
	} 	else {
		
		$error = true;
	}
}

 ?>
<!DOCTYPE html>
<html>
<head>

	<title>login</title>
</head>
<body>

	<h1>Login Admin</h1>

<?php if ( isset($error) ) : ?>
	<p style="color: red; font-style: italic;">username / password Salah!</p>
<?php endif; ?>
	<ul>
		<form action="" method="post">
			<li>
				<label for="username">username :</label>
				<input type ="text" name="username" id="username">
			</li>
			<br>
			<li>
				<label for="password">password :</label>
				<input type ="password" name="password" id="password">
			</li>

			<li>
				<button type="submit" name="submit">Login</button>
			</li>




		</form>
	</ul>


</body>
</html>