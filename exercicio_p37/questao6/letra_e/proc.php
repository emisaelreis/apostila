<?php
include 'classe.php';
include 'index.php';

$calc = new receber($_POST['valor'], $_POST['taxa'], $_POST['atrazo']);
$calc->receber();