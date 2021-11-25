<!DOCTYPE html>
<html lang="sv">	
		<head>	
		<meta charset="UTF-8">
		<title>Keno! Lett å vinne...</title>
		</head>
	<body>
		<h1>Keno</h1>
        <form method="POST">
            Mata in 11 tal (mellan 1 och 70) separerade med ETT mellanslag!<br>
			<input type="text" name="minaTal" size="24"><br>
            <input type="submit" value="Skicka">
        </form>
	</body>
</html>


<?php
//Keno!

//Slumpa fram 20 tal mellan 1 och 70

//Jamför de 20 slumpade talen med 11 inmatade tal och berätta hur
//många som var rätt.
if (isset($_POST['minaTal'])) {
	//Skapar en array av de inmatade talen
	$minaTal=explode(" ", $_POST['minaTal']);
	
	//Felkontroll
	$ok=true;
	if (count($minaTal)!==11) { //Det är inte 11 tal i arrayen
		echo "Det ska vara 11 tal";
		$ok=false;
	} else {
		for($i=0;$i<11;$i++) { //Kolla att det är heltal mellan 1 och 70
			if(!is_int((int)$minaTal[$i]) || $minaTal[$i]>70 || $minaTal[$i]<1) {
				echo "Det ska vara 11 tal mellan 1 och 70";
				$ok=false;
				break;
			}
		}
	}
	
	if($ok) {
		$tal=[];
		while(count($tal)<20) {
			$rnd=rand(1,70);
			$tal[$rnd]=1;
		}
	
		//Sortera talen
		ksort($tal, SORT_NUMERIC);
		//Skriver ut  talen
		echo "De 20 slumpade talen är...<br>";
		foreach($tal as $key=>$value) {
			echo "$key ";
		}
		
		//Sortera inmatade talen
		sort($minaTal, SORT_NUMERIC);
		//Skriver ut dem
		echo "<br>Dina tal var...<br>";
		$antalRatt=0;
		foreach($minaTal as $value) {
			//Kontrollera om ditt tal finns bland de slumpade
			if(array_key_exists($value, $tal)) {
				echo "<b>$value</b> ";
				$antalRatt++;
				} else {
				echo "$value ";
				}
		}
		echo "<br>Du fick $antalRatt rätta tal!";
		}
	}