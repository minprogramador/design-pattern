<?php

namespace App;

class Orcamento
{
    private $valor;

    public function __construct($valor)
    {
        $this->valor = $valor;
    }

    public function getValor() {
        return $this->valor;
    }

}