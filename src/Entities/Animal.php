<?php

namespace App\Entities;

class Animal{

  protected string $species;

  public function getSpecies() {
      return $this->species;
  }

  public function makeSound(): string {
      throw new \Exception('Voce precisa implementar o metodos makeSound');
  }
}