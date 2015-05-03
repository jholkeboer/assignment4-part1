<?php

session_start();
//if (isset($_GET['action']) && $_GET['action'] == 'end') {
//	$_SESSION = array();
//	sessions_destroy();
//	$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
//	$filePath = implode('/', $filePath);
//	$redirect = "http://" . $_SERVER['HTTP_POST'] . $filePath;
//	header("Location: {$redirect}/login.php", true);
//	die();
//}

if (session_status() == PHP_SESSION_ACTIVE) {
	$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
	$filePath = implode('/', $filePath);
	$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
	if (!isset($_POST['username'])) {
		header("Location: {$redirect}/login.php", true);
		die();
	}
	if ($_SESSION['username'] != $_POST['username']) {
		$_SESSION['username'] = $_POST['username'];
	}
	if(!isset($_SESSION['visits'])) {
		$_SESSION['visits'] = 0;
	}
	$_SESSION['visits']++;
	if($_SESSION['username'] == '' or $_SESSION['username'] === null) {
		echo 'A username must be entered. Click ';
		?><a href="login.php">here</a><?php
		echo ' to return to the login screen.';
	}
	else {
		$filePath1 = explode('/',$_SERVER['PHP_SELF'], -1);
		$filePath2 = implode('/', $filePath1);
		$filePath3 = $filePath2 . '/login.php?action=end';
		$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath3;
		echo "Hello, $_SESSION[username], you have visited this page $_SESSION[visits] times. ";
		echo "Click ";
		?><a href="<?php echo $redirect; ?>">here</a><?php
		echo " to logout.";
		?>
		<br><a href="<?php 
			$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath2 . '/content2.php'; echo $redirect; 
			?>">Click here to go to content2.php</a>
		<?php
	}
}

?>