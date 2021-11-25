
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Citat</title>
	</head>
	<body>
		<h1>Random Citat</h1>
		<form method="POST">
				
		</form>
	
	
<?php

	$fil = file("citat.txt");
	$randomCitat = array_rand($fil);
	
	
	
	echo $fil[$randomCitat];

?>
	
</html>