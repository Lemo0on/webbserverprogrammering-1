<?php
	$alla_citat = array(
		"Yeet.",
		"Kobe.",
		"It's rewind time."
	);
$random_key = array_rand($alla_citat);
$citat		=$alla_citat[$random_key];
header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html
<html lang="sv">
<head>
	<meta charset="utf-8" />
	<title>[Yeet]</title>
	<style>
		body {
			font-family: sans-seriff;
			/* + addon */
		}
	</style>
</head>
<body>
	<h1>[This b empty]</h1>
<?php
echo "<p lang=\"en\">{$citat}</p>\n";
?>
</body>
</html>

