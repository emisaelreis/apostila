<?php
include 'view.php';
include 'index.php';
$num_a = $_POST['num_a'];
$num_b = $_POST['num_b'];
$num_c = $_POST['num_c'];
$soma = $num_a + $num_b + $num_c;

$quad = pow($soma,2);

print view::exibir('Resultado',array(
    'Número A' => "$num_a",
    'Número B' => "$num_b",
    'Número C' => "$num_c",
    'Soma' => "$soma",
    'Quadrado da Soma' => "$quad"
    )
);