<?php

use App\Orcamento;
use App\CalculadoraDeImpostos;
use PHPUnit\Framework\TestCase;

class CalculadoraDeImpostosTest extends TestCase
{
    public function testCalculaValorComDescontoDeICMS() {
        
        $valorEntrada = 500;
        $valorSaida = 25;
        $retorma = new Orcamento($valorEntrada);

        $calculadora = new CalculadoraDeImpostos();
        $valorCalculado = $calculadora->calculaICMS($retorma);

        $this->assertEquals($valorSaida, $valorCalculado);

    }
}