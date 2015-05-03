<!doctype html>
<head>
</head>
<body>
	<?php
		$post_array = array();
		$get_array = array();
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			foreach($_POST as $key => $field) {
				if (!empty($_POST[$key])) {
					$post_array[$key] = $field;
				}
			}
			if (!empty($post_array)) {
				echo json_encode($post_array);
			}
			else {
				echo '{"Type": "POST", "parameters": null}';
			}
		}
		elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
			foreach($_GET as $key => $field) {
				if (!empty($_GET[$key])) {
					$get_array[$key] = $field;
				}
			}
			if (!empty($get_array)) {
				echo json_encode($get_array);
			}
			else {
				echo '{"Type": "GET", "parameters": null}';
			}
		}
	?>
</body>