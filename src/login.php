<?php
session_start();
if (isset($_GET['action']) && $_GET['action'] == 'end') {
	$_SESSION = array();
	session_destroy();
}	
?>
<!doctype html>
<head>
</head>
<body>
	<h1>Login</h1><br>
	<form method=post action="content1.php">
		<label>Username: </label>
		<input name="username" type="text"><br>
		<input type="submit">
	</form>
</body>