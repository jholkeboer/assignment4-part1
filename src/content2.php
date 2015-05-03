<?php
	session_start();	
?>
<a href="<?php
	$filePath1 = explode('/',$_SERVER['PHP_SELF'], -1);
	$filePath2 = implode('/', $filePath1);
	$filePath3 = $filePath2 . '/content1.php';
	$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath3;
	echo $redirect;
	?>
	">Click here to go back to content1.php</a>