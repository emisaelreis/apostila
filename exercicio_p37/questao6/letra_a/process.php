
<?php

include 'index.php';

$tempS = $_POST['temperatura'];

$tempF = (9 * $tempS + 160) / 5;

printf("<br> %0.2f graus Selsius correspondem a %0.2f graus Fahrenheit.", $tempS, $tempF);