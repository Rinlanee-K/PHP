<?php
	declare(strict_types=1);
	$file=filter_input(INPUT_POST, "text", FILTER_SANITIZE_STRING);
	
?>

<!DOCTYPE html>
<html lang="sv">	
		<head>	
		<meta charset="UTF-8">
		<title>4.12</title>
		</head>
	<body>
		<h1>Sök fil:</h1>
        <form method="POST">
            Mapp namn<input type="text" name="mapp">
            <input type="submit" value="Skicka">
        </form>

<?php
	if($file !==null);

	$file="/";
	
	
	$mapp=scandir($file);
	
	
	echo "<pre>";
	
	if(is_dir($file)) {
		echo("$file är en katalog");
	} else {
		echo("$file är inte en katalog ");
	}
	
	
	echo $file . ':' . filesize($file) . ' bytes ';
	
	print_r($mapp);
	
	
