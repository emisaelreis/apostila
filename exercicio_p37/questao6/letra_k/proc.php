<?php
include 'view.php';
include 'index.php';
$qtd_dolar = $_POST['qtd_dolar'];
$cotacao = $_POST['cotacao'];

$reais = $qtd_dolar * $cotacao;


print view::exibir('Resultado',array(
    'Dólares' => "$qtd_dolar",
    'Cotação' => "$cotacao",
    'Reais' => number_format($reais,2,",",".")
    )
);