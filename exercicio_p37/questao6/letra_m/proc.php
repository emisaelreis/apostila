<?php
include 'view.php';
include 'index.php';
$num_a = $_POST['num_a'];
$num_b = $_POST['num_b'];
$num_c = $_POST['num_c'];

$quadn_a = pow($num_a,2);
$quadn_b = pow($num_b,2);
$quadn_c = pow($num_c,2);

$soma = $quadn_a + $quadn_b + $quadn_c;

print view::exibir('Resultado',array(
    'Número A' => "$num_a quadrado $quadn_a",
    'Número B' => "$num_b quadrado $quadn_b",
    'Número C' => "$num_c quadrado $quadn_c",
    'Soma dos quadrados' => "$soma"
    )
);