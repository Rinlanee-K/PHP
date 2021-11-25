<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="UTF-8">
        <title>4.7</title>
    </head>
    <body>
		<h1>Födelsedag</h1>
        <form method="POST">
            Datum:<input type="text" name="date" required><br>
			Födelsedag:<input type="text" name="fodelsedag"><br>
            <input type="submit" value="Skicka">
        </form>
<?php

	$idag=date("j F Y");
	$datetime1=new DateTime("$idag");
	
	if(isset($_POST['date'])) {
		$varde1=$_POST["date"];
		$fodelsedag=$POST["fodelsedag"];
	}
	$date=new DateTime("$fodelsedag");
	$date->modify("+$varde1 days");
	$datetime2=new datetime1("fodelsedag");
	$interval=$datetime2->diff($datetime1);
	
	echo "Skillnaden är " . $interval->format('%a days');
	echo "<br>"

?>