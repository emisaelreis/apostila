<?php
include 'view.php';
include 'index.php';
$comprimento = $_POST['comprimento'];
$largura = $_POST['largura'];
$altura = $_POST['altura'];

$volume = $comprimento * $largura * $altura;

print view::exibir('Resultado',array(
    'Comprimento' => "$comprimento m",
    'Largura' => "$largura m",
    'Altura' => "$altura m",
    'Volume' => "$volume litros")
);