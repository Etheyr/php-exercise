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
		<div class="ui  segment">
			<div class="ui  form">
				<div class="field">
					<label id="labelI">User Agent</label>
					<input id="inputC"  type="text" value="<?php echo $_SERVER["HTTP_USER_AGENT"];?>">
				</div>
				<div class="field">
					<label id="labelI">Adresse IP</label>
					<input id="inputC"  type="text" value="<?php echo $_SERVER["REMOTE_ADDR"];?>">
				</div>
				<div class="field">
					<label  id="labelI">Server Name</label>
					<input id="inputC" type="text" value="<?php echo $_SERVER["SERVER_NAME"];?>">
				</div>
				<div class="field">
					<label id="labelI">Server Port</label>
					<input id="inputC" type="text" value="<?php echo $_SERVER["SERVER_PORT"];?>">
				</div>
			</div>
		</div>
	</div>


</body>
</html>