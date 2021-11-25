
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Filuppladdning</title>
	</head>
	<body>
		<form enctype="multipart/form-data" method="POST">
			<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
			Fil att skicka: <input name="userfile" type="file" accept="c:/windows"><br>
			<input type="submit" value="Skicka">
		</form>

<?php
	if($_FILES) {
		$mapp="c:\\temp\\";
		$uppladdadFil=$mapp . basename($_FILES['userfile']['name']);
		echo "<pre>";
		if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uppladdadFil)) {
			echo "Filen laddades upp och finns lagrad på:$uppladdadFil.<br>";
		} else {
			echo "Något gick fel vid uppladdning!<br>";
		}
		echo 'Här finns lite mer info om uppladdningen:<br>';
		print_r($_FILES);
		print "</pre>";
	}