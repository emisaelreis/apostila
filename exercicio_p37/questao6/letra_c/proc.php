<?php
include 'index.php';

$raio = $_POST['raio'];
$altura = $_POST['altura'];

$volume = 3.14159 * pow($raio,2) * $altura;

printf("<br> O volume de uma latra com %0.2f cm de Raio<br> e %0.2f cm de Altura é %0.2f cm", $raio, $altura,$volume);