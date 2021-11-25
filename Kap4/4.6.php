<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="UTF-8">
        <title>4.6</title>
    </head>
    <body>
		<h1>Veckodag</h1>
        <form method="POST">
            <input type="date" name="fodelseDag" required><br>
            <input type="submit" value="Skicka">
			<input type="reset" value="Ångra">
        </form>
<?php
		$fodelseDag=$_POST['fodelseDag'];
		$veckodag=date("l", (strtotime($fodelseDag)));
		echo "Du var född på en $veckodag";
?>		
</body>
</html>