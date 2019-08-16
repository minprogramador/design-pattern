<?php

use App\Orcamento;
use App\CalculadoraDeImpostos;
use PHPUnit\Framework\TestCase;

class CalculadoraDeImpostosTest extends TestCase
{
    protected $valorEntrada, $reforma;

    public function setUp(): void {
        $this->valorEntrada = 500;
        $this->reforma = new Orcamento($this->valorEntrada);
    }

    public function testCalculaValorComDescontoDeICMS() {
        
        $valorSaida     = 25;
        $calculadora    = new CalculadoraDeImpostos();
        $valorCalculado = $calculadora->calculaICMS($this->reforma);

        $this->assertEquals($valorSaida, $valorCalculado);

    }

    public function testCalculaValorComDescontoDeISS(){

        $valorSaida     = 50.0;
        $calculadora    = new CalculadoraDeImpostos();
        $valorCalculado = $calculadora->calculaISS($this->reforma);

        $this->assertEquals($valorSaida, $valorCalculado);
    }
}