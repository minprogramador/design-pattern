<?php

use App\Orcamento;
use PHPUnit\Framework\TestCase;

class OrcamentoTest extends TestCase
{
    public function testOrcamentoAutoloadPegandoValorInit() {

        $valorinit = 1000;
        $orcamento = new Orcamento($valorinit);

        $this->assertEquals($valorinit, $orcamento->getValor());
    }
}