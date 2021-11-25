
<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="UTF-8">
        <title>4.7</title>
    </head>
    <body>
		<h1>Födelsedag</h1>
        <form method="POST">
            Födelsedatum här! <input type="date" name="fodelsedag"><br>
			Heltal <input type="number" name="dag" required><br>
            <input type="submit" value="Skicka">
        </form>
		
	<?php
	$fodelsedag=filter_input(INPUT_POST, "fodelsedag", FILTER_SANITIZE_STRING);
	$dag=filter_input(INPUT_POST, "dag", FILTER_SANITIZE_STRING);
	
	if($fodelsedag!=null) {
		/*Skapar nya datum och kollar hur gammal man är i dagar från
		och med sitt födelsedatum fram till idags datum. 
		*/
		$datetime1=new dateTimeImmutable($fodelsedag);
		$datetime2=new dateTime("now");
		$interval= $datetime1->diff($datetime2);
		echo "Du är " . $interval->format('%a dagar'). " gammal<br>";

		/*Visar vilket datum man fyller x dagar gammal genom att 
		jämför med den dagen man föddes. Skriver ut hur många dagar gammal du är idag
		och när du blir/var x dagar gammal.
		*/
		$antalDagar=$datetime1->modify("$dag days");
		echo "Du är " . $dag . " dagar gammal den " . $antalDagar->format('d.m.Y')."<br>";
		}
	?>
	</body>
</html>