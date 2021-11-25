<?php
declare(strict_types=1);

$artal=date("Y");


if(isset($_GET['artal'])) {

	$artal=filter_input(INPUT_GET, 'artal', FILTER_VALIDATE_INT);
	//Begränsar mellan vilka årtal man får skriva in i rutan
	if ($artal>2050 || $artal<1922){
		$artal=date("Y");
	}
}
?>

<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="UTF-8">
		<title>Vasaloppet</title>
	 </head>
    <body>
		<h1>Vasaloppet</h1>
        <form method="GET">
            Ange år: <input type="number" value="<?= $artal; ?>" name="artal" max=2050 min=1922><br>
            <input type="submit" name="submit" value="Skicka">
        </form>
		<p>Vasaloppet de närmsta 5 åren följande datum:<br>
		<?php
			for($i=0;$i<5;$i++) {
				echo $artal+$i . " den " . vasaloppet($artal+$i) . "<br>";
			}
		?>
		</p>
	</body>
</html>
<?php
function vasaloppet(int $ar) :string {
//Datum för det årliga Vasaloppet
	$datum=strtotime("First Sunday of March $ar");
//Skickar tillbaka datumet
	return date("d-m-Y", $datum);
}
?>