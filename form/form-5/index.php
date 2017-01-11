<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo Form-1</title>
</head>
<body>

	<form action="index.php" method="GET">

		<select name="genre">
			<option value="homme">Mr</option>
			<option value="femme">Mme</option>
		</select>

		<input type="text" name="name" placeholder="Name">
		<input type="text" name="lastname" placeholder="Lastname">
		<input type="submit" name="submit">

	</form>

	<p>Bonjour <?php echo $_GET['genre'] . ' ' . $_GET['name'] . ' ' . $_GET['lastname']; ?> </p>
	
</body>
</html>