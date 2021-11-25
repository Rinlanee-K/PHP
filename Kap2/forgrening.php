<?php

$plac= 3;
$medalj="ja";

$plac<4 ? $medalj=true : $medalj=false;
var_dump($plac, $medalj);

$user=$GET['user'] ?? 'nobody';
var_dump($user)


?>