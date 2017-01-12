<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo Form-1</title>
</head>
<body>
	<?php

	if (empty($_POST)){


		?>

		<form action="" method="post">


			<select name="genre">
				<option value="Mr">Homme</option>
				<option value="Mme">femme</option>
			</select>

			<input type="text" name="name" placeholder="Name">
			<input type="text" name="lastname" placeholder="Lastname">
			<input type="file" name="data" />
			<input type="submit" name="submit">


		</form>
		<p>
			<?php
		} else {
			 echo "Bonjour".' '. $_POST['genre'] . ' ' . $_POST['name'] . ' ' . $_POST['lastname']  
			 . ' ' .$_POST['data']; 
		}
		?>
	</p>
</body>
</html>