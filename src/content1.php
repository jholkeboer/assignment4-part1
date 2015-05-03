<?php
	$username = @$_POST['username'];
	if ($username == '' or $username === null) {
		echo 'A username must be entered. Click ';
		?><a href="login.php">here</a><?php
		echo ' to return to the login screen';
	}
?>