<?php
	declare(strict_types=1);
	$fil=filter_input(INPUT_POST, "text", FILTER_SANITIZE_STRING);
	var_dump("$fil")
?>

<!DOCTYPE html>
<html lang="sv">	
		<head>	
		<meta charset="UTF-8">
		<title>Mappar</title>
		</head>
	<body>
		<h1>Sök filer:</h1>
        <form method="POST">
            Mapp namn<input type="text" name="text">
            <input type="submit" value="Skicka">
        </form>
	</body>
</html>

<?php
			if($fil !==null) {
				if(is_dir($fil)) {
			$filerArray=scandir($fil);
			echo "innehåller $fil filer <br>";
			foreach($filerArray as $file) {
			if (is_dir("$fil\\$file") === false) {
				echo "$fil\\$file " . filesize ("$fil\\$file") . " Bytes <br>";
			}
		}
	}
}

