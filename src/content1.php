<?php

session_start();
if (isset($_POST['action']) && $_GET['action'] == 'end') {
	$_SESSION = array();
	sessions_destroy();
	$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
	$filePath = implode('/', $filePath);
	$redirect = "http://" . $_SERVER['HTTP_POST'] . $filePath;
	header("Location: {$redirect}/login.php", true);
	die();
}

if (session_status() == PHP_SESSION_ACTIVE) {
	if (!isset($_POST['username'])) {
		$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
		$filePath = implode('/', $filePath);
		$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
		header("Location: {$redirect}/login.php");
		die();
	}
	if (isset($_POST['username'])) {
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
		echo "Hello, $_SESSION[username], you have visited this page $_SESSION[visits] times. \n";
	}
}

?>