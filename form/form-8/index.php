<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo Form-1</title>
</head>
<body>
	<?php

	$checked  = array('.pdf');
	$file = $_FILES['data']['name'];
	$check = strrchr($file, '.');

	if (empty($_POST) || $check !== $checked[0]) {


		?>

		<form action="" method="post" enctype="multipart/form-data">


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
			 echo  "Bonjour ".' '. $_POST['genre'] . ' ' . $_POST['name'] . ' ' . 
			 $_POST['lastname'].' '.$file; 
		}
		?>
	</p>
</body>
</html>