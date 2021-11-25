<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>4.3</title>
    </head>
    <body>
		<h1>Leetspeak</h1>
        <form method="POST">
            <input type="text" name="text" size=50><br>
            <input type="submit" value="Skicka">
        </form>
		
<?php
	$text=filter_input(INPUT_POST, "text", FILTER_SANITIZE_STRING);

	$alphabet = array ("a", "b", "e", "g", "i", "l", "o", "s", "t");
	$leet = array ("4", "8", "3", "9", "1", "1", "0", "5", "7");
	$text = str_replace ($alphabet, $leet, $text);
	echo $text;


?>
			
	</body>
</html>