<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form avec POO</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	
	<form action="user.php" method="GET">
		<div id="sizeForm">
			<div class="ui  segment">
				<div class="ui  form">
					<div class="field">
						<label id="labelI">Fist name</label>
						<input id="inputC" name="firstName" type="text">
					</div>
					<div class="field">
						<label id="labelI">Last name</label>
						<input id="inputC" name="lastName" type="text">
					</div>
				</div>
				<br>
				<button class="ui blue button" name="submit" type="submit">Submit</button>
			</div>
		</div>
	</form>


</body>
</html>