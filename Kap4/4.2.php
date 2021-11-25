<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>camelcase</title>
    </head>
    <body>
		<h1>EEHHHH</h1>
        <form method="POST">
            <input type="text" name="text"><br>
            <input type="submit" value="Skicka">
        </form>
	
<?php
	$text = $_POST["text"];
	filter_var($_POST, FILTER_UNSAFE_RAW);
	$text = str_replace(" ", "", $text);
	$text = strtolower($text);
	$text = ucwords($text);
	echo lcfirst($text);
	
?>

</html>
	</body>