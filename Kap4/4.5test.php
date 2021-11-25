<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="UTF-8">
        <title>4.5</title>
    </head>
    <body>
		<h1>Caesar-kryptering</h1>
        <form method="POST">
			<input type="radio" name="kryptera_dekryptera" value="kryptera" checked>
			<input for="kryptera">Kryptera</label>
			<input type="radio" name="kryptera_dekryptera" value="dekryptera" checked>
			<input for="Dekryptera">Dekryptera</label>
            <input type="text" name="text" size=50><br>
            <input type="submit" value="Skicka">
			<input type="reset" value="Ångra"
        </form>
    
	
	<?php
        if(isset($_POST['text'])) {
			$text=$_POST["text"];
			function Chiper($ch, $key)
			{
				if (!ctype_alpha($ch))
					return $ch;
				
				$offset = ord(ctype_upper($ch) ? 'A' : 'a');
				return chr(fmod(((ord($ch) + $key) -$offset), 26) + $offset);
			}
			function Encipher($input, $key)
			{
			$output = "";
			
			$inputArr = str_split($input);
			foreach ($inputArr as $ch)
				$output .= Chiper($ch, $key);
				
			return $output;
		}
		
		function Decipher($input, $key)
		{
			return Encipher($input, 26 - $key);
		}
		$cipherText = Encipher($text, 1);
		$decipherText = Decipher($cipherText, 1);
		
		echo "$cipherText<br>";
		echo "$decipherText";
		}
?>
	</body>
</html>