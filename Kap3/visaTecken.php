<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Visa Inmatade tecken</title>
	</head>
	<body>
		<form method="POST">
		Värde 1: <input type="text" name="text" size=50><br>
		<input type="submit" name="Skicka">
		</form>
		<pre>
<?php
	$text=$_POST["text"];
	echo "htmlentities:\n" . htmlentities($text);
	echo "\nhtmlspecialchars:\n" . htmlspecialchars($text);
	echo "\nhurlencode:\n" . urlencode($text);
	echo "\naddslashes:\n" . addslashes($text);
?>
		</pre>
	</body>
</html>