<?php
include 'view.php';
include 'index.php';
$num_a = $_POST['num_a'];
$num_b = $_POST['num_b'];

$dif = $num_a - $num_b;

$quad = pow($dif, 2);

print view::exibir('Resultado',array(
    'Número A' => "$num_a",
    'Número B' => "$num_b",
    'Diferença' => "$dif",
    'Quadrado da diferença' => "$quad")
);