<?php

namespace Unit\Entities;

use PHPUnit\Framework\TestCase;
use App\Entities\Dog;

class DogTest extends TestCase {

  protected Dog $Dog;

  protected function setUp(): void
  {
    parent::setUp();
    $this->Dog = new Dog();
  }

  /**
   * @testdox O teste deve retornar o som do animal
   */
  public function testShouldMakeSoundSuccessfuly(): void
  {
    $this->assertEquals("auau!", $this->Dog->makeSound());
  }

  /**
   * @testdox O teste deve retornar o resultado do metodo run com sucesso
   */
  public function testShouldDoRunningSuccessfuly(): void
  {
    $this->assertEquals("Corre!", $this->Dog->run());
  }


}