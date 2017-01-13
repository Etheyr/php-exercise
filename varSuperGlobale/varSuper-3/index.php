<?php 
setcookie("userName",$_POST["userName"], time() + 365*24*3600, null, null, false, true);
setcookie("password",$_POST["password"], time() + 365*24*3600, null, null, false, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Variable Super Globale</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<div id="sizeForm">
			<div class="ui  segment">
				<div class="ui  form">
					<div class="field">
						<label id="labelI">User name</label>
						<input id="inputC"  type="text" value="" name="userName">
					</div>
					<div class="field">
						<label id="labelI">Password</label>
						<input id="inputC"  type="Password" value="" name="password">
					</div>
					<div class="field">
					</div>
					<button class="ui grey button" type="submit">Submit</button>
				</div>
			</div>
		</div>
	</form>


	<?php 
	echo $_COOKIE['userName'] . ' ' . $_COOKIE['password'];
	?>

</body>
</html>