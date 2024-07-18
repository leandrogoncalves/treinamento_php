<?php

namespace Unit\Entities;

use PHPUnit\Framework\TestCase;
use App\Entities\Fusca;

class FuscaTest extends TestCase
{

    protected Fusca $fusca;

    public function setUp(): void
    {
        parent::setUp();
        $this->fusca = new Fusca();
    }

    /**
     * @textdox O teste deve verificar se a instância de Fusca é um Fusca
     */
    public function testFuscaIsInstanceOfFusca()
    {
        $this->assertInstanceOf(Fusca::class, $this->fusca);
    }
}
