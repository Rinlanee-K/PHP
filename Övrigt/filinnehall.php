<?php

	//filnamn
	$fil=__FILE__;
	
	//Läs in innehållet till en vaiabel
	$filinnehall=file_get_contents($fil);
	
	//Gör om "farliga" tecken 
	$safe=htmlentities($filinnehall);
	
	//Skriv ut med bevarande av "white space"
	echo "<pre>$safe</pre>";
?>