<?php

for ($i=1;$i<=100;$i++) {

if ($i%10==1) {
	echo "<br>";
}
	if ($i%7==0) {
	?>
	<span style="font:20px Arial"><?php echo "$i " ?></span>
	
<?php }
elseif ($i%5==0) { ?>
	<span style="font-weight: bold"><?php echo "$i " ?></span>
<?php }
elseif ($i%2==0) { ?>
	<span style="color: blue"><?php echo "$i " ?></span><?php
}
else {
echo "$i ";

}}?>
</html>
