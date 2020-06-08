<?php
include 'view.php';
include 'index.php';
$qtd_reais = $_POST['qtd_reais'];
$cotacao = $_POST['cotacao'];

$dolares = $qtd_reais / $cotacao;


print view::exibir('Resultado',array(
    'Reais' => number_format($qtd_reais,2,",","."),
    'Cotação do Dolar' => number_format($cotacao,2,",","."),
    'Dólares' => number_format($dolares,2,",",".")
    )
);