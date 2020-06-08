<?php
include 'view.php';
include 'index.php';
$numero = $_POST['numero'];

$quad = pow($numero, 2);

print view::exibir('Resultado',array(
    'Número' => "$numero",
    'Quadrado' => "$quad")
);