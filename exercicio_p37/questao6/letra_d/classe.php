<?php

class viagem 
{
    public $tempo;
    private $velocidade;

    public function __construct($tempo, $velocidade)
    {
        $this->tempo = $tempo;
        $this->velocidade = $velocidade;
    }

    public function calculo()
    {
        $distancia = $this->tempo * $this->velocidade;
        $litros_usados = $distancia / 12;

        print "<br><table id='result' border='0' width='30%'>";
        print "<tr><th colspan='2'>Resultado</th></tr>";
        print "<tr><td>Velocidade Méida</td><td width='30%'>$this->velocidade km/h</td></tr>";
        print "<tr><td>Tempo</td><td>$this->tempo hs</td></tr>";
        print "<tr><td>Distância</td><td>$distancia km</td></tr>";
        print "<tr><td>Litros usados</td><td>" . number_format($litros_usados,2,'.',',') . " litros</td></tr>";
        print "</table>";
    }
}
