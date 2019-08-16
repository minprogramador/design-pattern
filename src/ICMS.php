<?php

namespace App;

class ICMS implements Imposto
{
    public function calcula(Orcamento $Orcamento) {
        return $Orcamento->getValor() * 0.05;
    }

}