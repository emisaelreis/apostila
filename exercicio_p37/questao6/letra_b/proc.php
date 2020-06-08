<?php

include 'index.php';

$tempF = $_POST['temperatura'];

$tempC = ($tempF - 32) * (5/9);

printf("<br> %0.2f graus Fahrenheit correspondem a %0.4f graus Celsius", $tempF, $tempC);