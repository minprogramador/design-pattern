<?php

namespace App;

interface Imposto
{
    public function calcula(Orcamento $Orcamento);
}