<?php

namespace App\Entities;

Use \Exception;

class Car {
  protected $brand;
  private $color;

  public function __construct($brand = null, $color = null) {
    $this->brand = $brand;
    $this->color = $color;
  }

  public function setBrand($brand) {
    $this->brand = $brand;
  }

  public function setColor($color) {
    if ($color == "red") {
      throw new Exception("Voce nao pode criar um carro vermelho");
    }
    $this->color = $color;
  }

  public function drive() {
      echo "Nosso carro é da marca {$this->brand}";
      echo PHP_EOL."<br>";
      echo "Nosso carro é da cor {$this->color}";
  }
}
