<?php

//Lista alla filar och mappar i Windows kataloger
$handle=opendir("c:/windows");
while (false !==($entry = readdir($handle))){
	echo "$entry";
	if(is_dir("c:windows/$entry")) {
		echo " [mapp]<br>";
	} else {
		echo " [fil]<br>";
	}
}

closedir($handle);
