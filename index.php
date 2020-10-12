<?php require_once("Lul.php"); ?>

<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<title>PHP Vectors</title>
	</head>
	<body>
		<p><?= $vacina1->getPreparationState($descriptions); ?></p>

		<pre><?= print_r($vacina1); ?></pre>
		<br /><br />
	</body>
</html>