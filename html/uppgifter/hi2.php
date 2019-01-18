<?php
if (empty($GET['name'])) {
	$name = 'stranger';
} else {
	$name = filter_input(INPUT_GET, 'name',
		FILTER_SANITIZE_SPECIAL_CHARS);
}
//something
header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="utf-8" />
	<title>Heya bub</title>
	<style>
		body {
				font-family: sans-serif;
		}
		</style>
	</head>
	<body>
		<h1>Heya bub<h1>
	<?php
		echo "<p>Hi $name</p>\n";
	?>
	</body>
	</html>