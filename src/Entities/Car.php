<?php

namespace App\Entities;

use App\Entities\Contracts\CarInterface;
Use \Exception;

abstract class Car implements CarInterface {
  protected ?string $name;
  protected ?string $brand;
  protected ?string $color;

  public function __construct(string $brand = null, string $color = null) {
    $this->brand = $brand;
    $this->color = $color;
    if ($this->isCar()) {
      //do something
    }
  }

  public function setBrand($brand): void {
    $this->brand = $brand;
  }

  public function setColor($color): void {
    if ($color == "red") {
      throw new Exception("Voce nao pode criar um carro vermelho");
    }
    $this->color = $color;
  }

  public function show(): void {
      echo "Nosso carro se chama {$this->name}";
      echo PHP_EOL."<br>";
      echo "Nosso carro é da marca {$this->brand}";
      echo PHP_EOL."<br>";
      echo "Nosso carro é da cor {$this->color}";
  }

  public function isCar(): bool {
    return true;
  }

  abstract public function drive(): void;
}
