<?php
declare(strict_types=1);

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
     * @testdox O teste deve verificar se a instância de Fusca é um Fusca
     * 
     * @group Fusca
     */
    public function testFuscaIsInstanceOfFusca(): void
    {
        $this->assertInstanceOf(Fusca::class, $this->fusca);
    }


    /**
     * @testdox o teste deve retornar o texto sobre o Fusca
     *
     * @return void
     * @group Fusca
     */
    public function testShouldReturnTheTextAboutTheFusca(): void
    {
        $expectedText = "Nosso carro se chama Fusca\n<br>Nosso carro é da marca \n<br>Nosso carro é da cor black";

        $this->assertEquals($expectedText, $this->fusca->show());
    }

    /**
     * @testdox O teste de retornar o texto sobre dirigir
     *
     * @return void
     * @group Fusca
     */
    public function testShouldReturnTextAboutDrive(): void
    {
        $expectedText = PHP_EOL."O carro Fusca está dirigindo";
        $this->assertEquals($expectedText, $this->fusca->drive());
    }

}
