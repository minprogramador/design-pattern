<?php

use PHPUnit\Framework\TestCase;

use App\Orcamento;
use App\CalculadoraDeImpostos;
use App\ICMS;
use App\ISS;
use App\KCV;

class CalculadoraDeImpostosTest extends TestCase
{
    protected $valorEntrada, $reforma, $Calculadora;

    public function setUp(): void {
        $this->valorEntrada = 500;
        $this->reforma = new Orcamento($this->valorEntrada);
        $this->Calculadora = new CalculadoraDeImpostos();
    }

    public function testCalculaValorComDescontoDeICMS() {
        
        $valorSaida     = 25;
        $calculadora    = $this->Calculadora;
        $valorCalculado = $calculadora->calcula($this->reforma, new ICMS());

        $this->assertEquals($valorSaida, $valorCalculado);

    }

    public function testCalculaValorComDescontoDeISS(){
        
        $valorSaida     = 50.0;
        $calculadora    = $this->Calculadora;
        $valorCalculado = $calculadora->calcula($this->reforma, new ISS());

        $this->assertEquals($valorSaida, $valorCalculado);
    }


    public function testCalculaValorComDescontoDeKCV(){
        
        $valorSaida     = 100.0;
        $calculadora    = $this->Calculadora;
        $valorCalculado = $calculadora->calcula($this->reforma, new KCV());

        $this->assertEquals($valorSaida, $valorCalculado);
    }



}