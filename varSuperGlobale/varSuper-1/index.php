<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Variable Super Globale</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="sizeForm">
		<div class="ui inverted segment">
			<div class="ui inverted form">
				<div class="field">
					<label>User Agent</label>
					<input  type="text" value="<?php echo $_SERVER["HTTP_USER_AGENT"];?>">
				</div>
				<div class="field">
					<label>Adresse IP</label>
					<input  type="text" value="<?php echo $_SERVER["REMOTE_ADDR"];?>">
				</div>
				<div class="field">
					<label>Server Name</label>
					<input  type="text" value="<?php echo $_SERVER["SERVER_NAME"];?>">
				</div>
			</div>
		</div>
	</div>


</body>
</html>