<?php
include 'view.php';


class receber {
    private $valor;
    private $taxa;
    private $atrazo;

    public function __construct($val, $tax, $atr)
    {
        $this->valor = $val;
        $this->taxa = $tax;
        $this->atrazo = $atr;
    }

    public function receber()
    {
        $prestacao = $this->valor + ($this->valor * ($this->taxa / 100) * $this->atrazo);
        exibir("Calculo de Prestação",['Valor da prestação: ' => $this->valor, 'Taxa %: ' => $this->taxa, 'Dias atrazo; ' => $this->atrazo, 'Prestacao' => $prestacao]);
    }
}