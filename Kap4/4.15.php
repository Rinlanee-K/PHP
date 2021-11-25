
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Bilduppladdning</title>
	</head>
	<body>
		<form enctype="multipart/form-data" method="POST">
			<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
			Fil att skicka: <input name="userfile" type="file" accept="image/*"><br>
			<input type="submit" value="Skicka">
		</form>

<?php
	
	