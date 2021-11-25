<!DOCTYPE html>
<html lang="sv">	
		<head>	
		<meta charset="UTF-8">
		<title>4.11</title>
		</head>
	<body>
		<h1>Division med 5</h1>
        <form method="POST">
            Ange täljare <input type="number" name="taljare">
            Ange nämnare <input type="number" name="namnare">
            <input type="submit" value="Skicka">
        </form>
		
<?php

	$taljare=filter_input(INPUT_POST, "taljare", FILTER_SANITIZE_STRING);
	$namnare=filter_input(INPUT_POST, "namnare", FILTER_SANITIZE_STRING);

?>

<?php
	if($taljare !=null) {
		
			$tal2=divide($taljare, $namnare);
			if ($tal2==0) {
				echo "$taljare är delbart med $namnare";
			} else {
				echo "$taljare är inte delbart med $namnare";
			}
		}
?>
</html>

<?php
	function divide($taljare, $namnare) {
		return $taljare%$namnare;
	}