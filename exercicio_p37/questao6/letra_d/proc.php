<?php

include 'classe.php';
include 'index.php';

$vi = new viagem($_POST['tempo'], $_POST['velocidade']);

$vi->calculo();
