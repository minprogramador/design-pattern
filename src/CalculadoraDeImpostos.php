<?php

namespace App;

class CalculadoraDeImpostos
{
    public function calcula(Orcamento $Orcamento, Imposto $imposto) {
        return $imposto->calcula($Orcamento);
    }
}